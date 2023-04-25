<?php

function validatePost($post)
{

    $errors = array();
    

        if(empty($post['title'])){
            array_push($errors, 'العنوان مطلوب');
        }

        if(empty($post['body'])){
            array_push($errors, 'العرض مطلوب');
        }
        if(empty($post['topic_id'])){
            array_push($errors, 'اختر موضوعا');
        }
        
        
        $existingPost = selectOne('posts', ['title' => $post['title']]);
        if (isset($existingPost)){
            if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
                array_push($errors, 'العنوان مطابق لمنشور اخر');
            }
            if (isset($post['add-post'])) {
                array_push($errors, 'العنوان مطابق لمنشور اخر');

            }
        }

        return $errors;
}

