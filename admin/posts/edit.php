

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
    <title>Blog's Admin (Edit Posts)</title>
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


    <h2 class="page-title">تعديل المنشور</h2>
    <form action="edit.php" method="post" class="edit" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id ?>">

    <div>
            <label>العنوان</label>
            <input type="text" name="title" value="<?php echo $title ?>" class="text-inputt">
        </div>
        <label>العرض</label>
            <textarea name="body" id="bodyy" value="<?php echo $body; ?>" class="text-inputt"></textarea>
            <div>
            <label>صورة:</label>
           <input type="file" name="image" class="tex-inputt"></div>
            <div>

                <label>المواضيع</label>
                <select name="topic_id" class="text-inputt">
                    <option value=""></option>
                <?php foreach ($topics as $key => $topic): ?>
                        <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>

                        <?php else: ?>
                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                        <?php endif; ?>
                    


                <?php endforeach; ?>
                </select>
            </div>
            <div>
                <?php if (empty($published) && $published == 0): ?>
                <label>
                    <input type="checkbox" name="published">
                    نشر
                </label>
                <?php else: ?>
                    <label>
                    <input type="checkbox" name="published" checked>
                    نشر
                    </label>
                    <?php endif; ?>
            </div>
                <button type="submit" name="update-post" class="btn btn-big">تعديل المنشور</button>
            </div>
        </form>
        </div>
        
</div>





    























    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/main.js"></script>

    </body>
    </html>