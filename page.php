<?php
get_header();
?>

<div class="texthead">
    <img src="<?php echo get_template_directory_uri()?>/css/hero.jpg" alt="hero">
    <div class="textheadcontent">
        <h2>Samen werken gecombineerd met een mooie kijk op kunst</h2>
        <hr>
        <h3>ontdek meer</h3>
        <div class="scroll-down"></div>
    </div>
</div>


<div class="arrow">


    <div>
        <h2>text</h2>
        <button class="btn" type="button">Click Me!</button>
    </div>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="img1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="img2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="img3.jpg" style="width:100%">
        </div>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>


</div>



















<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
    }
</script>

    <?php
    if( have_posts()):
        while(have_posts()): the_post();?>

            <h2><?php the_title() ?></h2>

            <?php the_content()?>
            <hr>


        <?php endwhile;

    else:
        echo '<p>There are no posts!</p>';

    endif;

    ?>
<?php get_footer()?>
