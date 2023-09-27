<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YHome</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS if needed -->
    <style>
        /* Custom CSS for styling the sections */
        .product-section {
            padding: 20px;
        }
        .product-section h2 {
            margin-bottom: 20px;
        }
        .product-card {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>

    <!-- Promotions Carousel Section -->
    <section class="product-section">
        <div class="container">
            <h2>Promotions</h2>
            <div id="promotionsCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#promotionsCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#promotionsCarousel" data-slide-to="1"></li>
                    <li data-target="#promotionsCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <!-- Product cards go here for the first slide -->
                            <!-- Example product card -->
                            <div class="col-md-4">
                                <div class="product-card">
                                    <img src="placeholder-image1.jpg" alt="Product 1">
                                    <h3>Product 1</h3>
                                    <p>Price: $10</p>
                                </div>
                            </div>
                            <!-- Add more product cards for the first slide -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Product cards go here for the second slide -->
                            <!-- Example product card -->
                            <div class="col-md-4">
                                <div class="product-card">
                                    <img src="placeholder-image2.jpg" alt="Product 2">
                                    <h3>Product 2</h3>
                                    <p>Price: $15</p>
                                </div>
                            </div>
                            <!-- Add more product cards for the second slide -->
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <!-- Product cards go here for the third slide -->
                            <!-- Example product card -->
                            <div class="col-md-4">
                                <div class="product-card">
                                    <img src="placeholder-image3.jpg" alt="Product 3">
                                    <h3>Product 3</h3>
                                    <p>Price: $20</p>
                                </div>
                            </div>
                            <!-- Add more product cards for the third slide -->
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#promotionsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#promotionsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Most Sold Carousel Section -->
    <section class="product-section">
        <div class="container">
            <h2>Most Sold</h2>
            <div id="mostSoldCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Add indicators for the Most Sold carousel -->
                <!-- Wrapper for slides -->
                <!-- Add slides with product cards for the Most Sold section -->
                <!-- Controls -->
                <!-- Add controls for the Most Sold carousel -->
            </div>
        </div>
    </section>

    <!-- Recently Added Carousel Section -->
    <section class="product-section">
        <div class="container">
            <h2>Recently Added</h2>
            <div id="recentlyAddedCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Add indicators for the Recently Added carousel -->
                <!-- Wrapper for slides -->
                <!-- Add slides with product cards for the Recently Added section -->
                <!-- Controls -->
                <!-- Add controls for the Recently Added carousel -->
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- Add Bootstrap and JavaScript scripts at the end of your HTML file -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // You can add JavaScript for interactivity here if needed
    </script>
</body>
</html>
