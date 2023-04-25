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
    <title>Blog's Admin (Users)</title>
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


    <h2 class="page-title">إدارة المستخدمين</h2>
    <?php include(ROOT_PATH . "/app/includes/messages.php")?>
    <table>
        <thead>
            <th>Num</th>
            <th>اسم المستخدم</th>
            <th>البريد الإلكتروني</th>
            
            <th colspan="2" class="action">Action</th>
        </thead>
        <tbody>
        <?php foreach ($admin_users as $key => $user): ?>
            <tr>
                <td><?php echo $key + 1; ?></td>
                <td class="title-flow"><?php echo $user['username']; ?></td>
                <td class="title-flow"><?php echo $user['email']; ?></td>
                
                
                <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">تعديل</a></td>
                <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">حذف</a></td>
                
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
        
</div>





    























    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/main.js"></script>

    </body>
    </html>