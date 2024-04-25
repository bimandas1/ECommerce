<?php

class AddNewProductController {

  public function invoke() {
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
      if(isset($_FILES['product-photo']) && $_FILES['product-photo']['error'] == FALSE) {
        // Check uploaded file type.
        $fileType = strtolower(pathinfo($_FILES['product-photo']['name'], PATHINFO_EXTENSION));
        if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "webp") {
          echo "Uploaded file type can't be permitted.";
        }
        else {
          $product_name = $_POST['product-name'];
          $product_description = $_POST['product-description'];
          $product_price = $_POST['product-price'];

          // Save product in database.
          require_once __DIR__ . '/../models/QueryModel.php';
          $db = new QueryModel();
          $new_product_photo_name = $db->addNewProduct($product_name, $product_description, $product_price, $fileType);
          // Save product photo.
          move_uploaded_file($_FILES['product-photo']['tmp_name'], 'public/assests/product_images/' . $new_product_photo_name);
          // Respond ok.
          echo '1';
        }
      }
      else {
        echo "Something is wrong. Can't add product. Try again.";
      }
    }
    // No session for admin.
    else {
      header('location: /login');
    }
  }
}
