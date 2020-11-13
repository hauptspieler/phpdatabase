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

    <title>Admin - Add posts</title>
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

                <h2 class="page-title">Add Posts</h2>

                <form action="create.php" method="post">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" class="text-input">
                    </div>

                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"></textarea>
                    </div>
                    
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                       
                        <label>Categoria</label>
                        <select name="topic" class="text-input">
                            <option value="categoria 1">categoria 1 </option>
                           
                            <?php foreach($topics as $key => $topic): ?>
                             <option value="<?php echo $topic['name']?>"><?php echo $topic['name']?></option>
                            <?php endforeach; ?>



                            <?php foreach ($topics as $key => $topic): ?>
                                    <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                        <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                            
                        </select>
                    </div>

                    <div>
                       
                    <button type="submit" name="add-post" class="btn btn-big">Add Post</button>	                    </div>
                </form>
                 

            </div>

        </div>

    </div>


</body>

</html>





<!-- Script para caixa de texto -->
<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<script src="../../assets/js/scripts.js"></script>
