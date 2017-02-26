<?php 

include get_template_directory().'/libs/headermeta.php';

?>
<body>
<div class="contenedor">

<header class="h-portada">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="centro">
			<?php logo(); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-9 col-lg-9">
        <?php include (TEMPLATEPATH . '/libs/menu.php'); ?>
      </div>      
    </div>      
  </div>  
</header>