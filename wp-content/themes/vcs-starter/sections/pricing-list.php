
<?php
  $pricelistQuery = new WP_Query( array (
    'post_type'        => 'kainorastis',
    'order'            => 'ASC'
));
  ?>

<section class="pricing-list" id="pricing-list">
  <div class="container">
    <div class="title-fix-set">
      <h2><?php the_field('pricing_head_text', 88) ?></h2>
      <p><?php the_field('sector_head_subtext', 88) ?></p>
      <div class="title-text-underline"></div>
    </div>
    <div>
      <ul class="price-list-container">
<!--ciklas prasideda-->
        <?php
          if ($pricelistQuery->have_posts ()):
            while ($pricelistQuery->have_posts()) :
              $pricelistQuery->the_post();
              ?>
        <li>
            <?php if($pricelistQuery->current_post == 1) : ?>
                <div class="empty-table"></div>
            <?php endif; ?>
            <div class="prs-div-head">
            <h2 <?php if($pricelistQuery->current_post == 1) { echo "class='empty-subtable'";} ?> ><?php the_field('pack_name', get_the_ID()) ?></h2>
            <h5><?php the_field('pack_price', get_the_ID()) ?></h5>
            <h6><?php the_field('period', get_the_ID()) ?></h6>
          </div>
          <div class="prs-div-bottom">
            <div class="prs-div-text">
              <p><?php the_field('content_text', get_the_ID()) ?></p>
            </div>
            <div class="order-button">
              <button type="button" class="order-btn"><?php the_field('order_button_text', get_the_ID()) ?></button>
            </div>
          </div>
        <?php endwhile; endif; ?>
<!--ciklas baigiasi-->
        </li>
      </ul>
    </div>
  </div>
</section>
