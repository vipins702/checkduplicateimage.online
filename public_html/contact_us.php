<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-adsense-account" content="ca-pub-1857754690945447">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1RXJ13SN14"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1RXJ13SN14');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Check Duplicate Image</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <style>
        /* Additional styles for the page */
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background: linear-gradient(to bottom, #e6e6e6, #ffffff);
        }

        nav {
            background-color: #f8f9fa !important;
            box-shadow: 0 4px 2px -2px gray;
        }

        header.masthead {
            background: url('img/bg-masthead.jpg') center center no-repeat;
            background-size: cover;
        }

        header.masthead h1 {
            color: #fff;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .contact-info {
            margin-top: 30px;
        }

        .contact-info p {
            margin-bottom: 15px;
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

    <!-- Header -->
    <nav class="navbar navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="index">Image Search</a>
            <div>
                <a href="home">Products</a>
                <a href="#">Future Upcomings</a>
                <a href="about_us">About Us</a>
                <a href="contact_us">Contact</a>
                <a href="privacy_policy">Privacy Policy</a>
            </div>
        </div>
    </nav>

    <header class="masthead text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">Contact Us</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Contact Form -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <form action="process_contact.php" method="post">
                    <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Your Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="contact-info mt-5">
            <h2>Contact Information</h2>
            <p>
                If you have any questions or inquiries, please feel free to contact us. We will get back to you as soon as possible.
            </p>
            <p>Email: <a href="mailto:inquiry@checkduplicateimage.online">inquiry@checkduplicateimage.online</a></p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                    <ul class="list-inline mb-2">
                        <li class="list-inline-item">
                            <a href="home">Products</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="#">Future Upcomings</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="about_us">About Us</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="contact_us">Contact</a>
                        </li>
                        <li class="list-inline-item">&sdot;</li>
                    
                        <li class="list-inline-item">&sdot;</li>
                        <li class="list-inline-item">
                            <a href="privacy_policy">Privacy Policy</a>
                        </li>
                    </ul>
                    <p class="text-muted small mb-4 mb-lg-0">&copy; checkduplicateimage.online 2023. All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                    <ul class="list-inline mb-0 social-icons">
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
</body>

</html>
