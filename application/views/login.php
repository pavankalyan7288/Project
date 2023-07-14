<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    form {border: 3px solid #f1f1f1;}

    input[type=text], input[type=password] {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    button:hover {
        opacity: 0.8;
    }

    .login-button {
        padding: 12px;
        background: greenyellow;
        color: black;
        font-size: 18px;
    }

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
    }

    .link {
        padding: 12px;
        font-size: 18px;
        color: black;
        background-color: #f44336;
        width: 160px;
        text-align: center;
    }

    .container {
        padding: 16px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
        span.psw {
            display: block;
            float: none;
        }
        .cancelbtn {
            width: 100%;
        }
    }
</style>
</head>
<body>
    <h2>Login</h2>
    <?php echo validation_errors(); ?>
    <?php echo $this->session->flashdata('error'); ?>
    <?php /* echo form_open('login/authenticate');  */?>
    <form method="post" action="<?php echo base_url()?>login/authenticate">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo set_value('username'); ?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br>

        <input type="submit" name="login" value="Login">
        <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </center>
        <p class="link"><a href="Signup/register">SIGNUP</a></p>
    </form>
    </form>
</body>
</html>
