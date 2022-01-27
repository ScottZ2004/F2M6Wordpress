<style>

    *{
        font-family: Helvetica;
    }

    p{
       text-align: center;
    }

</style>

<img style=";width: 67px;height: 93px;z-index: 2; display: block;margin-left: auto;margin-right: auto;" src="http://stedelijkmuseum.local/wp-content/uploads/2022/01/stedelijk-bter.png">


<hr style="border: solid; color: black;">

<div>
    <h1 style="text-align: center">We voelen ons vereerd</h1>
    <h2 style="text-align: center">Dat je binnenkort bij ons langskomt in het Stedelijk Museum</h2>
    <p style="text-align: center">Bedankt dat je voor ons hebt gekozen <?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?>,</p>
    <p style="text-align: center">wij gaan voor jullie zorgen dat alles tip top in orde is voor jullie</p>
    <p style="text-align: center">bezoek aan het Stedelijk Museum.</p>
    <p style="text-align: center">Je krijgt binnenkort van ons een berichtje met meer informatie over</p>
    <p style="text-align: center">de route, parkeren en andere belangerijke zaken.</p>
</div>

<img style="display: block;margin-left: auto;margin-right: auto;" src="http://stedelijkmuseum.local/wp-content/uploads/2022/01/stedelijk-museum.jpg" alt="Voorbeeld">

<br>

<button  style="display: block;margin-left: auto;margin-right: auto; background-color: #22ff06; width: 256px; height: 50px; border: none; border-radius: 2px; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);"><a href="https://www.stedelijk.nl/en" style="text-decoration: none">Bekijk alvast de collectie</a></button>

<br>

<hr style="border: solid; color: black;">

<h2 style="text-align: center">Jouw gegevens</h2>

<div style="align-items: center;position: relative;">
    <p><b>Naam: </b><?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
    <p><b>Email-adres: </b><?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_email() ) ); ?></p>
    <p><b>Telefoonnummer: </b><?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_phone() ) ); ?></p>
    <br>
    <p><b>Bedrijf: </b><?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_company() ) ); ?></p>
    <p><b>Adres: </b><?php printf( esc_html__('%s','woocommerce' ), esc_html( $order->get_billing_address_1() ) ); ?></p>
    <br>
    <?php do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );?>
</div>
<hr style="border: solid; color: black;">

<div style="display: flex; justify-content: space-evenly">
    <p><a href="https://www.facebook.com/Stedelijk/">Facebook</a></p>
    <p><a href="https://www.instagram.com/stedelijkmuseum/?hl=en">Instagram</a></p>
    <p><a href="https://twitter.com/stedelijk">Twitter</a></p>
    <p><a href="https://www.youtube.com/c/StedelijkMuseumAmsterdam">Youtube</a></p>
</div>
<br>
<img style=";width: 67px;height: 93px;z-index: 2; display: block;margin-left: auto;margin-right: auto;" src="http://stedelijkmuseum.local/wp-content/uploads/2022/01/stedelijk-bter.png">
<br>

<p style="text-align: center">Copyright © 2021 Stedelijk Museum Amsterdam. All rights reserved.</p>
<br>
<p style="text-align: center">Our mailing adress is:</p>
<p style="text-align: center"><a href="Info@stedelijkmuseum.nl">Info@stedelijkmuseum.nl</a></p>
