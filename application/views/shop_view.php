<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta nasme="viewport" content="width=device-width, initial-scale=1.0">
  <title> SHOP </title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- jQuerry CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Main page CSS -->
  <link rel="stylesheet" href="/public//css//shop_view_style.css">
</head>

<body>
  <!-- Require Navbar -->
  <?php require_once __DIR__ . '/components/navbar_view.php'; ?>
  <!-- Show products -->
  <div class="product-section">
    <h2> Latest Items </h2>
    <div class="products">
      <!-- Require product rendering page component -->
      <?php require_once __DIR__ . '/components/items_view.php'; ?>
    </div>
  </div>


</body>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Script -->
<script src="/public//script//show_view_script.js"></script>

</html>
