<?php


// Sisenedi kirjutamine faili
function sisestus($input, $file_post = 'data'){
    $file_name = $_SERVER['DOCUMENT_ROOT'].'/ms16/data/'.$file_post.'.txt';
    $file = fopen($file_name, "a") or die ("Ei saanud avada");
    $tekst = $input."," ;
    fwrite($file, $tekst);
    fclose($file);}

function file_read(){
    $file_name = $_SERVER['DOCUMENT_ROOT'].'/ms16/data/data.txt';
    $file = fopen($file_name, "r") or die ("Ei saanud avada");
    $content = fread($file, filesize($file_name));
    $menu_arr = explode(",",$content);
    $clean_arr = array_pop($menu_arr);
    fclose($file);
//    var_dump($menu_arr);
    foreach ($menu_arr as $value){
        echo '<li><a href="'.$value.'.php">'.$value.'</a></li>';
    }
}

function upload(){
    if (isset($_FILES['upload'])){
//        print_r($_FILES['upload']); }
        // var_dump($_FILES);



            if(!empty($_POST['sisesta'])) {
                $type_ctl = mime_content_type($_FILES['upload']['tmp_name']);

                $img_dir ="./".date("Y")."/".date("m")."/".date("d")."/";
                if(!(file_exists($img_dir))) {
                    mkdir($img_dir,7044,True);
                }

                // echo $type_ctl;
                // var_dump($_FILES);
                if ( $type_ctl == "image/jpeg" || $type_ctl == "image/png" || $type_ctl == "image/gif"){
                    $rename_name = explode(".",$_FILES['upload']['name']);
                    $extension = array_pop($rename_name);
                    $new_name = time().rand(1000,9999).".".$extension;
                    if(move_uploaded_file($_FILES['upload']['tmp_name'],$img_dir.$new_name)){
                        echo "faili laadimine õnestus!<br>";
                        echo date("d F Y H:i:s",filectime($img_dir.$new_name));
                        $exif_data = exif_read_data($img_dir.$new_name);
                        foreach ( $exif_data as $key => $item ) {
                            echo "<br>".$key." väärtus on ".$item;
                        }
                } else { echo "Kõik on halvasti! ".$_FILES['upload']['error'];}}
                else {echo "Ei ole pildifail!";}
            }

    }}


?>