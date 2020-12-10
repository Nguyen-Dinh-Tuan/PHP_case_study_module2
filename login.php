<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-image: linear-gradient(to left top, #17a2b8, #14abc4, #12b3d1, #11bcde, #12c5eb);
            height: 100vh;
        }
        #login .container #login-row #login-column .login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            border: 1px solid #9C9C9C;
            background-image: linear-gradient(to bottom, #aec1c3, #a9b5b7, #bcc5c6, #cfd5d5, #e3e5e5);
        }
        #login .container #login-row #login-column .login-box #login-form {
            padding: 20px;
        }
        #login .container #login-row #login-column .login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $user="admin";
    $pass="123456";
    if (!empty($_POST['username']) && !empty($_POST['password'])
        && $_POST['username']==$user && $_POST['password']==$pass){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        header('location:index.php?page=list-student');
    } else  {
        echo 'Wrong Password. Please try again';
    }
}
?>
<body>
<div id="login">
    <h4 class="text-center text-white pt-5">LOGIN</h4>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="index.php?page=guest" method="post">
                        <h3 class="text-center text-info">Login</h3>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="#" class="text-info">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</body>
</html>
<?php
