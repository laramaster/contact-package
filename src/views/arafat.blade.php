<!DOCTYPE html>
<html>
<head>
	<title>This is a contact pacage</title>
</head>
<body>
	<h2>Contact us</h2>
	<form action="{{ route('contact') }}" method="post">
		@csrf
		<input type="text" name="name" placeholder="Please enter your name">
		<input type="text" name="email" placeholder="Please enter your email">
		<textarea name="message" cols="30" rows="10" placeholder="Your message"></textarea>
		<button type="submit" value="submit">ty</button>
	</form>
</body>
</html>
