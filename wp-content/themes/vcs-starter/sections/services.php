<?php
  $servicesQuery = new WP_Query( array (
    'post_type'        => 'services',
    'order'            => 'ASC'
  ));
?>

<section class="services" id="services">
     <div class="container">
       <div class="title-fix-set">
           <h2><?php the_field('services_head_text', 88) ?></h2>
           <p><?php the_field('sector_head_subtext', 88) ?></p>
           <div class="title-text-underline"></div>
       </div>
       <div>
         <ul class="services-flexbox">
<!-- prasideda ciklas-->
        <?php
          if ($servicesQuery->have_posts ()):
            while ($servicesQuery->have_posts()) :
              $servicesQuery->the_post();
              ?>
           <li>
              <div class="icon">
                <div class="icon-picture">
                  <i <?php the_field('services', get_the_ID()) ?></i>
                </div>
                <div>
                    <h3><?php the_field('service_header', get_the_ID()) ?></h3>
                    <p> <?php the_field('service_subheader', get_the_ID()) ?></p>
                </div>
              </div>
<!-- ciklas baigiasi-->
          <?php endwhile; endif; ?>
           </li>
        </ul>
       </div>
</section>
