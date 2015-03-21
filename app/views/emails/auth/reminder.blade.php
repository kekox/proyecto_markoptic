<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
			Para recuperar su password,vaya a la siguiente direccion: {{ URL::to('password/reset', array($token)) }}.<br/>
			Este link expirara en {{ Config::get('auth.reminder.expire', 60) }} minutos. 



		</div>
	</body>
</html>
