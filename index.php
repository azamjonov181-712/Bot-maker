<?php

$page = $_GET['page'] ?? '';

if ($page == "") {
    echo "<h1>BOT PANEL</h1>";

    echo "<a href='?page=maker'>Maker Bot</a><br>";
    echo "<a href='?page=namoz'>Namoz Vaqti</a><br>";
    echo "<a href='?page=nakrutka'>Nakrutka Bot</a><br>";
    echo "<a href='?page=getid'>Get ID Bot</a><br>";

    exit;
}

if ($page == "maker") {
    include "MakerBot.php";
}

if ($page == "namoz") {
    include "NamozVAQT.php";
}

if ($page == "nakrutka") {
    include "AvtoNakrutka.php";
}

if ($page == "getid") {
    include "GetID.php";
}

else {
    echo "Bot topilmadi";
}
?>
