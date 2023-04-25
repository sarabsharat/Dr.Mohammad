<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <script src="https://kit.fontawesome.com/cabb8313a8.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&display=swap');
      </style>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap');
      </style>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Blog's Admin (Add Users)</title>
</head>
<body>
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

    <div class="admin-content">
<div class="button-group">
    <a href="create.php" class="btn btn-big">إضافة مستخدم</a>
    <a href="index.php" class="btn btn-big">إدارة المستخدمين</a>
</div>


<h2 class="page-title">إضافة مستخدم</h2>

    <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>

    <form action="create.php" method="post" class="edit">
        <div>
            <label>اسم المستخدم</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-inputt">
        </div>
        
        <div>
         <label>البريد الإلكتروني</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="text-inputt">
        </div>
        
        <div><label>كلمة المرور</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text-inputt">
        </div>
        <div>
        <label>تأكيد كلمة المرور</label>
            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-inputt">
        </div>
        <div>
            <?php if (isset($admin) && $admin == 1): ?>

            <label><input type="checkbox" name="admin" checked>ادمن</label>

                <?php else: ?>

            <label><input type="checkbox" name="admin">ادمن</label>
                    <?php endif; ?>
            
            
        </div>



                <button type="submit" name="create-admin" class="btn btn-big">إضافة المستخدم</button>
            </div>

        
</div>

</div>



    























    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/main.js"></script>

    </body>
    </html>