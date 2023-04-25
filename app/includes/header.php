


<header>
<div class="logo">
    <a href="<?php echo BASE_URL . '/index.php' ?>">
        <h1 class="logo-text">
            <img src="./assets/images/logo.png" alt="Logo Image">
        </h1>
    </a>
</div>

        
        <ul class="nav">
            <i class="fa fa-bars menu-toggle"></i>
            <li> <a href="<?php echo BASE_URL . '/blog.php' ?>">المدونة</a>
            <ul>
            <?php foreach ($topics as $key => $topic): ?>
            <li><a href="<?php echo BASE_URL . '/blog.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name'] ?></a></li>
            <?php endforeach; ?>    
        </ul>
        
        </li>
                
                <li> <a href="<?php echo BASE_URL . '/cv.php' ?>">السيرة الذاتية</a></li>
                <li> <a href="<?php echo BASE_URL . '/contact.php' ?>">تواصل معنا</a></li>

                <?php if (isset($_SESSION['id'])): ?>
            
            <li>
                <a href="#"> 
            <i class="fa fa-user"></i>
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
                </a> 
                <ul>
                        <?php if($_SESSION['admin']): ?>
                    <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>"> dashboard</a></li>
                        <?php endif; ?>
                    <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
                </ul>
            </li>
            

<?php else: ?>
         <li><a href="<?php echo BASE_URL . '/register.php' ?>">إنشاء حساب</a></li>
            <li><a href="<?php echo BASE_URL . '/login.php' ?>">تسجيل دخول</a></li> 
<?php endif; ?>

        </ul>
    </header>