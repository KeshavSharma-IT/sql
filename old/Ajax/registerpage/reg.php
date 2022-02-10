<!DOCTYPE html>
<html>
<head>
	<title>Register New Page</title>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<div class="container-fluid bg-light p-5">
		<h3 class="text-center">Registration</h3>
	<hr class="bg-danger">
	
	<form>

	<div class="row">
		<div class="col-md-6  form-group">
			<label for="a">Name  &nbsp; <span id="demo1"></span></label>
			<input type="text" onkeyup="log()" id="k1" placeholder="name" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<label for="b">Password  &nbsp;<span id="demo2"></span></label>
			<input type="text" onkeyup="log()" id="k2" placeholder="Password" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 form-group">
			<label for="c">Email  &nbsp;<span id="demo3"></span></label>
			<input type="text" onkeyup="log()" id="k3" placeholder="E-mail" class="form-control">
		</div>
		<div class="col-md-6 form-group">
			<label for="d">Mobile no  &nbsp;<span id="demo4"></span></label>
			<input type="text" onkeyup="log()" id="k4" placeholder="Mobile no" class="form-control" onkeypress="return ValidateTelephone(event)" maxlength="16">
		</div>
	</div>

	<div class="form-group">
    <label for="e">Address &nbsp;<span id="demo5"></span></label>
    <input type="text" class="form-control" id="k5" placeholder="1234 Main St" onkeyup="log()" >
    
  </div>
  <div class="form-row ">
  	<div class="col-md-4 form-group">
  		<label for="f">City &nbsp;<span id="demo6"></span></label>
    <input type="text" class="form-control" id="k6" placeholder="city" onkeyup="log()" >
</div>

<div class="col-md-4 form-group" >
  		<label for="g">State &nbsp;<span id="demo7"></span></label>
  <div id="states"></div>
</div>

<div class="col-md-4 form-group "  >
  		<label for="h">District &nbsp;<span id="demo8"></span></label>
    <div id="districts"><select class="form-control" id="k8" onchange="log()" >
			<option value=''>District</option>
			</select>
			</div>
</div>
</div>
<div class="row">
	<div class="col-md-3 form-group">
		<label for="i">Zip &nbsp;<span id="demo9"></span></label>
    <input type="text" class="form-control"  id="k9" onkeypress="return ValidateTelephone(event)" maxlength="6" placeholder="zip" onkeyup="log()" >
</div>
</div>
    
     <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="k10" onkeyup="log()">
      
      <label class="form-check-label" for="h">
        Check me out<span id="demo10"></span>
      </label>

    </div>
  </div>
  <button type="button" id="register" class="btn btn-primary" onclick="login()">Sign in</button>
</form>
</div>

<div class="container" id="loaddiv">
	<img src="loading.gif" id="load" class="w-25" style="position: relative;top:-500px; left: 350px;display:none;" >
</div>



<script type="text/javascript">
	state();
