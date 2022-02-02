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


    <div class="arrow">


        <div class="ctatext">
            <h1>Een rondleiding en daarna zelf een kunstenaar worden.</h1>
            <h3><p>Opzoek naar een creatief uitje?
            Dan zit u hier juist. U zult eerst een rondleiding krijgen en vervolgens
            in groepjes op geheel eigen manier een kunstwerk na maken. Zodra dit is opgedroogd bij ons zullen wij het opsturen zodat jullie je eigen vereeuwigd kunstwerk hebben.</p></h3>
                <button class="button" type="button">Click Me!</button>
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="<?php echo get_template_directory_uri()?>/css/img1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="<?php echo get_template_directory_uri()?>/css/img2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="<?php echo get_template_directory_uri()?>/css/img3.jpg" style="width:100%">
            </div>

        </div>

        <div class="bulletpoint" style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>


    </div>

    <div class="uitleg-b2b">
        <h2>Wat houd het uitje in?</h2>
        <hr>
        <h3><p>
            U zult ontvangen worden in het stedelijk museum met een kop koffie of thee.
                <br>
            Vervolgens zal u en uw team uitleg krijgen over het verloop van de activiteiten.
                <br>
            Er zullen 2 hoofdactiviteiten zijn. De eerste activiteit is een rondleiding door een kunst specialist.
                <br>
            Hij of zij is erg kundig en zal jullie van alles vertellen over de kunst.
                <br>
            U krijgt leuke weetjes te weten en de mooie verhalen achter de schilderijen.
        </h3></p>


    </div>


    <div class ="fotokader">
        <img src="<?php echo get_template_directory_uri()?>/css/img1.jpg" alt="">
        <img src="<?php echo get_template_directory_uri()?>/css/img2.jpg" alt="">
        <img src="<?php echo get_template_directory_uri()?>/css/img3.jpg" alt="">
    </div>

    <div class="qoute">

        <h2 class="bonotext">
            "Bekijk, inspireer en creëer"
        </h2>

        <h3>
            Als 2e activiteit zult u onder begeleiding van een echte kunstenaar een
            van de geselecteerde schilderijen op geheel eigen wijze na gaan maken.
            Dit zult u doen in groepjes van 3-6 personen.
            Je gaat eerste bedenken welk schilderijen bij jullie past en  op wat
            voor een manier jullie je eigen draai gaan geven aan het kunstwerk.
            Dat kan zijn door het gebruik van hele andere materialen, kleuren, vormen etc.
            Je kunt het zo gek maken als je kunt bedenken.
            Dit zal afgesloten worden met een kleine uitleg over je kunstwerk voor de rest
            van uw collega's onder het genot van een biertje of wijntje
        </h3>
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


            <?php the_content()?>


        <?php endwhile;

    else:
        echo '<p>There are no posts!</p>';

    endif;

    ?>
<?php get_footer()?>
