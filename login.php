<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="images/logo-pcu.png">
<style>

button.btn {
    height: 40px;
    padding: 0 20px;
    background: #1ca0de;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    color: #fff;
}

.form-box {
    margin-top: 7%;
}

.form-top {
    padding: 10px 25px 15px 25px;
    background: rgba(0, 0, 0, 0.5);
}

.form-top-left {
    padding-top: 30px;
}

.form-top-left h3, p { 
    margin-top: 0; 
    color: #fff; 
    font-family: 'Open Sans', sans-serif;
}

.form-bottom {
    padding: 25px 25px 30px 25px;
    background: rgba(0, 0, 0, 0.3);
}

.form-bottom form button.btn {
    width: 20%;
    margin-left: 40%;
}

input[type="text"], 
input[type="password"], 
textarea, 
textarea.form-control {
    height: 45px;
    padding: 0 20px;
    margin-left: 25px;
    vertical-align: middle;
    background: #fff;
    border: 3px solid #fff;
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    color: #888;
    width: 90%;
}
.glyphicon.glyphicon-lock{
    font-size: 60px;
    right: 40px;
    top: 40px;
    position: absolute;
    color: white;
}
</style>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="top-content">
  <div class="inner-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3>Sign-in Now</h3>
                        <p>Enter your username and password to log on:</p>
                        <span class="glyphicon glyphicon-lock"></span>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username" required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password" required>
                        </div>
                            <button type="submit" class="btn">SIGN-IN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</body>
</html>