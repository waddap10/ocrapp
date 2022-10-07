<nav class="container-flui navbar navbar-expand-lg bg-light sticky-top">
    <div class="container-fluid" id="myTopnav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a href="<?php echo base_url('/'); ?>" class="navbar-brand">Home</a>
                <a class="navbar-brand" aria-current="page"><?php echo $name[0]->name; ?></a>
                <a class="navbar-brand" aria-current="page" href="<?php echo base_url('/contact'); ?>">Contact</a>
                <a class="btn btn-danger" aria-current="page" href="<?php echo base_url('/logout'); ?>">Logout</a>
            </li>
        
    </div>
</nav>
