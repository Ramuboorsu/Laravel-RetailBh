<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Forgot Password</title>
</head>
<body>
	<form action="/check" method="post">
	
	<input type="email" name="email" id="email">
	{{csrf_field()}}
	<button type="submit">Submit</button>
	</form>
</body>
</html>