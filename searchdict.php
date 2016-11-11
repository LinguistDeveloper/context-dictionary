<?php


$myfile = fopen("lemma_syntax.txt", "r") or die("Unable to open file!");
$name= fread($myfile, "1000");
echo $name;
 
  //connect  to the database
  $db=mysql_connect  ("localhost","root","viernes") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("dictionary");
 
      $sql="SELECT engmono.entry FROM engmono WHERE engmono.lex  LIKE '%" . $name . "%'";
 
  $result=mysql_query($sql);
  
  while($row=mysql_fetch_array($result)){
	 
	  $entry  =$row['entry'];
         
  //-display the result of the array
  echo "<ul>\n";
  echo "<li>" . ""   .$entry . "    </li>\n";
  echo "</ul>";
//  }
  }

  
?>
