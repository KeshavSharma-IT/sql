	
<html>
<head>
	<title> friend request</title>
	<meta charset="utf-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
			
				
			</div>
			<div>
			<label id="error"></label>
		</div>	
		
		</form>





<script type="text/javascript">
	function abc(){
		var a,b;

		a=$('#username').val();
		b=$('#password').val();

		$.ajax({
			type:"post",
			url:"insert_data.php",
			data:"username="+a+"&password="+b,
			success:function(success){
				
				if (success==1) {
					//alert("successful");
					$("#myModal").modal("show");
					$("#my_title").html("Success");
					$("#my_msg").html("Data insert Successfully");
					
					//location.reload();
				}
				else{
						$("#myModal").modal("show");
					$("#my_title").html("Failed");
					$("#my_msg").html("Data is not insert");
				
				//	alert("try again");
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
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="my_title">Success</h4>
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