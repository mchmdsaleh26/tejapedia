<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      width: 100%;
      min-height: 100vh;
      background: #EEEEEE;
      /* background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(images/bg5.jpg); */
      background-position: center;
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 400px;
      min-height: 400px;
      background: #FFF;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, .3);
      padding: 40px 30px;
    }

    .container .login-text {
      color: #111;
      font-weight: 500;
      font-size: 1.1rem;
      text-align: center;
      margin-bottom: 20px;
      display: block;
      text-transform: capitalize;
    }

    .container .login-email .input-group {
      width: 100%;
      height: 50px;
      margin-bottom: 25px;
    }

    .container .login-email .input-group input {
      width: 100%;
      height: 100%;
      border: 2px solid #e7e7e7;
      padding: 15px 20px;
      font-size: 1rem;
      border-radius: 30px;
      background: transparent;
      outline: none;
      transition: .3s;
    }

    .container .login-email .input-group input:focus,
    .container .login-email .input-group input:valid {
      border-color: #a29bfe;
    }

    .btn-submit {
      display: block;
      width: 100%;
      padding: 15px 20px;
      text-align: center;
      border: none;
      background: #a29bfe;
      outline: none;
      border-radius: 30px;
      font-size: 1.2rem;
      color: #FFF;
      cursor: pointer;
      transition: .3s;
    }

    .btn-submit:hover {
      transform: translateY(-5px);
      background: #6c5ce7;
    }

    .login-register-text {
      color: #111;
      font-weight: 600;
    }

    .login-register-text a {
      text-decoration: none;
      color: #6c5ce7;
    }

    .container-logout {
      width: 500px;
      min-height: 200px;
      background: #FFF;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0, 0, 0, .3);
      padding: 40px 30px;
    }

    .container-logout .login-email .input-group .btn {
      display: block;
      width: 100%;
      padding: 15px 20px;
      text-align: center;
      border: none;
      background: #a29bfe;
      outline: none;
      border-radius: 30px;
      font-size: 1.2rem;
      color: #FFF;
      cursor: pointer;
      transition: .3s;
      margin-top: 20px;
    }

    .container-logout .login-email .input-group .btn:hover {
      transform: translateY(-5px);
      background: #6c5ce7;
    }

    @media (max-width: 430px) {
      .container {
        width: 300px;
      }
    }
  </style>

  <title>Login</title>
</head>

<body>
  <div class="container">
    <div class="login-text" style="font-size: 2rem; font-weight: 800;">
      <h1><?php echo lang('Auth.login_heading'); ?></h1>
    </div>
    <?php echo form_open('auth/login'); ?>

    <div class="input-group">
      <?php echo form_label(lang('Auth.login_identity_label'), 'identity'); ?>
      <?php echo form_input($identity); ?>
    </div>

    <div class="input-group">
      <?php echo form_label(lang('Auth.login_password_label'), 'password'); ?>
      <?php echo form_input($password); ?>
    </div>

    <div>
      <?php echo form_label(lang('Auth.login_remember_label'), 'remember'); ?>
      <?php echo form_checkbox('remember', '1', false, 'id="remember"'); ?>
    </div>
    <br>
    <div class="input-group">
      <button name="submit" class="btn-submit">Login</button>
    </div>
    <br>
    <p class="login-register-text"><a href="forgot_password"><?php echo lang('Auth.login_forgot_password'); ?></a></p>

    <?php echo form_close(); ?>

  </div>
</body>

</html>