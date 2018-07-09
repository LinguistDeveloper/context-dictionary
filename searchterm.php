<?php
// if(preg_match("/[A-Z  | a-z]+/", $_POST['name'])){
$myfile = fopen("L2_syntax1.txt", "r") or die("Unable to open file!");
$myfile2 = fopen("strip_return2.txt", "r") or die("Unable to open file!");
$name= fread($myfile, "1000");
$name2= fread($myfile2, "1000");
echo $name;
  //$name=$_POST['name'];
  //connect  to the database
  $db=mysqli_connect  ("localhost","root","") or die ('I cannot connect to the database  because: ' . mysql_error());
  //-select  the database to use
  $mydb=mysqli_select_db($db,"duplicates");
  //-query  the database table

/* Create intial table to hold TMX segments */
 if($mydb = "CREATE TABLE IF NOT EXISTS TMX_matches
 (
 PK mediumint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
 
 NUM mediumint(5),

 TUV_POS TEXT,

 TUV_nodes TEXT,
 
 
 
 PRIMARY KEY (PK)
 );")
 {
   echo "Table for receiving TMX segments created<p/>";
   }
   else
   {
   echo "Error creating intial table to receive TMX segments: " . mysqli_error();
   };
 mysqli_query($db,$mydb);

 mysqli_select_db( $db, "duplicates");
/* Create intial table to hold TMX segments */
 if($sql = "ALTER TABLE TMX_L2_tagged AUTO_INCREMENT = 2;")
 {
   echo "Table for receiving TMX segments altered<p/>";
   }
   else
   {
   echo "Error altering intial table to receive TMX segments: " . mysqli_error();
   };



 /* if($mydb = "INSERT INTO TMX_matches (NUM, TUV_POS, TUV_nodes) SELECT TMX_full.PK, TMX_l2_pos.TUV_nodes, TMX_full.TUV_nodes FROM  TMX_full INNER JOIN TMX_l2_pos ON TMX_full.PK = TMX_l2_pos.PK WHERE  TMX_l2_pos.TUV_nodes LIKE '%" . $name . "%';")*/
 if($mydb = "INSERT INTO TMX_matches (NUM, TUV_POS, TUV_nodes) SELECT TMX_full.PK, TMX_l2_pos.TUV_nodes, TMX_full.TUV_nodes FROM  TMX_full INNER JOIN TMX_l2_pos INNER JOIN  TMX_l2_tagged ON TMX_full.PK = TMX_l2_pos.PK WHERE  TMX_l2_pos.TUV_nodes LIKE '%" . $name . "%' AND TMX_l2_tagged.TUV_nodes LIKE '%" . $name2 . "%';")
 {
   echo "Table for receiving TMX segments altered<p/>";
   }
   else
   {
   echo "Error altering intial table to receive TMX segments: " . mysqli_error();
   };
 mysqli_query($db,$mydb);

 // $sql="SELECT PK, NUM, TUV_nodes FROM tmx_l2_pos WHERE  TUV_nodes LIKE '%" . $name . "%'";
$sql="SELECT TMX_full.TUV_nodes, TMX_full.PK FROM  TMX_full INNER JOIN TMX_l2_pos ON TMX_full.PK = TMX_l2_pos.PK WHERE  TMX_l2_pos.TUV_nodes LIKE '%" . $name . "%'";
$sql2="SELECT TMX_l2_pos.TUV_nodes, TMX_full.PK FROM  TMX_full INNER JOIN TMX_l2_pos ON TMX_full.PK = TMX_l2_pos.PK WHERE  TMX_l2_pos.TUV_nodes LIKE '%" . $name . "%'";
 //-run  the query against the mysql query function
  $result=mysqli_query($db,$sql);
  $result2=mysqli_query($db,$sql2);
  //-create  while loop and loop through result set
//  while($row=mysqli_fetch_array($result) && $row2=mysqli_fetch_array($result2)){
   while($row=mysqli_fetch_array($result)){
          $FirstName  =$row['TUV_nodes'];
  //        $FirstName2  =$row2['TUV_nodes'];
  //        $ID=$row['PK'];
          while($row2=mysqli_fetch_array($result2)){
            $FirstName2  =$row2['TUV_nodes'];

          }
  //        $L1=$row['NUM'];
          $ID=$row['PK'];
  //-display the result of the array
  echo "<ul>\n";
//  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$FirstName . " "   .$L1 . "</a></li>\n";
  echo "<li>"  .$ID . " "  .$FirstName2 . " "  .$FirstName . "</li>\n";

  echo "</ul>";
//  }
  }
//  else{
//  echo  "<p>Please enter a search query</p>";
//  }
  
  
?>
