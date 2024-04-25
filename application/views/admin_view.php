<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Admin </title>
  <!-- jQuerry CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Bootstrap css cdn -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
  <!-- CSS -->
  <link rel="stylesheet" href="/public//css//style.css">
</head>

<body>
  <!-- Add product form -->
  <div class="div-add-new-product">

  </div>

  <div class="main">
    <!-- Alert message (by JS) -->
    <div class="alert" id="alert-by-js">
      <p class="alert-message" id="alert-message"> </p>
    </div>

    <!-- Title -->
    <div class="data-input">
      <div class="title">
        <p>Add new product</p>
      </div>

      <!-- Input form -->
      <form id="form-add-new-product">
        <label for="email"> Product name </label>
        <input type="text" name="product-name" placeholder="Product name">
        <label for="password"> Product description </label>
        <br>
        <textarea name="product-description" id="" cols="45" rows="10"></textarea>
        <br>
        <label for="product-price"> Product price </label>
        <input type="number" name="product-price">
        <label for="product-photo"> Product photo </label>
        <input type="file" name="product-photo">
        <input type="submit" name="submit" value="Add product">
      </form>

    </div>
</body>
  <!-- Bootstrap script cdn -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
  <script src="/public/script/admin_script.js"></script>
  <script src="/public/script/script.js"></script>
</html>
