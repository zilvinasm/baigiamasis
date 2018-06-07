
<?php
  $clientslogoQuery = new WP_Query( array (
    'post_type'        => 'clients_logo',
    'order'            => 'ASC'
  ));
?>
<section class="clients-logo" id="clients-logo">
  <div class="container">
    <ul class="container clients-logo-container">
<!-- ciklos pradžia-->
      <?php
        if ($clientslogoQuery->have_posts ()):
          while ($clientslogoQuery->have_posts()) :
            $clientslogoQuery->the_post();
            ?>
            <li><img src="<?php the_field('clients_logo', get_the_ID()) ?>" alt="CocaCola"></li>
            <?php endwhile; endif; ?>
  </div>

  <!--cia ciklas pasibaigs-->

</section>
