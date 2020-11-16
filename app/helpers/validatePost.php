<?php


function validatePost($post)
{
    $errors = array();

    if (empty($post['title'])) {
        array_push($errors, 'É preciso inserir um título');
    }

    if (empty($post['body'])) {
        array_push($errors, 'É preciso inserir um "body"');
    }

    if (empty($post['topics_id'])) {
        array_push($errors, 'Escolha uma categoria');
    }

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if ($existingPost) {
        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Um post com este título já existe');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Um post com este título já existe');
        }
    }

    return $errors;
}