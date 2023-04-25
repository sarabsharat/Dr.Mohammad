<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/topics.php"); 
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
    <title>Blog's Admin (Add Topics)</title>
</head>

<body>
   
<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

<div class="admin-content">
<div class="button-group">
    <a href="create.php" class="btn btn-big">إضافة موضوع</a>
    <a href="index.php" class="btn btn-big">إدارة المواضيع</a>
</div>


    <h2 class="page-title">إضافة المواضيع</h2>
    <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
    <form action="create.php" method="post" class="edit">
        <div>
            <label>العنوان</label>
            <input type="text" name="name" value="<?php echo $name ?>" class="text-inputt">
        </div>
        <div>
        <label>الوصف</label>
             <textarea type="text" name="description" id="body" value="<?php echo $description ?>" class="text-inputt"></textarea>
</div>
            
            <div>
                <button type="submit" name="add-topic"class="btn btn-big">إضافة الموضوع</button>
            </div>
        </form>
        </div>

        
</div>

</div>



    








    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/main.js"></script>

    </body>
    </html>