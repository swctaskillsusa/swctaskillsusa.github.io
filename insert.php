<html>

<body>

 

 

<?php

$con = mysql_connect("localhost","skills","");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }

 

mysql_select_db("skills", $con);

 

$sql="INSERT INTO Students (studentName, id, grade, shirtSize, programArea, sex, jacket, skillsComp, leadComp)

VALUES

('$_POST[studentName]','$_POST[id]','$_POST[grade]','$_POST[shirtSize]','$_POST[programArea]','$_POST[sex]','$_POST[jacket]','$_POST[skillsComp]','$_POST[leadComp]')";

 

if (!mysql_query($sql,$con))

  {

  die('Error: ' . mysql_error());

  }

echo "Thank You!";

 

mysql_close($con)

?>

</body>

</html>