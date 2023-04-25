<?php if(count($errors) > 0): ?>
            <div class="msg error">
                <?php foreach ($errors as $error): ?>
            <li><?php echo $error; ?></li>
            <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <style>
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap');
      </style>