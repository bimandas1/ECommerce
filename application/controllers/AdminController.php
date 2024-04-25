<?php

require_once __DIR__ . '/../models/QueryModel.php';

/**
 * Admin page controller.
 */
class AdminController {

  private $db;

  /**
   * Constructor function to create object of QueryModel.
   */
  function __construct() {
    $this->db = new QueryModel();
  }

  /**
   * Function to control admin page.
   */
  public function invoke() {
    session_start();
    if(isset($_SESSION['email']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
      $email = $_SESSION['email'];
      require_once __DIR__ . '/../views/admin_view.php';
    }
    // No session for admin.
    else {
      header('location: /login');
    }
  }

}
