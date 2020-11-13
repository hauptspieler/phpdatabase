<?php

include("../../app/database/db.php");
include("../../app/helpers/validatePost.php");

$topics = selectALl('topics');

if(isset($_POST['add-post'])){
    dd($_POST);
}

//  https://www.youtube.com/watch?v=fC4hQH4GvbU&list=PL3pyLl-dgiqD0eKYJ-XSxrHaRh-zsA2tP&index=22&ab_channel=AwaMelvine
// I have solved the problem put I am currently having another one... 
// f
// When I remove the line $topics = selectALl('topics');  from posts.php the error stops showing but the category is empty ...

// Do you know what could it be?  