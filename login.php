<?php include("path.php") ?>

<?php include(ROOT_PATH . "/app/controllers/users.php");

guestsOnly();
?>
<?php include(ROOT_PATH . "/app/includes/header.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://kit.fontawesome.com/cabb8313a8.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap');
      </style>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap');
      </style>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
    


    <div class="auth-content">

        <form action="login.php" method="post">
<h2 class="form-title">تسجيل الدخول</h2>

<?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

<div>
    <label>اسم المستخدم</label>
    <input type="text" name="username" values="<?php echo $username; ?>" class="text-input">
</div>

<div>
    <label>كلمة المرور</label>
    <input type="password" name="password" values="<?php echo $password; ?>" class="text-input">
</div>

<div>
    <button type="submit" name="login-btn" class="btn btn-big">تسجيل الدخول</button>
</div>

<p class="son">أو <a href="<?php echo BASE_URL . '/register.php' ?>" class="sin">أنشئ حسابًا</a></p>

</form>
    </div>

    <script src="assets/js/main.js"></script>
</body>
</html>