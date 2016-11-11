<?php

//set_time_limit(0);
//error_reporting(E_ALL);
//ob_implicit_flush(TRUE);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

$txt = $_POST['term'];
fwrite($myfile, $txt);

fclose($myfile);
echo exec('run_POS_tagger.bat');
echo exec('run_optimize_tagged_data.bat');

include("searchterm.php");
?>
