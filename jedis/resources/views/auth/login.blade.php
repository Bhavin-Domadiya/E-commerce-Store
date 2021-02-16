<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Login Here</title>
</head>
<body>
    <body class="log-in-page">
        <div class="container">
            <div class="log-in-details">
                <form action="user-login" method="POST"> @csrf
                    <input class="email" type="Email" name="email" placeholder="Email">
                    <input class="email password" type="password" name="pwd" placeholder="Password">
                    <div class="create-ac">
                        <p><a href="#" style="text-decoration:underline;">Forgot your password?</a></p>
                        <button class="praymari-button btndata" type="submit">Log in</button>
                        <p><a class="under-line" href="/user-signup">Create account</a>
                            <?xml version="1.0" ?><svg id="account" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><title/><g id="about"><path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"/><path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"/></g></svg>
                        </p>
                        <p><a href="/" style="text-decoration:underline;">Return to Store</a></p>
                    </div>
                </form>
            </div>	
        </div>
    </body>
    
    
        @if (Session::get('login-error'))
        <script> alert("{{Session::get('login-error')}}");</script>
        @endif
    
</body>
</html>


