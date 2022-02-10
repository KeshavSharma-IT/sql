<html>
<body>
<form method="post" action="">
    <p>Roll no:-</p>
<input type="text" name="roll_no">
    <p>name:-</p>
<input type="text" name="name">
 <p>Math:-</p>
<input type="text" name="math">
   <p>English:-</p>
<input type="text" name="english">
    <p>Science:-</p>
<input type="text" name="science">
    <p>Social Science:-</p>
<input type="text" name="social_science">
    <p>Moral Science:-</p>
<input type="text" name="moral_science"><br><br>
<input type="submit" name="submit" value="register">
<input type="submit" name="delete" value="delete">
<input type="submit" name="update" value="update">
    
</form>
    
    <hr>
    <table border="2" width="500px">
    <tr>
        <th>Roll_no</th>
        <th>name</th>
        <th>math</th>
        <th>english</th>
        <th>science</th>
        <th>social_science</th>
        <th>moral_science</th>
        <th>Total</th>
        <th>Average</th>
        </tr>
<?php
include_once 'dbmarks.php';
$r= mysqli_query($mark,"select * from class");
while($row=mysqli_fetch_array($r) )
{
    ?>
        <tr>
        <th><?php echo $row['Roll_no']; ?></th>
        <th><?php echo $row['name']; ?></th>
        <th><?php echo $row['math']; ?></th>    
        <th><?php echo $row['english']; ?></th>
        <th><?php echo $row['science']; ?></th>
        <th><?php echo $row['social_science']; ?></th>
        <th><?php echo $row['moral_science']; ?></th>
        <th><?php echo $row['Total']; ?></th>
        <th><?php echo $row['Average']; ?></th>
        </tr>
<?php
}
?>       
</table>
</body>
</html>
<?php
  include_once 'dbmarks.php';
if(isset($_POST['delete']))
{  
$Roll_no=$_POST['roll_no'];
$q= mysqli_query($mark,"delete from class where Roll_no=$Roll_no");
         if($q)
        
             echo"success";
        
    else
        echo "try";
}


//  include_once 'dbmarks.php';
if(isset($_POST['update']))
{  
$Roll_no=$_POST['roll_no'];
$name= $_POST['name']; 
    
$s= mysqli_query($mark,"update class set name='$name' where Roll_no=$Roll_no");
         if($s)
        
             echo"success";
        
    else
        echo "try";
}

if(isset($_POST['submit']))
 {  
$Roll_no =$_POST['roll_no'];
$name= $_POST['name']; 
$math = $_POST['math'];
$english = $_POST['english'];
$science = $_POST['science'];
$social_science = $_POST['social_science'];
$moral_science = $_POST['moral_science'];
    
$total = $math+$english+$science+$social_science+$moral_science;
    
$Average =$total/5;  
$p=mysqli_query($mark,"INSERT INTO class VALUES ('$Roll_no','$name','$math','$english','$science','$social_science','$moral_science','$total','$Average')");
if($p)
{
echo"sucess";
exit;
}
else
{
echo"try again";
exit;
}
}
?>