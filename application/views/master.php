<!DOCTYPE html>
<html  >

<head>
 
   <title >Codeigniter MySQL MySQL</title>

 
 <meta charset="UTF-8">
  <meta name="description" content="Codeigniter MySQL CRUD">
  <meta name="keywords" content="Codeigniter MySQL CRUD, PHP, MySQL HTML,CSS,JavaScript">
  <meta name="author" content="Md. Rubel">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
    <body>
     
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
<!--                         <li> <img src="./assets/images/ce.png" alt="CE" class="tlogo"> </li>-->
                        <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
                    </ul>

                </div>
            </div>
        </nav>


<div class="container " > 
    <div class="row content">
<?php
if(isset($content)){
    echo $content;
}


?>
    
     </div>
       

 
    
</div>


        

<footer class="container-fluid text-center">
  <p>@Codeenable.com</p>
</footer>
    
  
</body>
</html>