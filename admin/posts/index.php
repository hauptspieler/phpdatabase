<?php include("../../app/controllers/posts.php"); ?>

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
               <a href="index.php" class= "btn btn-big">Gerenciamento de posts</a>
           </div>

           <div class="content">

               <h2 class="page-title">Gerenciamento de postos</h2>

               <?php include("../../app/includes/messages.php") ?>

               <table>
                  
                   <thead>
                       <th>Codigo</th>
                       <th>Titulo</th>
                       
                       <th colspan="3">Ação</th>
                   </thead>
                   <tbody>
                       <?php foreach ($posts as $key => $post): ?>

                         <tr>
                            <td><?php echo $key + 5; ?></td>
                            <td><?php echo $post['title'] ?></td>
                           <td><a href="edit.php?=id=<?php echo $post['id'];?>" class="edit">editar</a></td>
                           <td><a href="edit.php?=delete_id=<?php echo $post['id'];?>" class="delete">deletar</a></td>
                           
                           <?php if ($post['published']): ?>
                           <td><a href="#" class="unpublish">Despublicar</a></td>
                           <?php else: ?>
                           <td><a href="#" class="publish">Publicado</a></td>
                           <?php endif; ?>

                        </tr>

                       <?php endforeach; ?>
                     
                     
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
