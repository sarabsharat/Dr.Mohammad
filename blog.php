<?php include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'أحدث المنشورات';

if(isset($_GET['t_id'])) {
    $posts = getPostsByTopicId($_GET['t_id']);
    $postsTitle = " المنشورات الآتية تحت تصنيف " . $_GET['name'];
}

else if (isset($_POST['search-term'])){
    $postsTitle = " البحث على ->" . $_POST['search-term'];
    $posts = searchPosts($_POST['search-term']);
} else {
    $posts = getPublishedPosts();
}

?>

<!DOCTYPE html>
<html lang="ar">
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
    <title>Dr.Mohammad Bsharat's Blog</title>
</head>
<body>
    
    <div class="spacer3 layer4">
        <div class="sidebar">
            <div class="section search">
                <h5 class="section-title">ابحث</h5>
                <form action="blog.php" method="post">
                    <input type="text" name="search-term" class="text-inputt" placeholder="ابحث...">
                </form>
            </div>
                        <div class="div section topics">
                            <h5 class="section-title">المواضيع</h5>
                            <ul >

                            <?php foreach ($topics as $key => $topic): ?>
                                <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name'] ?></a></li>
                            <?php endforeach; ?>
                            </ul>
                        </div>


        </div>
        <div class="content">

            <div class="main-content">
                <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

                <?php foreach ($posts as $post): ?>
                    <div class="post">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">

                        <div class="post-preview">
                            <h1> <a href="single.php?id=<?php echo $post['id']; ?>"></a> <?php echo $post['title']; ?></h1>
                            <i class="far fa-user"><?php echo $post['username']; ?></i>
                            &nbsp;
                            <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['create_at'])); ?></i>
                            <p class="preview-text">
                                <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
                            </p>
                            <a href="single.php?id=<?php echo $post['id']; ?>" class="more">إقرأ المزيد</a>
                        </div>
                    </div>

                <?php endforeach; ?>


           





            </div>
            
            
             
        </div>
    </div>
    
    
    <?php include(ROOT_PATH . "/app/includes/header.php")?>
    
    <div class="spacer4 layer5">
    
    </div>
    <?php include(ROOT_PATH . "/app/includes/footer.php")?> 
    

    
    




        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>