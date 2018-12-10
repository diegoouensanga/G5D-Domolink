<?php
function seeHome(){
    require 'views/main_help.php';
}
function prise_de_rdv(){
    require "views/prise_de_rdv.php";
}
function formulaire_panne(){
    require "views/formulaire_panne.php";
}
function questions_frequentes(){
    require "views/faq.php";
}
function contact(){
    require "views/contact.php";
}

function confirmation_rdv(){
    require "views/confirmation_rdv.php";
}

function confirmation_panne(){
    require "views/confirmation_panne.php";
}
?>