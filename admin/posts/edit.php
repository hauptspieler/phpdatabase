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

    <title>Admin - editar posts</title>
</head>

<body>

<?php include("../../app/includes/adminheader.php"); ?>


    <!-- Admin page wrapper -->
    <div class="admin-wrapper">

       

        <!-- Admin content -->
        <div class="admin-content">
           
            <div class="button-group">
                <a href="create.php" class= "btn btn-big">Add Post</a>
                <a href="index.php" class= "btn btn-big">Manage Posts</a>
            </div>

            <div class="content">

                <h2 class="page-title">Editar Posts</h2>

                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <div>
                        <label>Título</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                    
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                       
                        <label>Categoria</label>
                        <select name="topics_id" class="text-input">
                            <option value=""></option>
                           
                            <?php foreach ($topics as $key => $topics): ?>
                                    <?php if (!empty($topics_id) && $topics_id == $topics['id'] ): ?>
                                        <option selected value="<?php echo $topics['id'] ?>"><?php echo $topics['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topics['id'] ?>"><?php echo $topics['name'] ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            
                        </select>
                    </div>
                    <div>
                            <?php if (empty($published) && $published == 0): ?>
                                <label>
                                    <input type="checkbox" name="published">
                                    Publicar
                                </label>
                            <?php else: ?>
                                <label>
                                    <input type="checkbox" name="published" checked>
                                    Publicar
                                </label>
                            <?php endif; ?>
                           

                        </div>

                    <div>
                       
                        <buttton type="submit" name="update-post" class="btn btn-big">Update Post</buttton>
                    </div>
                </form>
                 

            </div>

        </div>

    </div>


</body>

</html>





<!-- Script para caixa de texto -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"></script>
