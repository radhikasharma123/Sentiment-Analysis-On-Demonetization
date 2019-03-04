<html>
<?php
$connect=mysqli_connect('localhost','root','','test');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
else
{
   echo '';
}

 
// create a variable
$my_name=$_POST['name'];
$my_age=$_POST['age1'];
$my_occ=$_POST['occu'];
$my_state=$_POST['state'];
$my_opinion=$_POST['opinion'];

 
//Execute the query
 $sql = "INSERT INTO fem (name, age1, occu, state, opinion) VALUES ('$my_name', '$my_age', '$my_occ', '$my_state', '$my_opinion')";
if(mysqli_query($connect, $sql)){
    echo "<br>Thank you for sharing your opinion.<br>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
  $name=isset($_POST["name"])?$_POST["name"]:"";
  $age1=isset($_POST["age1"])?$_POST["age1"]:"";
  $occu=isset($_POST["occu"])?$_POST["occu"]:"";
  $state=isset($_POST["state"])?$_POST["state"]:"";
  $opinion=isset($_POST["opinion"])?$_POST["opinion"]:"";
 
  
   mysqli_close($connect); 
  
 
    
?>

<body>

<br>
<input type="Submit" name="s1" value="Click here to go back to the Home Page!!" style="width:300px;height:50px;background-color:Teal;font-weight:bold;font-color:white"; onClick="location.href='main.html'"><br><br><br>
<input type="Submit" name="s1" value="Click here to go back to the Feedback Page!!" style="width:300px;height:50px;background-color:Teal;font-weight:bold;font-color:white"; onClick="location.href='opinion.html'"><br>

</body>
</html>
