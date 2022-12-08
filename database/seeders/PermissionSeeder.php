<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    private $permission = [
        'create' => 'Create',
        'read' => 'Read',
        'update' => 'Update',
        'delete' => 'Delete'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->permission as $name => $label)
            Permission::create([
                'name'  => $name,
                'label' => $label
            ]);
    }
}
