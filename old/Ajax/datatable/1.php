<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title></title>
</head>
<body>
<div class="col-md-3">	
<form>
	<div class="form-group">
		<label for="a">Faculty ID:</label>
		<input type="text" id="k1" name="a" class="form-control">
	</div>


  &nbsp&nbsp&nbsp<input type="button" onclick="abc()" id="k" name="d" value="login">
</form>
</div>
<script>
	$(document).ready(function() {
    $('#mydata').DataTable();
} );
</script>

<script type="text/javascript">
display();
function display()
{
$.ajax({
						       type: "post",	
						       url:"3.php",
						       //data:"Id="+a+"&Password="+b,
						      datatype:'json',

						       success:function (success) {
						       		var html="";
						       		var jsondata=JSON.parse(success);
						       		var jsonlen=Object.keys(jsondata).length;
						       		if(jsonlen>0)
						       		{
						       		for(var i=0;i<jsonlen;i++)
						       		{
						       			html+="<tr><td>"+jsondata[i].ID+"</td><td>"+jsondata[i].Name+"</td><td>"+jsondata[i].Email+"</td><td>"+jsondata[i].Course+"</td><td>"+jsondata[i].Address+"</td><td><button id='"+jsondata[i].ID+"'><i class='fas fa-trash'></i></button></td><td><button><i class='fas fa-edit'></i></button></td></tr>";
						       			
						       		}
						       	}
						       	else
						       	{

						       			html+="<tr><td colspan='3'><center>data is not available</center></td></tr>";
						       
						       	}
						       		$("#tbodydata").html(html);
						       }
			    });
	}

	function abc()
	{
		$('#mydata').dataTable().fnClearTable();
$('#mydata').dataTable().fnDestroy();
var a=$("#k1").val();
$.ajax({
						       type: "post",	
						       url:"2.php",
						       data:"name="+a,
						      datatype:'json',

						       success:function (success) {
						       	
						       		var html="";
						       		var jsondata=JSON.parse(success);
						       		var jsonlen=Object.keys(jsondata).length;
						       		if(jsonlen>0)
						       		{
						       		for(var i=0;i<jsonlen;i++)
						       		{
						       			html+="<tr><td>"+jsondata[i].ID+"</td><td>"+jsondata[i].Name+"</td><td>"+jsondata[i].Email+"</td><td>"+jsondata[i].Course+"</td><td>"+jsondata[i].Address+"</td></tr>";
						       			
						       		}
						       	}
						       	else
						       	{

						       			html+="<tr><td colspan='3'><center>data is not available</center></td></tr>";
						       
						       	}
						       		$("#tbodydata").html(html);
    $('#mydata').DataTable();				                  
						       }
			    });
	
	
	}

</script>
<div class="col-md-9">
<table class="table"  id="mydata">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Course</th>

		<th>Address</th>
		<th>Delete</th>
		<th>Update</th>
		</tr>
	</thead>
	<tbody id="tbodydata">
		</tbody>
	</table>
</div>
</body>
</html>