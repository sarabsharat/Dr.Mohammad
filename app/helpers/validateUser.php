<?php
function validateUser($user)
{

    $errors = array();
    

        if(empty($user['username'])){
            array_push($errors, 'اسم المستخدم مطلوب');
        }

        if(empty($user['email'])){
            array_push($errors, 'البريد الإلكتروني مطلوب');
        }
        if(empty($user['password'])){
            array_push($errors, 'كلمة المرور مطلوبة');
        }
        
        if ($user['passwordConf'] !== $_POST['password']){
            array_push($errors, 'كلمة المرور غير مطابقة');
        }

    
        $existingUser = selectOne('users', ['email' => $user['email']]);
        if (isset($existingUser)){
            if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
                array_push($errors, 'البريد الإلكتروني مستخدم مسبقا');
            }

            if (isset($user['create-admin'])) {
                array_push($errors, 'البريد الإلكتروني مستخدم مسبقا');

            }
        }
         return $errors;
}

function validateLogin($user)
{

    $errors = array();
    

        if(empty($user['username'])){
            array_push($errors, 'اسم المستخدم مطلوب');
        }

        
        if(empty($user['password'])){
            array_push($errors, 'كلمة المرور مطلوبة');
        }
        
        
        return $errors;
}
 