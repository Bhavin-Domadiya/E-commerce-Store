<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sign up here</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<body class="log-in-page">
		<div class="container">
			<div class="log-in-details">
				<form action="user-signup" method="POST"> @csrf
					<input class="email" type="name" name="fname" placeholder="First Name">
					<input class="email password" type="name" name="lname" placeholder="Last Name">
					<input class="email" type="Email" name="email" placeholder="Email">
					<input class="email" type="phone" name="cno" placeholder="Phone">
					<input class="email password" type="password" name="pwd" placeholder="Password">
					<textarea name="address" class="email adddata">Address Here</textarea>
					<input type="file" name="image" id="">
					<div class="create-ac">
						<button class="praymari-button btndata" type="submit">Creat</button>
						<p><a href="/" style="text-decoration:underline;">Return to Store</a></p>
						<p><a class="under-line" href="/user-login">log in</a>
							<?xml version="1.0" ?><svg id="Outlined" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g id="Fill"><path d="M25,2H16V4h9a1,1,0,0,1,1,1V27a1,1,0,0,1-1,1H16v2h9a3,3,0,0,0,3-3V5A3,3,0,0,0,25,2Z"/><path d="M16,22.4l5-5a2,2,0,0,0,0-2.82l-5-5L14.55,11l4,4H4v2H18.59l-4,4Z"/></g></svg>
						</p>
					</div>
				</form>
			</div>	
		</div>
	</body>
</body>
</html>
    



