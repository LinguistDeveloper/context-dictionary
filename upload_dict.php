<?php


 $upload = explode(".", $_FILES["file"]["name"]);
$ext = end($upload);
//echo "Type: " . $_FILES["file"]["type"] . "<br>";

if ((($_FILES["file"]["type"] == "text/xml")
 
 )

 && ($_FILES["file"]["size"] < 100000))

 {
   if ($_FILES["file"]["error"] > 0) {
     echo "Error: " . $_FILES["file"]["error"] . "<br>";
   } else {
     echo "Upload: " . $_FILES["file"]["name"] . "<br>";
     echo "Type: " . $_FILES["file"]["type"] . "<br>";
     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
     echo "Stored in: " . $_FILES["file"]["tmp_name"];
	if($_FILES['file']['name'] = 'upload.xml') {
		
	//			echo '<p>The file has been renamed!</p>';
			
			
			} else { // Couldn't rename the file.
				}
	
	
	; 
	
	
	if(move_uploaded_file($_FILES['file']['tmp_name'], "uploads/{$_FILES['file']['name']}")) {
		
				echo '<p>The file has been uploaded!</p>';

				//include('rem_dupl_sim_atts_pt1.php');
				include('create_dict.php');
				//include('relations.php');
				//include('fields.php');
				
			
			
			} else { // Couldn't move the file over.
				}
   }
 } else {
   echo "Invalid file";
 }
 
//echo file_get_contents($_FILES['uploadedfile']['tmp_name']); 

ini_set('max_execution_time', 0); //no time limit



?>
