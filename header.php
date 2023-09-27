<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Gym Shop</title>
  <!-- Link to Bootstrap CSS -->
  <!-- change -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Link to Font Awesome CSS for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- Add your custom CSS if needed -->
  <style>
    /* Custom CSS for the double header */
    .double-header {
      background-color: #333;
      color: #fff;
    }
    .upper-half {
      padding: 10px 0;
    }
    .lower-half {
      background-color: #222;
      padding: 10px 0;
    }
    .search-bar {
      background-color: #444;
      border: none;
      color: #fff;
    }
  </style>
</head>
<body>

<!-- Upper Half: Logo and Navigation Links -->
<div class="double-header upper-half">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="logo.png" alt="Your Gym Shop Logo" class="img-fluid">
        <span class="font-weight-bold">Your Gym Shop</span>
      </div>
      
    </div>
  </div>
</div>

<!-- Lower Half: Secondary Navigation and Icons -->
<div class="double-header lower-half">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form class="form-inline">
          <input class="form-control mr-sm-2 search-bar" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search fa-lg" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </button>
        </form>
      </div>
      <div class="col-md-6 text-right">
        <a href="/diplomna/brand.php" class="text-light mx-3">Brands</a>
        <a href="/diplomna/home.php" class="text-light mx-3">Home</a>
        <a href="/diplomna/category.php" class="text-light mx-3">Categories</a>
        <a href="#" class="text-light mx-3">
          <i class="fas fa-shopping-cart fa-2x text-warning"></i>
        </a>
        <a href="#" class="text-light mx-3">
          <i class="fas fa-user-circle fa-2x text-primary"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Add Bootstrap and Font Awesome (for icons) scripts at the end of your HTML file -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
