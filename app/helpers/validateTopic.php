<?php
function validateTopic($topic)
{

    $errors = array();
    

        if(empty($topic['name'])){
            array_push($errors, 'اسم الموضوع مطلوب');
        }

       
             $existingTopic = selectOne('topics', ['name' => $topic['name']]);
        if (isset($existingTopic)){
            if (isset($post['update-topic']) && $existingTopic['id'] != $topic['id']) {
                array_push($errors, 'العنوان مطابق لموضوع اخر');
            }

            if (isset($post['add-topic'])) {
                array_push($errors, 'العنوان مطابق لموضوع اخر');

            }
        }

        return $errors;
}

