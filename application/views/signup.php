<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $baseurl ?>assets/css/style.css">

</head>
<body>
    <h2>Sign Up</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('signup/register'); ?>
    <form method="post">
    <div class="container">
      <div class="card">
        <div class="card_title">
          <h1>Create Account</h1>
        </div>
        <div class="form">
        <form method="post">
          <input type="text" name="username" id="username" placeholder="UserName" />
          <input type="email" name="email" placeholder="Email" id="email" />
          <input type="password" name="password" placeholder="Password" id="password" />
          <input type="password" name="confirm password" placeholder="Confirm password" id="password" />
          <button>Sign Up</button>
          </form>
        </div>
        <div class="card_terms">
            <input type="checkbox" name="" id="terms"> <span>I have read and agree to the <a href="">Terms of Service</a></span>
        </div>
      </div>
    </div>
    </form>
</body>
</html>
