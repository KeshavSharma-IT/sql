<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="fade.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

</head>
<body background="photos//12.jpg" style="background-size: cover;">

	<a href="index.html">
		<div style="position: relative;top:90px;left: 30px">
		<button style="background-color: transparent;border-width:0px"><h4><i class="fas fa-arrow-left"></i></h4></button></div></a>
	<div style="position: relative;float: right;right: 80px;top:58px">
			<button type="submit" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">Log In</button>
		</div>

<!---------------------------Navbar--------------------------->

<div class="container p-5">
		<div class="row">
<div class="col-lg-12">
		<span class="text-center">
			<h1>
				S H O P P E R S .
			</h1>
		</span>
</div>
</div>
</div>
<!----------------------------- sign in form----------------------->
<div class="container-fluid">
<form>
  <div class="form-row">
    <div class="form-group col-md-4 ">
      <label for="a">Full Name &nbsp;<span id="demo1"></span></label>
      <input type="Full Name" class="form-control" id="k1" onkeyup="aa()" >
     
    </div>
     <div class="form-group col-md-4">
      <label for="b">E-Mail &nbsp;<span id="demo2"></span></label>
      <input type="E-Mail" class="form-control" id="k2" onkeyup="aa()" >
      
    </div>
    <div class="form-group col-md-4">
      <label for="c">Password &nbsp;<span id="demo3"></span></label>
      <input type="password" class="form-control" id="k3" onkeyup="aa()" >
      
    </div>
  </div>
  <div class="form-group">
    <label for="d">Address &nbsp;<span id="demo4"></span></label>
    <input type="text" class="form-control" id="k4" placeholder="1234 Main St" onkeyup="aa()" >
    
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="e">City &nbsp;<span id="demo5"></span></label>
      <input type="text" class="form-control" id="k5" onkeyup="aa()" >
      
    </div>
    <div class="form-group col-md-4">
      <label for="f">State &nbsp;<span id="demo6"></span></label>
      <select id="k6" class="form-control" onchange="aa()">
        <option value="" selected>State</option>
        <option value="U.P">U.P</option>
         <option value="A.P">A.P</option>
          <option value="H.P">H.P</option>
           <option value="Haryana">Haryana</option>
           <option value="Uttarakhand">Uttarakhand</option>
        
      </select>

    </div>
    <div class="form-group col-md-2">
      <label for="g">Zip &nbsp;<span id="demo7"></span></label>
      <input type="text" class="form-control" id="k7" onkeyup="aa()" >
      
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="k8" onkeyup="aa()">
      
      <label class="form-check-label" for="h">
        Check me out<span id="demo8"></span>
      </label>

    </div>
  </div>
  <button type="button" class="btn btn-primary" onclick="abc()">Sign in</button>




</form>
</div>

<!------------------------------log in------------------------>

<!-- Vertically centered modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <div class="text-center text-danger">
       	<span><h3>S H O P P E R S .</h3></span>
       </div>

<div class="form-group  text-light">
      <label for="inputE-Mail">E-Mail</label>
      <input type="E-Mail" class="form-control" id="inputE-Mail" >
    </div>
    <div class="form-group text-light">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>

 <button type="submit" class="btn btn-primary" >Log In</button>

      </div>
    </div>
  </div>
</div>


 
<!---------------------------------------php------------------------------------>
 	<script>
    state();
    function state()
    {

     $.ajax({
  type:"post",
    url:'state.php',
    datatype:'json',
    success:function(success)

    {
      alert(success);
  /*var html="";
                      var jsondata=JSON.parse(success);
                      var jsonlen=Object.keys(jsondata).length;
                      if(jsonlen>0)
                      {
                      for(var i=0;i<jsonlen;i++)
                      {
                      }
                    }*/
                  }
});
    }
 		function abc()
 		{

 			var a=$("#k1").val();
 			var b=$("#k2").val();
 			var c=$("#k3").val();
 			var d=$("#k4").val();
 			var e=$("#k5").val();
 			var f=$("#k6").val();
 			var g=$("#k7").val();
 			var h=$('#k8').is(":checked");
    
 var flag=0;
        if(a=='')
      {
        flag=1;
document.getElementById("demo1").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(b=='')
      {
        flag=1;
document.getElementById("demo2").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(c=='')
      {
        flag=1;
document.getElementById("demo3").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(d=='')
      {
        flag=1;
document.getElementById("demo4").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(e=='')
      {
        flag=1;
document.getElementById("demo5").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';       }
      if(f=='')
      {
        flag=1;
document.getElementById("demo6").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(g=='')
      {
        flag=1;
document.getElementById("demo7").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }
      if(h==false)
      {
        flag=1;
document.getElementById("demo8").innerHTML='<font color="red"><i class="fas fa-times"></i></font>';
      }

if(flag==0)
{
$.ajax({
  type:"post",
 		url:"insert.php",
 		data:"Full_Name="+a+"&E_Mail="+b+"&Password="+c+"&Address="+d+"&City="+e+"&State="+f+"&Zip="+g,
 		datatype:'json',
 		success:function(success)
 		{

if(success==1)
{
	alert("Data Save Sucessfully");
	location.reload();
}
else
{
alert("Unsucessful");
}
}
});
}  
}

 	
</script>


<!-------------------------------------validation--------------------------------->

<script>
	function aa()
	{

	     var a=$("#k1").val();
 			var b=$("#k2").val();
 			var c=$("#k3").val();
 			var d=$("#k4").val();
 			var e=$("#k5").val();
 			var f=$("#k6").val();
 			var g=$("#k7").val();
 			var h=$("#k8").val();
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
 			if(g!='')
 			{
     
document.getElementById("demo7").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
 			if(h!='')
 			{
document.getElementById("demo8").innerHTML='<font color="green"><i class="fas fa-check"></i></font>';
 			}
}
</script>





</body>
</html>
 