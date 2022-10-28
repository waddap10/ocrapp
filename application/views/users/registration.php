<?php
    if (!empty($success_msg)) {
        echo '<p class="status-msg success">' . $success_msg . '</p>';
    } elseif (!empty($error_msg)) {
        echo '<p class="status-msg error">' . $error_msg . '</p>';
    }
?>

<div class="hold-transition register-page">
  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../../index2.html" class="h1">Register a new account</a>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="NAME"
              value="<?php echo !empty($user['name']) ? $user['name'] : ''; ?>" required>
            <?php echo form_error('first_name', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="EMAIL"
              value="<?php echo !empty($user['email']) ? $user['email'] : ''; ?>" required>
            <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="PASSWORD" required>
            <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="conf_password" placeholder="CONFIRM PASSWORD" required>
            <?php echo form_error('conf_password', '<p class="help-block">', '</p>'); ?>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <input type="submit" name="signupSubmit" value="CREATE ACCOUNT" class="btn btn-primary btn-block" id="btn-regis">
          <button class="btn btn-info" type="button" id="loading" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
        </form>
        <p>Already have an account? <a href="<?php echo base_url('/login'); ?>">Login here</a></p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
</div>
<script>
  function myFunction() {
    document.getElementById('btn-regis').style.cssText = 'display: none;';
    document.getElementById('loading').style.cssText = 'display: inline;';
  }
  </script>