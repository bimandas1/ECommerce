<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
  <div class="main">
    <!-- Alert message -->
    <?php if ($this->message !== null) : ?>
      <div class="alert">
        <p class="alert-message"> <?= $this->message ?> </p>
      </div>
    <?php endif; ?>

    <!-- Alert message (by JS) -->
    <div class="alert" id="alert-by-js">
      <p class="alert-message" id="alert-message"> </p>
    </div>

    <!-- User email input div (visible only at user email input) -->
    <div class="data-input" id="div-email-input">
      <div class="title">
        <p>Reset Password</p>
      </div>

      <form id="form-email-input">
        <input type="hidden" name="task" value="submit-email">
        <label for="email"> Email </label>
        <input type="email" name="email" placeholder="Email Id" required>
        <input type="submit" name="submit">
      </form>
    </div>

    <!-- OTP input div (visible only after submitting user data and generating OTP) -->
    <div class="data-input" id="div-otp-input">
      <div class="title">
        <p>Input OTP</p>
      </div>

      <form id="form-otp-input">
        <input type="hidden" name="task" value="submit-otp">
        <label for="otp"> OTP </label>
        <input type="text" name="otp" placeholder="OTP" required>
        <input type="submit" name="submit">
      </form>
    </div>

    <!-- New password input div (visible only after submitting correct OTP) -->
    <div class="data-input" id="div-new-password-input">
      <div class="title">
        <p>Give New Password</p>
      </div>

      <form id="form-new-password-input">
        <input type="hidden" name="task" value="submit-new-password">
        <label for="new-password"> New Password </label>
        <input type="password" name="new-password" placeholder="New Password" required>
        <label for="reenter-new-password"> Reneter new password </label>
        <input type="password" name="reenter-new-password" placeholder="Reenter New Password" required>
        <input type="submit" name="submit">
      </form>
    </div>

    <!-- Register link -->
    <div class="register">
      <span>New user ? </span>
      <a href="/register"> Register </a>
    </div>

    <!-- Login link -->
    <div class="login">
      <span>Already registered ? </span>
      <a href="/login"> Go to Login </a>
    </div>

  </div>
</body>
<script src="/public/script/script.js"></script>
<script src="/public/script/reset_password_script.js"></script>

</html>
