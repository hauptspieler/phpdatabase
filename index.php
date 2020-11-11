<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
   
    <title>Página Principal</title>
</head>
<body>
    
    
    <?php include("app/includes/header.php"); ?>    
   
    <!-- posts -->


    <!-- What is a Clearfix?
The clearfix, for those unaware, is a CSS hack that solves a persistent bug that occurs when two floated elements are stacked next to each other. When elements are aligned this way, the parent container ends up with a height of 0, and it can easily wreak havoc on a layout. -->
    <div class="content clearfix">

        <!-- main content -->
        <div class="main-content">
            <h1 class="recent-post-title">Posts Recentes</h1>
       
            <div class="post">
                <img src="images/numbeone.png" alt=""  class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Primeio post</a></h2>
                    <i class="calendar"> Mar, 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium repellendus nesciunt aliquam saepe sint voluptatibus excepturi nobis rerum aliquid vel repellat reiciendis, voluptate obcaecati et ipsum at provident neque.
                        ique velit in voluptates. Perspiciatis vero nostrum aperiam esse temporibus.

                        ostrum aperiam esse temporibus.
                    </p>    
                    <a href="single.html" class="btn read-more">Ler Mais...</a>
                </div>  
            </div>

            <div class="post">
                <img src="images/numbeone.png" alt=""  class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Primeio post</a></h2>
                    <i class="calendar"> Mar, 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium repellendus nesciunt aliquam saepe sint voluptatibus excepturi nobis rerum aliquid vel repellat reiciendis, voluptate obcaecati et ipsum at provident neque.
                        ique velit in voluptates. Perspiciatis vero nostrum aperiam esse temporibus.

                        ostrum aperiam esse temporibus.
                    </p>    
                    <a href="single.html" class="btn read-more">Ler Mais...</a>
                </div>  
            </div>

            <div class="post">
                <img src="images/numbeone.png" alt=""  class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Primeio post</a></h2>
                    <i class="calendar"> Mar, 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium repellendus nesciunt aliquam saepe sint voluptatibus excepturi nobis rerum aliquid vel repellat reiciendis, voluptate obcaecati et ipsum at provident neque.
                        ique velit in voluptates. Perspiciatis vero nostrum aperiam esse temporibus.

                        ostrum aperiam esse temporibus.
                    </p>    
                    <a href="single.html" class="btn read-more">Ler Mais...</a>
                </div>  
            </div>

            <div class="post">
                <img src="images/numbeone.png" alt=""  class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">Primeio post</a></h2>
                    <i class="calendar"> Mar, 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad laudantium repellendus nesciunt aliquam saepe sint voluptatibus excepturi nobis rerum aliquid vel repellat reiciendis, voluptate obcaecati et ipsum at provident neque.
                        ique velit in voluptates. Perspiciatis vero nostrum aperiam esse temporibus.

                        ostrum aperiam esse temporibus.
                    </p>    
                    <a href="single.html" class="btn read-more">Ler Mais...</a>
                </div>  
            </div>
            
        </div>

        

            <!--SEARCH BAR  -->

            <div class="section search">
                <h2 class="section-title">Pesquisar posts</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Pesquisar...">
                </form>
            </div>
            
            <!-- ANUNCIO  -->

            <div class="section publicity"> 

                <img src="images/anuncie.jpg" alt="Publicidade"  class="publicity-image">
            </div>
        


         </div>
</body>
</html>

