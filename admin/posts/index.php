<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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
    <title>Blog's Admin (Posts)</title>
</head>
<body>
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

    <div class="admin-content">
<div class="button-group">
    <a href="create.php" class="btn btn-big">إضافة منشور</a>
    <a href="index.php" class="btn btn-big">إدارة المنشورات</a>
</div>
<div>

    <h2 class="page-title">إدارة المنشورات</h2>
    <?php include(ROOT_PATH . "/app/includes/messages.php") ?>
    <table>
        <thead>
            <th>Num</th>
            <th>Title</th>
            <th>Author</th>
            <th colspan="3" class="action">Action</th>
        </thead>
        <tbody>
            <?php foreach ($posts as $key => $post): ?>
            <tr>

                <td><?php echo $key + 1; ?></td>

                <td class="title-flow"><?php echo $post['title'] ?></td>

                <td>Dr.Mohammad</td>

                <td class="ta3deel"><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">تعديل</a></td>
                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">حذف</a></td>
                <?php if ($post['published']): ?>
                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">إزالة المنشور</a></td>
                <?php else: ?>
                 <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">نشر</a></td>
                <?php endif; ?>
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