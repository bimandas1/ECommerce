<?php

require_once __DIR__ . '/../../helpers/Session.php';

/**
 * Control user login.
 */
class LoginController {

  private $message;
  private $googleAuth;

  /**
   * Constructor function to set default values.
   */
  function __construct() {
    $this->message = null;
    // Destroy session.
    $session = new Session();
    $session->destroySession();
  }

  /**
   * Function to control user login.
   */
  public function invoke() {
    if(isset($_POST['email'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Initialize object of QueryModel.
      require_once __DIR__ . '/../models/QueryModel.php';
      $db = new QueryModel();
      // If valid user.
      if($db->isValidUser($email, $password) === TRUE) {
        session_start();
        $_SESSION['email'] = $email;
        if($db->isAdmin($email)) {
          $_SESSION['is_admin'] = TRUE;
        }
        // Redirect to main page.
        header('location: /feeds');
      }
      else {
        $this->message = 'Email id or password not matched';
      }
    }

    // Call the function to initialize google authentication.
    $this->initiateGoogleAuth();
    // Require login view.
    require_once __DIR__ . '/../views/login_view.php';
  }

  public function initiateGoogleAuth() {
    require_once __DIR__ . '/../../helpers/GoogleAuthentication.php';
    $this->googleAuth = new GoogleAuthentication();
    // Check if login through google is possible.
    $this->googleAuth->authenticate();
  }
}
