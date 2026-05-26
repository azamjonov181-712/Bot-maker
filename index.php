<?php

$page = $_GET['page'] ?? '';

if ($page == "maker") {
    include "MakerBot.php";
}

if ($page == "namoz") {
    include "NamozVAQT.php";
}

if ($page == "nakrutka") {
    include "AvtoNakrutka.php";
}

if ($page == "convertor") {
    include "Convertor.php";
}

if ($page == "getid") {
    include "GetID.php";
}

if ($page == "gramapi") {
    include "GramAPIBot.php";
}

?>
