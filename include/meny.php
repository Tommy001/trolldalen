<?php
if(!isset($_SESSION)){
    session_start();
}
include "meny_config.php";

// h�mtar filnamn till aktuell sida
//$current_file= basename($_SERVER[PHP_SELF]);

echo'
<div id="meny_container">';

##############################################################
// MENY 1
##############################################################
echo'
<ul id="meny">
<li><a href="'.$meny1_url.'?select=meny1"';
if ($_GET['select'] == 'meny1') {echo 'id="selected1"';} echo ' class="link0">'.$meny1_namn.'</a></li>';

##############################################################
// MENY 2
##############################################################
if ($_SESSION["user"]==('trolldalens' || 'styrelsen'))
{
echo '
<li><a href="'.$meny2_url.'?select=meny2"';
if ($_GET['select'] == 'meny2') {echo 'id="selected1"';} echo ' class="link0">'.$meny2_namn.'</a></li>';
}
##############################################################
// MENY 3
##############################################################
echo '
<li><a href="'.$meny3_url.'?select=meny3"';
if ($_GET['select'] == 'meny3') {echo 'id="selected1"';} echo ' class="link0">'.$meny3_namn.'</a></li>';


//##############################################################
//// MENY 4
//##############################################################
echo '
<li><a href="'.$meny4_url.'?select=meny4"';
if ($_GET['select'] == 'meny4') {echo 'id="selected1"';} echo ' class="link0">'.$meny4_namn.'</a></li>';


//##############################################################
//// MENY 5
//##############################################################
if ($_SESSION["user"]==('trolldalens' || 'styrelsen'))
{
echo '
<li><a href="'.$meny5_url.'?select=meny5"';
if ($_GET['select'] == 'meny5') {echo 'id="selected1"';} echo ' class="link0">'.$meny5_namn.'</a></li>';
}



//##############################################################
//// MENY 6
//##############################################################
if ($_SESSION["user"]=='styrelsen')
{
echo '
<li><a href="'.$meny6_url.'?select=meny6"';
if ($_GET['select'] == 'meny6') {echo 'id="selected1"';} echo ' class="link0">'.$meny6_namn.'</a></li>';
}

//##############################################################
//// MENY 7
//##############################################################
if ($_SESSION["user"]==('trolldalens' || 'styrelsen'))
{
echo '
<li><a href="'.$meny7_url.'?select=meny7"';
if ($_GET['select'] == 'meny7') {echo 'id="selected1"';} echo ' class="link0">'.$meny7_namn.'</a></li>';
}
##############################################################
//##############################################################
//// MENY 8
//##############################################################
if ($_SESSION["user"]==('trolldalens' || 'styrelsen'))
{
echo '
<li><a href="'.$meny8_url.'?select=meny8"';
if ($_GET['select'] == 'meny8') {echo 'id="selected1"';} echo ' class="link0">'.$meny8_namn.'</a></li>';
}
##############################################################
if ($_SESSION["user"]==('trolldalens' || 'styrelsen'))
{
echo '</ul>
<p><a href="/inloggning/logout.php">Logga ut...</a></p>
</div>
';
}
else {
echo '</ul>
<p><a href="/inloggning/login.php">Logga in f�r att se fler menyval...</a></p>
</div>
';
}
?>
