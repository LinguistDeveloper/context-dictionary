<?php


$myfile = fopen("lemma_syntax.txt", "r") or die("Unable to open file!");
$name= fread($myfile, "1000");
//echo $name;
 
  //connect  to the database
  $db=mysql_connect  ("localhost","root","viernes") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysql_select_db("dictionary");
 
      $sql="SELECT enes.def, enes.trans FROM enes WHERE enes.lex  LIKE '%" . $name . "%'";
 
  $result=mysql_query($sql);
  
  while($row=mysql_fetch_array($result)){
	 
	  $def  =$row['def'];
	  $trans  =$row['trans'];
         
  //-display the result of the array
/*  echo "<ul>\n";
  echo "<li>" . ""   .$def . " <p/>".$trans . "   </li>\n";
  echo "</ul>";*/
echo "  <?xml version=\"1.0\" encoding=\"UTF-8\"?>
<html>
<head>

<link rel=\"stylesheet\" type=\"text/css\" href=\"dict.css\">
 
</head>
<body>
".$def. "<p/>

<div style=\"color:#0000FF\">".$trans. "</div>

</body>
</html>";


//  }
  }

  
?>
