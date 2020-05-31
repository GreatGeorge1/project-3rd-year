<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Відновлення паролю</h2>

		<div>
			Щоб скинути пароль, заповніть цю форму:{{ URL::to('password/reset', array($token)) }}.<br/>
			Термін дії цього посилання закінчується через {{ Config::get('auth.reminder.expire', 60) }} хвилин.
		</div>
	</body>
</html>
