<!DOCTYPE html>
<html lang="en">
<head>
<title>Image Search on web and mobile</title>
 <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="http://www.imagesearch.online/" rel="imagesearch">image search!</a>-->
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
    .zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}
    </style>
</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
      <div class="container">
        <a class="navbar-brand" href="#">Image Search</a>
        <!--<a class="btn btn-primary" href="#">Sign In</a>-->
      </div>
    </nav>
    
    
    <!-- Masthead -->
    <header class="">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          
          
         
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
             <!-- By Anurag Start-->
             <div class="col-sm-12" id="result-main">
	<div class="panel pannel-success sucess-box  result_box">
        <div class="panel-heading text-center success-heading" style="font-size:20px;">
            Search Engine Results: 
            <?php
 session_start();
 $id = $_SESSION['id'];
 $google="https://www.google.com/searchbyimage?&image_url=". $id."";
 $encodeURL=urlencode($id);
 $yandex="https://www.yandex.com/images/search?text=". $encodeURL."&img_url=". $encodeURL."&rpt=imageview";
 $bing="https://www.bing.com/images/searchbyimage?FORM=IRSBIQ&cbir=sbi&imgurl=". $encodeURL."";
 //$var_name = $_POST['a'];
 //echo($var_name); 
 //session_regenerate_id(true);
 //echo($id);
 //session_destroy();
 //unset($_SESSION['id']);
?>
        </div>
        <div class="panel-body">
        	<!--<table class="table table-bordered table-stripped">
            	<tr>
                	<th  class="bg-warning warning">Search Engine</th>
                    <th class="bg-warning warning">Details</th>
                    <th class="bg-warning warning">Search Images</th>
                </tr>
                <tr>
                	<td width="20%" class="bg-warning warning"><strong>Google</strong></td>
                    <td width="50%"> Images that are similar with your provided image according to google </td>
                    <td width="30%">
                    	<a href="<?=$google?>" class="btn btn-danger btn-xs button" style="padding:10px;" target="_blank">Check Images</a>
                    </td>
                </tr>
                <tr>
                	<td class="bg-warning warning"><strong>Bing</strong></td>
                    <td> Images that are similar with your provided image according to Bing </td>
                    <td>	
                    	<a href="<?=$bing?>" class="btn btn-danger btn-xs button" style="padding:10px;" target="_blank">Check Images</a>
                    </td>
                </tr>
                <tr>
                	<td class="bg-warning warning"><strong>Yandex</strong></td>
                    <td> Images that are similar with your provided image according to Yandex </td>
                    <td>
                    	<a href="<?=$yandex?>" class="btn btn-danger btn-xs button" style="padding:10px;" target="_blank">Check Images</a>
                    </td>
                </tr>
            </table>-->
            
            <table class="zui-table">
    <thead>
        <tr>
            <th>Search Engine</th>
            <th>Search Engine Description</th>
            <th>Search Image Link</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><b>Google</b></td>
            <td> Similar images found by Google Search Engine </td>
            <td><a href="<?=$google?>" class="btn btn-danger" target="_blank">Check Images</a></td>
            
        </tr>
        <tr>
            <td><b>Bing</b></td>
            <td> Similar images found by Bing Search Engine </td>
            <td><a href="<?=$bing?>" class="btn btn-danger" target="_blank">Check Images</a></td>
            
        </tr>
        <tr>
            <td><b>Yandex</b></td>
            <td> Similar images found by Yandex Search Engine </td>
            <td><a href="<?=$yandex?>" class="btn btn-danger" target="_blank">Check Images</a></td>
            
        </tr>
        
    </tbody>
</table>
        </div>
    </div>
</div>
             <!-- By Anurag End-->
            
          </div>
        </div>
      </div>
    </header>
    
    
    <footer class="footer bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
            <ul class="list-inline mb-2">
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
              <li class="list-inline-item">&sdot;</li>
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
            </ul>
            <p class="text-muted small mb-4 mb-lg-0">&copy; imagesearch.online 2018. All Rights Reserved.</p>
          </div>
          <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-facebook fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3">
                <a href="#">
                  <i class="fa fa-twitter fa-2x fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram fa-2x fa-fw"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>


<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <div style="margin-top: 200px;">
        <?php
 session_start();
 
 //unset($_SESSION['id']);
?>
    </div>
</body>
</html>