<?php

(@__DIR__ == '__DIR__') && define('__DIR__', realpath(dirname(__FILE__)));

$header("Pragma: public");
$header("Expires: 0");
$header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
$header("Cache-Control: private", false);

$pages = array();
$pages["404.php"] = "404";
$pages["index.php"] = "Home";
$pages["booking.php"] = "Booking";
$pages["contact.php"] = "Contact";
$pages["event.php"] = "Event";
$pages["location.php"] = "Location";
$pages["prensa.php"] = "Press Room";
$pages["register.php"] = "Register";
$pages["reservation.php"] = "Reserva";
$pages["gracias.php"] = "Thank you";


$sliderPageURL = "inc/pasador.php";
$sliderBottomURL ="inc/sliderNart.php";


$tpTitle = " NASTY MONDAYS OFFICIAL";
$tpTitulo = " NASTY MONDAYS OFICIAL";
$tpsubHeading ="Official Web-Site";
$tpriaSection ="BACKSTAGE NASTY MONDAYS ";
$tpCity ="BARCELONA";
$tpPhone ="(+34) 93 XXX XX XX ";

$pgHeading = "Nasty Mondays";
$pgCityB = "Barcelona";
$pgCityN = "New York";
$socialFB="Facebook";
$socialMSP= "My Space";

$pgDesc = "Nasty Mondays was invented 5 years ago in Barcelona, by our friends Max & Choren el Choro - local celebrities, mad minds, blonde lovers and tattoo addicts! With their fable to indie & electro rock, they started with a party series that didn’t exist like that  in the catalonian city before. Mondays at Apollo was a MUST. Constantly reinventing themselves, with new themes, bands playing live, different locations and becoming crazier each time, they have managed to establish their base within Barcelona, and have toured in Denmark, Sweden, Germany, Austria and Holland";
$pgKeywords = "nasty, mondays, trend, club, Barcelona, Monday, indie, rock, soren, madmax,sala,apolo";

$pgSlogan = "ENTRA EN" .B$tpriaSection . "WEB. ES GRATIS Y TENDRAS ACCESO CREW MEMBER.";
$pgBooking = "Booking &amp; Contratacion" . " " . $pgHeading ;

$linkHome = "index.php";
$linkBooking = "booking.php";
$linkEvent = "event.php";
$linkLocation = "location.php";
$linkRegister = "register.php";
$linkReserva = "reservation.php";
$linkContacto ="contact.php";
$linkPress ="prensa.php";


$buttonLabel ="Access";	
$spEvents ="EVENTOS";
$spLocate ="LOCALIZACION";
$spBackstage ="ENTRAR";
$noScriptMotto="It appears that JavaScript is disabled in your browser, or your browser doesn't support it.";
$noscriptMotto2 ="WEB-SITE, log in your account et cetera, you'll need to activate JavaScript.";
$voulgarDefinition ="was invented 5 years ago in Barcelona, by our friends Max and Soren- local celebrities, mad minds, blonde lovers and tattoo addicts! With their fable to indie and electro rock, they started with a party series that did not exist like that in the catalonian city before.Constantly reinventing themselves, with new themes, bands playing live, different locations and becoming crazier each time, they have managed to establish their base within Barcelona, and have toured in Denmark, Sweden, Germany, Austria, Holland or the United States.";


?>

