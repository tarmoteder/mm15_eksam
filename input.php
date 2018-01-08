<?php

require 'file.php';

if (isset($_POST['user']) && isset($_POST['passfile']) && isset($_POST['pass']) ) {

    $_POST['pass'] = md5($_POST['pass']);

    foreach ($_POST as $key => $value){
        echo "<br>". $key." on väärtusega ".$value."<br>" ;
        sisestus($value, $_POST['passfile']);

    }} else { echo "Täida kõik kolm lahtrit"; }

if (isset($_POST['menyy'])) {

//    var_dump($_POST);
    foreach ($_POST as $key => $value){
        echo "<br>". $key." on väärtusega ".$value."<br>" ;
        sisestus($value);
    }

}

function pass_check(){
    $file_name = $_SERVER['DOCUMENT_ROOT'].'/ms16/data/parool.txt';
    $file = fopen($file_name, "r") or die ("Ei saanud avada");
    $content = fread($file, filesize($file_name));
    $pass_arr = explode(",",$content);
    array_pop($pass_arr);

    if (isset($_POST['pass_check'])) {
        $check = $pass_arr[2];
        echo $check."<br>";
        if (md5($_POST['pass_check'])==$check){
            echo md5($_POST['pass_check'])."<br>";
           // echo "Sisestatud parool on õige!";
            header('admin.php');
        } else { echo "Sisestatud parool on vale";}
        }

    fclose($file);
}

function log_in(){

}
?>