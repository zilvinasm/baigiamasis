<?php
  $worksQuery = new WP_Query( array (
    'post_type'        => 'works_examples',
    'posts_per_page'   => -1,
    'order'            => 'ASC'
  ));
?>

<section class="works" id="works">
    <div class="container">
      <div class="title-fix-set">
          <h2><?php the_field('works_head_text', 88) ?></h2>
          <p><?php the_field('sector_head_subtext', 88) ?></p>
          <div class="title-text-underline"></div>
      </div>
    </div>
      <div class="images">
        <ul>
<!-- ciklos pradžia-->
          <?php
            if ($worksQuery->have_posts ()):
              while ($worksQuery->have_posts()) :
                $worksQuery->the_post();
                ?>
          <li>
            <div class="hover-on-work-example">
              <img src="<?php the_field('works_example', get_the_ID()) ?>" alt="1img">
              <div class="work-hover">
                <h5><?php the_field('hover_text', get_the_ID()) ?></h5>
                <h6><?php the_field('hover_subtext', get_the_ID()) ?></h6>
              </div>
            </div>
            <?php endwhile; endif; ?>
          </li>
<!-- ciklos pabaiga-->
        </ul>
      </div>
</section>
