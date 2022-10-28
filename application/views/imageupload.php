<?php echo $error;?>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="login-page dark-mode">
        <div class="login-box align-items-center">
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <p>Upload Foto KTP</p>
            </div>
            <div class="card-body text-center">
              <?php echo form_open_multipart('ImageController/do_upload');?>
              <input type='file' name='userfile' size='20' />
              <input type='submit' name='submit' value='upload' class="btn btn-success" id="btn-upload" onclick="myFunction()"/>

              <button class="btn btn-info" type="button" id="loading" disabled>
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Loading...
              </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  function myFunction() {
    document.getElementById('btn-upload').style.cssText = 'display: none;';
    document.getElementById('loading').style.cssText = 'display: inline;';
  }
  </script>