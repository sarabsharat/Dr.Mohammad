<?php include("path.php") ?>
<?php 
include(ROOT_PATH . "/app/controllers/topics.php"); ?>


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
    <title>Dr.Mohammad Bsharat's Blog</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php")?>

    <div class="contact-container">
        <div class="contact-info">
            <p>جاهزون للتواصل معكم و التجاوب مع أي استفسارات لديكم</p>
        </div>
        <div class="contact-us">
            <h1 class="cu-logo">تواصل معنا</h1>
            <form action="send-email.php" method="post">
            <textarea type="text" name="name" class="text-input contact-input" placeholder="الاسم"></textarea>

                <input type="email" name="email" class="text-input contact-input" placeholder="...بريدك الإلكتروني">

                <textarea name="msg" class="text-input contact-input" placeholder="الرسالة"></textarea>

                <button type="submit" name="contact-us" value="Send" class="kabsa"><i class="fas fa-envelope"></i> أرسل</button>
            </form>
        </div>
        
    </div>
    
    


 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>