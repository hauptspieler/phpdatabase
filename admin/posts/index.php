<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <title>Admin - Manage posts</title>
</head>

<body>

<?php include("../../app/includes/adminheader.php"); ?>


    <!-- Admin page wrapper -->
    <div class="admin-wrapper">

       

    <div class="admin-content">
           
           <div class="button-group">
               <a href="create.php" class= "btn btn-big">Add Post</a>
               <a href="index.php" class= "btn btn-big">Manage Posts</a>
           </div>

           <div class="content">

               <h2 class="page-title">Manage Posts</h2>

               <table>
                  
                   <thead>
                       <th>Codigo</th>
                       <th>Titulo</th>
                       <th>Autor</th>
                       <th colspan="3">Ação</th>
                   </thead>
                   <tbody>
                       <tr>
                           <td>1</td>
                           <td>This is the first post</td>
                           <td>Raphael</td>
                           <td><a href="#" class="edit">editar</a></td>
                           <td><a href="#" class="delete">deletar</a></td>
                           <td><a href="#" class="publish">publlicar</a></td>
                       </tr>
                       <tr>
                           <td>2</td>
                           <td>This is the second post</td>
                           <td>Baisch</td>
                           <td><a href="#" class="edit">editar</a></td>
                           <td><a href="#" class="delete">deletar</a></td>
                           <td><a href="#" class="publish">publicar</a></td>
                       </tr>
                   </tbody>
               </table>

           </div>

       </div>

    </div>


</body>

</html>





<!-- Script para caixa de texto -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"></script>
