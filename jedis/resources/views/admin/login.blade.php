@if (Session::get('admin'))
    <script> window.location.href="admin-panel"; </script>
@else
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Admin Login Here</title>
</head>
<body>
    <body class="log-in-page">
        <div class="container">
            <div class="log-in-details">
                
                <form action="admin-login" method="POST"> @csrf
                    <h1 class="admin-head"> Admin Login Here </h1>
                    <input class="email" type="Email" name="email" placeholder="Email">
                    <input class="email password" type="password" name="pwd" placeholder="Password">
                    <div class="create-ac">
                        <p><a href="#" style="text-decoration:underline;">Forgot your password?</a></p>
                            <button class="praymari-button btndata" type="submit">Log in</button>
                        <p><a href="/" style="text-decoration:underline; ">Return to Store</a></p>
                    </div>
                </form>
            </div>	
        </div>
    </body>
    
    
        @if (Session::get('admin-login-error'))
        <script> alert("{{Session::get('admin-login-error')}}");</script>
        @endif
    
</body>
</html>    
@endif



