<?php
$opcion = $_POST['opcion'];
$temperatura = $_POST['temperatura'];
if ($opcion == 'c'){
$res = ($temperatura * 9 / 5) + 32;
    echo $res.' ºC';
}
elseif ($opcion == 'f') {
$res = 5 / 9 * ($temperatura - 32);
    echo $res.' ºF';
}

?>