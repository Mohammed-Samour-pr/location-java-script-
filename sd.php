

<?php

$asd = $_POST['asd'];
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $asd);
fwrite($myfile, $asd);
fclose($myfile);
header("location:index.html");


