<?php 

    include "views/components/Fronter.php";

    include "views/components/header.php";
    include "views/components/footer.php";
    include "views/components/list_users.php";

    $link_google = new Fronter("a", " google ", ["href" => "https://google.com"]);
    $link_etavtomatika = new Fronter("a", " avtomatika ", ["href" => "http://etavtomatika.ru"]);
    $div_link = new Fronter( "div", $link_google->get_elem(), ["style" => "color:white;"]);
    $div_link->add_innerHTML( $link_etavtomatika->get_elem());
    $div_link->render();

    $footer->render();
?>
