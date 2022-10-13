<?php
if (!empty($success_msg)) {
    echo '<p class="status-msg success">' . $success_msg . '</p>';
} elseif (!empty($error_msg)) {
    echo '<p class="status-msg error">' . $error_msg . '</p>';
}
?>

<div class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-primary">
      <div class="card-body">
        <header>
          <h2 class="login-box-msg">Login to Your Account</h2>
        </header>
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" placeholder="EMAIL" required="" class="form-control">
            <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" placeholder="PASSWORD" required="" class="form-control">
            <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div>
            <input type="submit" name="loginSubmit" value="LOGIN" class="btn btn-primary btn-block" id="btn-login">
            <button class="btn btn-info" type="button" id="loading" disabled>
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Loading...
            </button>
          </div>
        </form>
        <p class="form-label">Don't have an account? <a href="<?php echo base_url('/registration'); ?>">Register</a></p>
      </div>
    </div>
  </div>
</div>
<script>
  function myFunction() {
    document.getElementById('btn-login').style.cssText = 'display: none;';
    document.getElementById('loading').style.cssText = 'display: inline;';
  }
  </script>