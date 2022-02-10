<!DOCTYPE html>
<html>
<head>
	<title>new</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	

</head>
<body>
	<div class="container my-5 p-5 w-25 bg-light">
		<form  method="post">
			
			<div class="form-group ">
				<label>Name</label>
				
				<input type="text" name="name" placeholder="name" class="form-control " id="name"  >
			</div>
			<div class="form-group">
				<label>Email</label>
				
				<input type="text" name="email" placeholder="email" class="form-control " id="email"  >
			</div>
			
				<div class="form-group">
				<label>Course</label>
				<select class="form-control" name="course" id="course">
					<option>Course</option>
					<option>BCA</option>
					<option>BBA</option>
					<option>BSC</option>
					<option>MA</option>
					<option>BA</option>

				</select>
				</div>
			
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" placeholder="address" class="form-control" id="address">
				
			</div>
			<div class="form-group">
				<input type="button" name="register" id="register" value="Register" class="btn btn-success " onclick="abc()">
		
				<a href="1.php"  target="_blank" input type="submit" name="login" class="btn btn-success  " value="LOGIN" >Data</a>
			</div>
			</form>
		</div>
		

<script type="text/javascript">
	function abc()
	{
		var a,b,c,d;

		a=$('#name').val();
		b=$('#email').val();
		c=$('#course').val();
		d=$('#address').val();

		$.ajax({
			type:'post',
			url:"reg.php",
			data:"name="+a+"&email="+b+"&course="+c+"&address="+d,

			success:function(success) {
				
				if (success==1) {
					$("#myModal").modal("show");
					$("#my_title").html("success");
					$("#my_msg").html("top");
				}
				else{
					
					$("#myModal").modal("show");
					$("#my_title").html("failde");
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
      <div class="modal-content">
        <div class="modal-header">
        	<h4 class="modal-title" id="my_title">Success</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p id="my_msg">Data insert successfully</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>