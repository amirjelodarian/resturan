<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function restaurant()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function reservedTable()
    {
        return $this->hasMany(ReservedTable::class);
    }

    public function restaurantPicture()
    {
        return $this->hasMany(RestaurantPicture::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class);
    }


    // $user->hasRole("administrator")

    public function hasRole($role){
        if(is_string($role))
            return $this->roles->contains('name', $role);
        return !! $role->intersect($this->roles)->count();
    }

    public function assignRole($role){
        $this->roles()->sync(Role::whereName($role)->firstOrFail());
    }

    public function takeRole($role){
        $this->roles()->detach(Role::whereName($role)->firstOrFail());
    }

}
