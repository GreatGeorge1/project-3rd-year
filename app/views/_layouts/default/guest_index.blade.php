<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Проект - Welcome</title>
    <link href="{{asset('css/main/guest_style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  

    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
	<script>
	$(document).ready(function () {
		$('#login-button').on('click',function(){
			$('#login-button').css("background-color","#9933ff");
			$('#signup-button').css("background-color","#33cc33");
			$('#login-form').slideDown();
			$('#signup-form').hide();
			$('.alert').hide();
		});
		$('#signup-button').on('click',function(){
			$('#login-button').css("background-color","#9933ff");
			$('#signup-button').css("background-color","#33cc33");
			$('#login-form').hide();
			$('#signup-form').slideDown();
			$('.alert').hide();

		});
	});
	</script>
</head>
<body>

	<div id="main-container">


		<nav class="clearfix">
			<h2 id="login-button">Вхід</h2>
			<h2 id="signup-button">Реєстрація</h2>
		</nav>

		@include('flash::message')
        @include('_layouts.default.partials.errors')

		<!--Signup-->
		<div id="signup-form">
            {{Form::open(array('action' => 'signup'))}}
            <div class="form-group">
                {{Form::text('fname',null, array('placeholder'=>'Ім\'я'))}}
            </div>

            <div class="form-group">
                {{Form::text('lname',null, array('placeholder'=>'Прізвище'))}}
            </div>

            <div class="form-group">
                {{Form::text('email',null, array('placeholder'=>'Email'))}}
            </div>

            <div class="form-group">
                {{Form::text('faculty_number',null, array('placeholder'=>'Група'))}}
            </div>

            <div class="form-group">
                {{Form::password('password' ,array('placeholder'=>'Пароль'))}}
            </div>

            <div class="form-group">
                {{Form::password('password_confirmation', array('placeholder'=>'Підтвердіть пароль'))}}
            </div>

            {{Form::submit('Зареєструватись',array('class'=>'btn btn-primary'))}}
            {{ Form::close() }}
        </div>

        <!--Login-->
		<div id="login-form">
            {{Form::open(array('action' => 'login'))}}
            <div class="form-group">
                {{Form::text('email',null, array('placeholder'=>'Email' ))}}
            </div>

            <div class="form-group">
                {{Form::password('password' ,array('placeholder'=>'Пароль'))}}
            </div>

            {{Form::submit('Вхід',array('class'=>'btn btn-primary'))}}

            {{ Form::close() }}
	    </div>

	</div>
</body>
</html>
