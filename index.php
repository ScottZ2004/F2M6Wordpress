        
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php get_footer()?>

<h2><?php the_title() ?></h2>
            <?php the_content()?>

            <div class="welkom">

            </div>

            <!-- call to action -->
            <div class="cta">
                <h2>call to action</h2>
            </div> 

            <div class="inhoud-b2b">
                <h2>over het uitje</h2>
            </div>

            <div class="slider">
                <h2>foto slider</h2>
            </div>

            <div class="stappenplan">
                <h2>stappenplan</h2>
            </div>

            <hr>

            <a href="<?php the_permalink();?>">Lees meer!</a>
    
</body>
</html>