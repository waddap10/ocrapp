<?php
if (!empty($success_msg)) {
    echo '<p class="status-msg success">' . $success_msg . '</p>';
} elseif (!empty($error_msg)) {
    echo '<p class="status-msg error">' . $error_msg . '</p>';
}
?>
<div class="container">
    <header>
        <h2 class="text-center">Login to Your Account</h2>
    </header>
    <div class="form-control">
        <form action="" method="post">  
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" placeholder="EMAIL" required="" class="form-control">
                <?php echo form_error('email', '<p class="help-block">', '</p>'); ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="PASSWORD" required="" class="form-control">
                <?php echo form_error('password', '<p class="help-block">', '</p>'); ?>
            </div>
            <div>
                <input type="submit" name="loginSubmit" value="LOGIN" class="btn btn-primary">
            </div>
        </form>
        <p class="form-label">Don't have an account? <a href="<?php echo base_url('/registration'); ?>">Register</a></p>
    </div>
</div>