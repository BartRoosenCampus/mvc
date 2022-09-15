<?php
// home.php
declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">

<!--
Omdat de head van elke pagina hetzelfde is gaan we die importeren ipv telkens opnieuw te schrijven.
Stel je wil een css file of javascript file linken aan dit project, dan kan dat nu in head.php en hoef
je dit maar 1 maal te doen
-->
<?php include_once 'components/head.php'; ?>
<body>

<!--
De titel van deze pagina halen we uit de servicelaag de homeController spreekt deze laag aan om zo de titel te
bekomen
-->
<h1><?= $title; ?></h1>
<hr/>

<!--
In plaats van in elke opnieuw alle links te gaan herhalen importeren we deze. Wanneer ik nu een link wil toevoegen of
wegnemen moet dit maar op 1 plaats gebeuren en het is meteen goed voor elke pagina.
Merk op, het pad om een view te importeren moet niet vanuit de root folder vertrekken maar is relatief aan de folder
waarin de view zit.
-->
<?php include_once 'components/navigation.php'; ?>

<!--
ook al zit deze file (home.php) in de App/views folder toch gaat de src er van uit dat we in de root folder zitten
omdat we deze file importeren in de controller die zich in de root folder bevindt
-->
<img src="img/mvc.png" alt="MVC schema" />

</body>
</html>