function state()
{
	$.ajax({
		type:"post",
		url:"state.php",
		datatype:'json',
		success:function(success)
		{
			var html="";
			html='<select class="form-control" id="k7" onchange="abc()" >';
			html+="<option value=''>State</option>";
			var jsondata=JSON.parse(success);
						       		var jsonlen=Object.keys(jsondata).length;
						       		if(jsonlen>0)
						       		{
						       		for(var i=0;i<jsonlen;i++)
						       		{
						       		html+="<option value='"+jsondata[i].StateId+"'>"+jsondata[i].StateName+"</option>";	
						       		}

						       	}
						       	html+="</select>";
						       	$("#states").html(html);
		}

	});
}





	
	function login() {

		
		var a=$("#k1").val();
		var b=$("#k2").val();
		var c=$("#k3").val();
		var d=$("#k4").val();
		var e=$("#k5").val();
		var f=$("#k6").val();
		var g=$("#k7").val();
		var h=$("#k8").val();
		var i=$("#k9").val();
		var j=$("#k10").is(":checked");
     var reg_email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


		var flag=0;
		if (a=='') {
			flag=1;
			document.getElementById("demo1").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (b=='') {
			flag=1;
			document.getElementById("demo2").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (c=='') {
			flag=1;
			document.getElementById("demo3").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		else if(!reg_email.test(c)) {
        flag = 1;
        $("#demo3").html("<b>Invalid Email<b>");
    }
		if (d=='') {
			flag=1;
			document.getElementById("demo4").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (e=='') {
			flag=1;
			document.getElementById("demo5").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (f=='') {
			flag=1;
			document.getElementById("demo6").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (g=='') {
			flag=1;
			document.getElementById("demo7").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (h=='') {
			flag=1;
			document.getElementById("demo8").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (i=='') {
			flag=1;
			document.getElementById("demo9").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 
		if (j=='') {
			flag=1;
			document.getElementById("demo10").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
		} 

		if (flag==0){
$("#load").show();
 $('#register').prop('disabled', true);
			$.ajax({
				type:"post",
				url:"insert.php",
				data:"Name="+a+"&Password="+b+"&Email="+c+"&Mobile_no="+d+"&Address="+e+"&City="+f+"&State="+g+"&District="+h+"&Zip="+i+"&Check="+j,
				datatype:'json',
				success:function(success){
					//alert(success);
					if (success==1) {

						



	
						$.ajax({
				type:"post",
				url:"phpmailer/mail_nudge.php",
				data:"Name="+a+"&Password="+b+"&Email="+c+"&Mobile_no="+d+"&Address="+e+"&City="+f+"&State="+g+"&District="+h+"&Zip="+i+"&Check="+j,
				datatype:'json',
				success:function(success){
					
					$("#load").hide();
					alert(success);
					location.reload();
				}

			});

					}
					else{
						alert("data not save successfully");

					}
				}

			});

		}




	}

</script>


<script>
	$('#k4').keyup(function(e){
    var ph = this.value.replace(/\D/g,'').substring(0,12);
    // Backspace and Delete keys
    var deleteKey = (e.keyCode == 8 || e.keyCode == 46);
    var len = ph.length;
    if(len==0){
        ph=ph;
    }else if(len<2){
        ph='+91 '+ph;
    
    }else if(len<5){
        ph='+'+ph.substring(0,2)+' '+ph.substring(2,5);
      }else if(len<8){
        ph='+'+ph.substring(0,2)+' '+ph.substring(2,5)+' '+ph.substring(5,8);
    }else{
        ph='+'+ph.substring(0,2)+' '+ph.substring(2,5)+' '+ph.substring(5,8)+' '+ph.substring(8,12);
    }
    this.value = ph;
});
function ValidateTelephone(event) {
   // var regex = new RegExp("^[0-9!@#\$%\^\&*\)\(+=.,;_ -]");
 var regex = new RegExp("^[0-9+]");


    var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
    if (!regex.test(key)) {
        event.preventDefault();
        return false;
    }
}

	function log()
	{

	     var a=$("#k1").val();
 			var b=$("#k2").val();
 			var c=$("#k3").val();
 			var d=$("#k4").val();
 			var e=$("#k5").val();
 			var f=$("#k6").val();
 		 	var h=$("#k8").val();
			var i=$("#k9").val();
			var j=$("#k10").is(":checked");
if(a!='')
 			{
document.getElementById("demo1").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(b!='')
 			{
document.getElementById("demo2").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(c!='')
 			{
document.getElementById("demo3").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(d!='')
 			{
document.getElementById("demo4").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(e!='')
 			{
document.getElementById("demo5").innerHTML='<font color="green"><i class="fas fa-check"></i></font>'; 			}
 			if(f!='')
 			{
document.getElementById("demo6").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			
 			if(h!='')
 			{
document.getElementById("demo8").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(i!='')
 			{
document.getElementById("demo9").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(j!='')
 			{
document.getElementById("demo10").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
}
</script>

<script type="text/javascript">
	function abc()
	{
			var g=$("#k7").val();

		if(g!='')

 			{
     
document.getElementById("demo7").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			
	$.ajax({
		type:"post",
		url:"district.php",
		data:"StateId="+g,
		datatype:'json',
		success:function(success)
		{
			var html="";
			html='<select class="form-control" id="k8" onchange="log()" >';
			html+="<option value=''>District</option>";
			var jsondata=JSON.parse(success);
						       		var jsonlen=Object.keys(jsondata).length;
						       		if(jsonlen>0)
						       		{
						       		for(var i=0;i<jsonlen;i++)
						       		{
						       		html+="<option value='"+jsondata[i].DistrictId+"'>"+jsondata[i].Name+"</option>";	
						       		}

						       	}
						       	html+="</select>";
						       	$("#districts").html(html);
		}

	});
 			}
 		}
</script>



		
		
		

</body>
</html>