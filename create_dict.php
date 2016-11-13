<?php
 
set_time_limit(0);
error_reporting(E_ALL);
ob_implicit_flush(TRUE);
//ob_end_flush();

ini_set('max_execution_time', 800000); //1000 seconds = 50 minutes

ini_set('memory_limit', '100000M');

/* Source file */


$xml_file = utf8_encode('uploads/upload.xml');

$xsl_file = 'dictionary_db.xsl';


/* Initialize the DOM XML parser */
$doc = new DOMDocument();
/* Load the PHP XSL extension */
$xsl = new XSLTProcessor();
/* Load the xsl file*/
$doc->load($xsl_file);
/* Transform the xml */
$xsl->importStyleSheet($doc);
/* Output the transformed xml */
$doc->load($xml_file);
/* Needs to be assigned to variable ($newxml) in order to  write to file*/
$newxml=$xsl->transformToXML($doc); 

/* Create new file to receive optimised source file data*/
$file = fopen("delim1.xml","w");
if (fwrite($file,$newxml)){
echo "File for receiving dict content optimized for MySQL created<p/>";
}
else {
 echo "File for receiving dict content optimised for MySQL could not be created\n";
}
/* Close optimised source file to enable access by other functions */
 fclose($file);
 
/* Connect to Wampserver Localhost */

$con = mysql_connect("localhost","root","viernes");
 if (!$con)
   {
   die('Could not connect: ' . mysql_error());
   }
 
 /*Create database */

 if (mysql_query("CREATE DATABASE dictionary DEFAULT CHARACTER SET utf8 COLLATE utf8_bin",$con))

   {
   echo "Database 'dictionary' created";
   }
 else
   {
   echo "Error creating database: " . mysql_error();
   };
   
   
  
/* Select database */   
mysql_select_db("dictionary", $con);
/* Create intial table to hold TBX segments */
if($sql = "CREATE TABLE enes
	
 (
 PK mediumint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
 
lex varchar(100),

 
 def varchar(1000),
trans varchar(1000),

 
 
 PRIMARY KEY (PK)
 )  ROW_FORMAT=DYNAMIC;")
 {
   echo "Table for receiving EN>ES Spanish dictionary entries created<p/>";
   }
   else
   {
   echo "Error creating  table to receive EN>ES Spanish dictionary entries: " . mysql_error();
   };
 mysql_query($sql,$con);
 
 
 mysql_select_db("dictionary", $con);
/* Load TBX entries into table form optimised file */
 mysql_query("LOAD DATA LOCAL INFILE 'C://wamp/www/enes_dict/delim1.xml' INTO TABLE enes FIELDS TERMINATED BY '<div/>' LINES STARTING BY '<pair>'  TERMINATED BY '</pair>' (lex, def,trans);
") or die("MySQL - Query Error - " . MySQL_Error());  
 mysql_query($sql,$con);


 

 mysql_close($con);
// include('rem_dupl_sim_atts_pt2.php');

?>
