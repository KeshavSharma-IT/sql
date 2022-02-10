
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

	
</head>
<body>

	<form class="container my-5 p-5 border border-dark rounded w-25" method="post">
			
			<div class="form-group">
				<label class="form-group">username</label>
				<input type="text" name="username" placeholder="username" class="form-control" id="username">
				
			</div>
			<div class="form-group">
				<label class="form-group">Password</label>
				<input type="password" name="pass" placeholder="Password" class="form-control" id="password">
				
			</div>
			<div class="form-group">
				<input type="button" name="login" value="LOGIN" class="btn btn-primary " onclick="abc()">
			
				<a href="register.php"><input type="button" value=" go to Register" class="btn btn-success "></a>
			</div>
			
		
		

<script type="text/javascript">
	function abc(){
		var a,b;

		a=$('#username').val();
		b=$('#password').val();
		

		$.ajax({
			type:'post',
			url:"admindis.php",
			data:"name="+a+"&email="+b,

			success:function(success) {
				
				if (success==1) {
					
					$("#myModal").modal("show");
					$("#my_title").html("success");
					$("#modal_display").show();
					$("#modal_display1").hide();
					$("#my_msg").html("top");
				}
				else{
					
					$("#myModal").modal("show");
					$("#my_title").html("failde");
					$("#modal_display1").show();
					$("#modal_display").hide();
					$("#my_msg").html("maja nahi aaya yrr");
				}
			}
				
			});
	}
</script>




<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content" style="width:120%;">
        <div class="modal-header">
        	<h4 class="modal-title" id="my_title">Success</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
       <div class="modal-body" id="modal_display1">
       	<p id="my_msg"></p>
       </div>
        <div class="modal-body" id="modal_display">
          <table border="2">
          	<tr><th>Name</th>
          		<th>Email</th>
          		<th>Course</th>
          		<th>Address</th>
          		<th>Delete</th>
          		<th>Edit</th>
          	</tr>
          	<tr>
          		<?php 
          		include_once 'connection.php';
          		$k=mysqli_query($con,"select * from reg");
          		while($row=mysqli_fetch_array($k)){
          			?>
          			<tr><td><?php echo $row['Name'];?></td>
          				<td><?php echo $row['Email'];?></td>
          				<td><?php echo $row['Course'];?></td>
          				<td><?php echo $row['Address'];?></td>
          				<td>

          					<button type="submit" name="del" value="<?php echo $row[ID];?>"><i class="fa fa-trash" ></i></button>

          				</td>
          				<td>
          					
          					<button type="button" id="<?php echo $row[ID];?>" class="mydata"><i class="fa fa-edit" ></i></button>

          				</td>
          			</tr>
          			<?php
          		}
          		?>
          	
          	
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</form>

<?php
include_once 'connection.php';
if (isset($_POST['del']))
{
$g=$_POST['del'];

$h=mysqli_query($con,"delete from reg where ID='$g'");
}
?>
	



</body>
</html>