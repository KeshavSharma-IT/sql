const http = require('http');

const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
  res.statusCode = 200;
  res.setHeader('Content-Type', 'text/html');
  res.end(`<html>
  <head>
    <title> Register</title>
     <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="api.js" type="text/javascript"></script>
  
  </head>
  <body>
  
  
    <!--nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">KESHAV PANDIT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
       
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success mb-5 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  
  </nav>
  
  
    
  
  
  <!--nav bar finish-->
  
  
  
  
  
  
  
  
  <div class="container my-5 border border-primary p-5 ">
  <form >
  
  <div class="form-row">
      <div class="form-group col-md-12">
        <h2 class="text-success text-center ">Register</h2>
        <hr class="wd-25 bg-dark">
      </div>
      
    </div>
  
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="firstname"> First Name</label>
        <input type="text" class="form-control" id="firstname" placeholder="First name" onkeyup="remove_validation()">
        <label id="varify_name" ></label>
      </div>
      <div class="form-group col-md-6">
        <label for="lastname">Last name</label>
        <input type="text" class="form-control" id="lastname" placeholder="last name" onkeyup ="remove_validation()" >
        <label id="varify_lastname" ></label>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email" onkeyup="remove_validation()">
        <label id="varify_email" ></label>
      </div>
      <div class="form-group col-md-6">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password" onkeyup="remove_validation()">
        <label id="varify_password" ></label>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" onkeyup="remove_validation()">
      <label id="varify_address" ></label>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" onkeyup="remove_validation()">
      <label id="varify_address2" ></label>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity" onkeyup="remove_validation()">
        <label id="varify_city" ></label>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <input type="text" class="form-control" id="inputState" onkeyup="remove_validation()">
        <label id="varify_state" ></label>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip" onkeyup="remove_validation()">
        <label id="varify_zip" ></label>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="form-group">
        <label for="captcha">Captcha</label>
        <div class="g-recaptcha" data-callback="captchaCallback" data-sitekey="6LfGoKkZAAAAAEbwlAR6iPFSO7tnJ4k8KTnB94lX"></div>
    </div>
    <button type="button" onclick="validation()" class="btn btn-primary ">Sign in</button>
  </form>
  </div>
  
  
  <footer class="container-fluid bg-dark p-3 text-center text-light "> &copy;Keshavpandit</footer>
  
  <script type="text/javascript">
    function validation()
    {
      var a=document.getElementById("firstname").value;
      var b=document.getElementById("lastname").value;
      var c=document.getElementById("email").value;
      var d=document.getElementById("password").value;
      var e=document.getElementById("inputAddress").value;
      var f=document.getElementById("inputAddress2").value;
      var g=document.getElementById("inputCity").value;
      var h=document.getElementById("inputState").value;
      var i=document.getElementById("inputZip").value;
   
      if(a=='')
      {
        document.getElementById("varify_name").innerHTML="<div style='color:red'>requir field</div>";
      }
      if(b=='')
      {
        document.getElementById("varify_lastname").innerHTML="<div style='color:red'>requir field</div>";
      }
      
      if(c=='')
      {
        document.getElementById("varify_email").innerHTML="<div style='color:red'>requir field</div>";
      }
      
      if(d=='')
      {
        document.getElementById("varify_password").innerHTML="<div style='color:red'>requir field</div>";
      }
      
      if(e=='')
      {
        document.getElementById("varify_address").innerHTML="<div style='color:red'>requir field</div>";
      }
         if(f=='')
      {
        document.getElementById("varify_address2").innerHTML="<div style='color:red'>requir field</div>";
      }
      
      if(g=='')
      {
        document.getElementById("varify_city").innerHTML="<div style='color:red'>requir field</div>";
      }
      
      if(h=='')
      {
        document.getElementById("varify_state").innerHTML="<div style='color:red'>requir field</div>";
      }
  
       if(i=='')
      {
        document.getElementById("varify_zip").innerHTML="<div style='color:red'>requir field</div>";
      }
  
    }
  
  
  
   function remove_validation()
   {
    var a=document.getElementById("firstname").value;
      var b=document.getElementById("lastname").value;
      var c=document.getElementById("email").value;
      var d=document.getElementById("password").value;
      var e=document.getElementById("inputAddress").value;
      var f=document.getElementById("inputAddress2").value;
      var g=document.getElementById("inputCity").value;
      var h=document.getElementById("inputState").value;
      var i=document.getElementById("inputZip").value;
  
  
  
      
      if(a!='')
      {
        document.getElementById("varify_name").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
  
     
  
  
      if(b!='')
      {
        document.getElementById("varify_lastname").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
  
     
      
      
      if(c!='')
      {
        document.getElementById("varify_email").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
      
  
     
      if(d!='')
      {
        document.getElementById("varify_password").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
      
  
      if(e!='')
      {
        document.getElementById("varify_address").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
       
  
      
      if(f!='')
      {
        document.getElementById("varify_address2").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
      
  
      
      if(g!='')
      {
        document.getElementById("varify_city").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
      
  
      
      if(h!='')
      {
        document.getElementById("varify_state").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
      
      
      if(i!='')
      {
        document.getElementById("varify_zip").innerHTML="<div style='color:blue;'>GOOD</div>";
      }
       
  
  
  
  
  
   }
  
  
  
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
  
  </body>
  </html>`);
});

server.listen(port, hostname, () => {
  console.log(`Server running at http://${hostname}:${port}/`);
});