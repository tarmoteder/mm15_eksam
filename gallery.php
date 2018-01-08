<html>

<body>

<?php
/**
 * Created by PhpStorm.
 * User: Tarmo.Teder
 * Date: 20.12.2017
 * Time: 11:06
 */
    
// Lihtsa galerii loomine

$img_path ="./2018/01/08";
$dir = scandir($img_path);
unset($dir[0]);
unset($dir[1]);    
foreach ($dir as $dir_item){
    echo '<img src="'.$img_path."/".$dir_item.'" alt="" height = "100" width = "200">';
}



?>







</body>



</html>
