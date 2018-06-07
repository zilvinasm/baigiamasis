<?php
  $happy_clientsQuery = new WP_Query( array (
    'post_type'        => 'happy_clients',
    'order'            => 'ASC'
  ));
?>
<section class="happy-clients" id="happy-clients">
  <div class="container">
      <div class="title-fix-set">
        <h2><?php the_field('happy_clients_head_text', 88) ?></h2>
        <p><?php the_field('sector_head_subtext', 88) ?></p>
        <div class="title-text-underline"></div>
      </div>
<!-- slider pradžia-->
      <div>
        <ul class="siema">
        <?php
          if ($happy_clientsQuery->have_posts ()):
            while ($happy_clientsQuery->have_posts()) :
              $happy_clientsQuery->the_post();
              ?>
          <li>
            <div>
              <div class="happy-clients-text">
                <p><?php the_field('comments_text', get_the_ID()) ?></p>
              </div>
              <div class="quot"><?php the_field('quot', get_the_ID()) ?></div>
              <div class="client-info">
                <img src="<?php the_field('client_foto', get_the_ID()) ?>" alt="Vasily" class="client-foto">
                <h3><?php the_field('client_name', get_the_ID()) ?></h3>
                <p><?php the_field('client_position', get_the_ID()) ?></p>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </li>
        </ul>
      </div>
        <!-- slider button dalis-->
        <button class="btn0">1</button>
        <button class="btn1">2</button>
        <button class="btn2">3</button>
<!-- slider pabaiga-->

  </div>

</section>
