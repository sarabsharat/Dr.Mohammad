<header>
<div class="logo">
    <a href="<?php echo BASE_URL . '/index.php' ?>">
        <h1 class="logo-text">
            <img src="<?php echo BASE_URL . '/assets/images/logo.png' ?>" alt="Logo Image">
        </h1>
    </a>
</div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav"> 
            <?php if (isset($_SESSION['username'])): ?>
            <li>
                <a href="#">
                <i class="fa fa-user"></i>    
                <?php echo $_SESSION['username']; ?>
                <i class="fa fa-chevron-down"></i>
                &nbsp; &nbsp;
                </a> 
                <ul>
                    
                    <li><a href="<?php echo BASE_URL . '/logout.php'?>" class="logout">Logout</a></li>
                </ul>
            </li>
            <?php endif; ?>
        </ul>
    </header>