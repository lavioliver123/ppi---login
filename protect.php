<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION["id"])){
    die ("você infelizmente morreu, não esta logado no céu");
}

?>