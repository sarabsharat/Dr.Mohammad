<?php include("path.php") ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);




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
    <link rel="stylesheet" href="assets/css/style.css">
    <title><?php echo $post['title']; ?> | Dr.Mohammad Bsharat's Blog</title>
</head>
<body>
   
<?php include(ROOT_PATH . "/app/includes/header.php")?>
    

        <div class="page-wrapper">
            <div class="sidebar">
                <div class="div section topics">
                    <h5 class="section-title">المواضيع</h5>
                    <ul >
                        <?php foreach ($topics as $topic): ?>

                        <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name'] ?></a></li>

                        <?php endforeach; ?>
                        
                
                    </ul>
                </div>

                
                            

            </div>
            
        
            <div class="content">
                
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>
                    <div class="post-content">
                        <?php echo html_entity_decode($post['body']); ?>
                                </div>
                </div>

                
            </div>
    
          
                    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
