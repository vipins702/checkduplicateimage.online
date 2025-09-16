<?php
// Function to convert currency
function convertCurrency($fromCurrency, $toCurrency, $amount) {
    // Make a request to Google to get the exchange rate
    $url = "https://www.google.com/search?q=" . urlencode("$amount $fromCurrency to $toCurrency");
    $html = file_get_contents($url);

    // Extract the exchange rate from the HTML
    preg_match('/<div class="BNeawe iBp4i AP7Wnd">(.*?)<\/div>/', $html, $matches);
    $result = isset($matches[1]) ? $matches[1] : "N/A";

    return $result;
}

// Set default values
$fromCurrency = isset($_GET['fromCurrency']) ? $_GET['fromCurrency'] : 'USD';
$toCurrency = isset($_GET['toCurrency']) ? $_GET['toCurrency'] : 'EUR';
$amount = isset($_GET['amount']) ? $_GET['amount'] : '';

// Convert currency if the form is submitted
$result = '';
if (isset($_GET['convert'])) {
    $result = convertCurrency($fromCurrency, $toCurrency, $amount);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1RXJ13SN14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-1RXJ13SN14');
    </script>
    
    <meta name="google-adsense-account" content="ca-pub-1857754690945447">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter | Image Search</title>

    <!-- Meta tags for SEO and social sharing -->
    <meta name="keywords" content="Currency Converter, Exchange Rates, Currency Exchange">
    <meta name="description" content="Convert currencies with our online Currency Converter. Get real-time exchange rates with just a few clicks.">
    <meta name="viewimage" content="width=device-width,initial-scale=1">
    <meta name="search" content="">
    <meta name="CBIR" content="content-based image retrieval,Reverse image search for related photos. Search by image to find sources from websites all over the Internet Discover MOST relevant information.">

    <!-- ... Include other meta tags from the original head ... -->

    <!-- Additional styles for the Currency Converter page -->
    <style>
        /* Additional styles for the Currency Converter page */
        /* ... */
    </style>
</head>

<body>

    <!-- Navigation menu -->
    <nav class="navbar navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Image Search</a>
            <div>
                <a href="#">Products</a>
                <a href="#">Future Upcomings</a>
                <a href="about_us.php">About Us</a>
                <a href="contact_us.php">Contact</a>
                <a href="privacy_policy.php">Privacy Policy</a>
                <!-- Add any additional menu items as needed -->
            </div>
        </div>
    </nav>

    <!-- Content for the Currency Converter page -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Currency Converter</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <div class="form-row">
                <div class="col-md-4">
                    <label for="fromCurrency">From Currency:</label>
                    <select name="fromCurrency" id="fromCurrency" class="form-control">
                        <option value="USD" <?php echo ($fromCurrency === 'USD') ? 'selected' : ''; ?>>USD</option>
                        <!-- Add other currency options as needed -->
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="toCurrency">To Currency:</label>
                    <select name="toCurrency" id="toCurrency" class="form-control">
                        <option value="EUR" <?php echo ($toCurrency === 'EUR') ? 'selected' : ''; ?>>EUR</option>
                        <!-- Add other currency options as needed -->
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="amount">Amount:</label>
                    <input type="text" name="amount" id="amount" class="form-control" value="<?php echo $amount; ?>">
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="col-md-12">
                    <button type="submit" name="convert" class="btn btn-primary">Convert</button>
                </div>
            </div>
        </form>

        <!-- Display the result -->
        <?php if ($result !== '') : ?>
            <div class="alert alert-success mt-3" role="alert">
                Result: <?php echo $result; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- ... Include other content from the original page ... -->

</body>

</html>
