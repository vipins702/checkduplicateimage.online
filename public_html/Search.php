<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RXJ13SN14"></script>
<meta name="google-adsense-account" content="ca-pub-1857754690945447">

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1RXJ13SN14');
</script>
    <title>Image Search on web and mobile</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">
    <style>
    
           body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background: linear-gradient(to bottom, #e6e6e6, #ffffff);
        }
  
    
    
    
           
        .zui-table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            font: normal 13px Arial, sans-serif;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
        }

        .zui-table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 15px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
        }

        .zui-table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 15px;
            text-shadow: 1px 1px 1px #fff;
        }

        .result_box {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

     

        

        .feature-box {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .feature-box h2 {
            color: #343a40;
        }

        .feature-box ul {
            list-style-type: none;
            padding: 0;
        }

        .feature-box li {
            margin-bottom: 10px;
        }
        
        
         /* Menu styles */
        nav {
            background-color: #343a40;
            padding: 0.5rem 1rem;
        }

        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }
        
        
        
        
    </style>
</head>
<body>
    <!-- Navigation -->
      <nav class="navbar navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="reverse_image_search.php">Image Search</a>
             <a href="home.php">Products</a>
                <a href="#">Future Upcomings</a>
                <a href="about_us.php">About Us</a>
                <a href="contact_us.php">Contact</a>
                <a href="privacy_policy.php">Privacy Policy</a>
        </div>
    </nav>
    
  <!-- Masthead -->
    <header class="">
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
 $google="https://lens.google.com/uploadbyurl?&url=". $id."";
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
    <!-- Key Features Section -->
    <section class="feature-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Key Features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>Reverse image search</li>
                        <li>Image verification</li>
                        <li>Duplicate image checker</li>
                        <li>Image matching tool</li>
                        <li>Photo search engine</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>Find similar images online</li>
                        <li>Fake image detection</li>
                        <li>Image source verification</li>
                        <li>Image deduplication</li>
                        <li>Reverse photo lookup</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>Image similarity search</li>
                        <li>Fake image identification</li>
                        <li>Visual search tool</li>
                        <li>Fake photo finder</li>
                        <li>Reverse image lookup tool</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                 <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="home.php">Products</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Future Upcomings</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="about_us.php">About Us</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="contact_us.php">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="privacy_policy.php">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; checkduplicateimage.online 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item mr-3">
                            <a href="#">
                                <i class="fa fa-facebook fa-2x fa-fw"></i>
                        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="#">Products</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Future Upcomings</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="about_us.php">About Us</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; checkduplicateimage.online 2023. All Rights Reserved.</p>
                </div>     </a>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <div style="margin-top: 200px;">
        <?php
        session_start();
        //unset($_SESSION['id']);
        ?>
    </div>
</body>
</html>