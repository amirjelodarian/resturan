@extends('layout')

@section('head')
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #fff;
            font-family: 'Roboto', sans-serif;
        }
        .form-control{
            height: 41px;
            background: #f2f2f2;
            box-shadow: none !important;
            border: none;
        }
        .form-control:focus{
            background: #e2e2e2;
        }
        .form-control, .btn{
            border-radius: 3px;
        }
        .signup-form{
            width: 390px;
            margin: 30px auto;
        }
        .signup-form form{
            color: #999;
            border-radius: 3px;
            margin-bottom: 15px;
            background: #fff;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .signup-form h2 {
            color: #333;
            font-weight: bold;
            margin-top: 0;
        }
        .signup-form hr {
            margin: 0 -30px 20px;
        }
        .signup-form .form-group{
            margin-bottom: 20px;
        }
        .signup-form input[type="checkbox"]{
            margin-top: 3px;
        }
        .signup-form .row div:first-child{
            padding-right: 10px;
        }
        .signup-form .row div:last-child{
            padding-left: 10px;
        }
        .signup-form .btn{
            font-size: 16px;
            font-weight: bold;
            background: #3598dc;
            border: none;
            min-width: 140px;
        }
        .signup-form .btn:hover, .signup-form .btn:focus{
            background: #2389cd !important;
            outline: none;
        }
        .signup-form a{
            color: #fff;
            text-decoration: underline;
        }
        .signup-form a:hover{
            text-decoration: none;
        }
        .signup-form form a{
            color: #3598dc;
            text-decoration: none;
        }
        .signup-form form a:hover{
            text-decoration: underline;
        }
        .signup-form .hint-text {
            padding-bottom: 15px;
            text-align: center;
        }
        .restaurant-owner{
            text-align: center;
            width: 100%;
        }
    </style>
@stop


@section('content')
<div class="signup-form">
    <form action="{{ route('register') }}" method="POST">
        @csrf
		<h2>ثبت نام</h2>
		<p>لطفا فیلد ها را برای ساخت حساب کامل کنید</p>
        <div class="error text-danger">
            {{-- {% if error != null %}
                {{ error|escape|linebreaks }}
            {% endif %} --}}
        </div>
		<hr />
        <div class="form-group">
        	<input type="name" class="form-control" name="name" placeholder="نام" required="required">
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="ایمیل" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="رمز" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="confirmPassword" placeholder="تکرار رمز" required="required">
        </div>
        <div class="form-group">
            <label for="restaurant_owner" class="text-center" style="direction: rtl; width: 100%">آیا صاحب رستوران هستید ؟</label>
            <input type="checkbox" class="restaurant-owner" name="restaurant_owner" >
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">ثبت نام</button>
        </div>
        <div class="hint-text">آیا حساب دارید <a href="{{ route('login') }}">وارد شوید</a></div>
    </form>
</div>
@stop
