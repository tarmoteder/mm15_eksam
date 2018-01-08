<html>
<head>
    <title>Projektileht</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>
    
<!-- <form method="post" action="php.php" > 
Submit nupu vajutamisel läheme faili php.php
-->
    
<form method="post" action="" >    
<label>Sisesta menüü punkt</label>
<input type="text" name="menyy" />
 <!--
    <label>Sisesta kuupäev</label>
<input type="date" name="kpäev" /> -->
<input type="submit" value="Sisesta"    />
</form>

<form method="post" action="">
    <label>Registreeri kasutaja</label>
    <input type="text" name="user" />
    <label>Registreerimisfail</label>
    <input type="text" name="passfile" value="parool"/>
    <label>Sisesta parool</label>
    <input type="password" name="pass" />
    <input type="submit" value="Sisesta"    />

</form>

<form method="post" action="">
    <label>Parooli kontroll</label>
    <input type="password" name="pass_check" />
    <input type="submit" value="Sisesta"    />
</form>

<form action="" method="POST" enctype="multipart/form-data">
    <label>Faili üleslaadimine</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="30000000"/>
    <input type="file" name="upload" value="" />
    <input type="submit" name="sisesta" value="Sisesta"/>


</form>
<?php


// require  'file.php';
require 'input.php';

// echo mime_content_type("./img/15131625155841.jpg");

file_read();
pass_check();
upload();

?>
    
</body>
    
    
</html>
