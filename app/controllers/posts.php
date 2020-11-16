<?php

include("../../app/database/db.php");
include("../../app/helpers/validatePost.php");

$table = 'posts';

$topics = selectAll('topics');
$posts = selectAll($table);

$errors = array();
$id = "";
$title = "";
$body = "";
$topics_id = "";
$published = "";



if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topics_id = $post['topics_id'];
    $published = $post['published'];
}

if (isset($_GET['delete_id'])) {
    
    
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deletado com sucesso";
    $_SESSION['type'] = "success";
    header("location: " . "../../admin/posts/index.php");
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Estado do post modificado!";
    $_SESSION['type'] = "success";
    header("location: " . "../../admin/posts/index.php"); 
    exit();
}



if (isset($_POST['add-post'])) {

    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = "../../assets/images" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Falha ao enviar imagem");
        }
    } else {
       array_push($errors, "É necessario adicionar uma imagem");
    }
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);  // "htmlentities" é uma boa pratica de segurança para que não seja salvo nada dentro do banco de dados com formatos HTML, evitando assim o que é chamado de "CROSSSITES SCRIPTING ATTACKS" 
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post criado com sucesso";
        $_SESSION['type'] = "success";
        header("location: " . "../../admin/posts/index.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topics_id = $_POST['topics_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}


if (isset($_POST['update-post'])) {
   
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = "../../assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Falha ao enviar imagem");
        }
    } else {
       array_push($errors, "É necessario enviar uma imagem!");
    }

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
    
        $post_id = update($table, $id, $_POST);
        $_SESSION['message'] = "Post atualizado com sucesso!";
        $_SESSION['type'] = "success";
        header("location: " . "../../admin/posts/index.php");       
    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $topics_id = $_POST['topics_id'];
        $published = isset($_POST['published']) ? 1 : 0;
    }

}


// Just finished the update and delete posts video number #25 of the series and when I try to upload a post with an image I receive this message: 

// Warning: move_uploaded_file(../../assets/images1605497112_Screenshot from 2020-11-12 16-00-24.png): failed to open stream: Permission denied in /opt/lampp/htdocs/blog/app/controllers/posts.php on line 60

// Warning: move_uploaded_file(): Unable to move '/opt/lampp/temp/phpYg13t1' to '../../assets/images1605497112_Screenshot from 2020-11-12 16-00-24.png' in /opt/lampp/htdocs/blog/app/controllers/posts.php on line 60

// Important note that I am not using users in my code, removed the "adminOnly" function but still having troubles... Do you know what it can be?