<?php
  $teamQuery = new WP_Query( array (
    'post_type'        => 'team',
    'order'            => 'ASC'
  ));
  ?>

<section class="team" id="team" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('<?php the_field('team_foto', 88) ?>');">
  <div class="container">
    <div class="title-fix-set">
      <h2><?php the_field('team_head_text', 88) ?></h2>
      <p><?php the_field('sector_head_subtext', 88) ?></p>
      <div class="title-text-underline"></div>
    </div>
    <div>
      <ul class="team-member-box">
<!-- ciklas prasideda-->
        <?php
          if ($teamQuery->have_posts ()):
            while ($teamQuery->have_posts()) :
              $teamQuery->the_post();
              ?>
          <li>
            <div class="hover-on-team-member">
              <img src="<?php the_field('member_foto', get_the_ID()) ?>" alt="ceo">
              <div class="member-hover">
                <h5><?php the_field('hover_text', get_the_ID()) ?></h5>
                <div class="title-text-underline"></div>
              </div>
            </div>
            <div>
               <h3><?php the_field('member_name', get_the_ID()) ?></h3>
               <p><?php the_field('job_title', get_the_ID()) ?></p>
              <nav class="member-contact-list">
                <li>
                  <a href="##"<?php the_field('contacts_twitter', get_the_ID()) ?></a>
                  <a href="##"<?php the_field('contacts_linkedin', get_the_ID()) ?></a>
                  <a href="##"<?php the_field('contacts_vimeo', get_the_ID()) ?></a>
                  <a href="##"<?php the_field('contacts_google', get_the_ID()) ?></a>
                  <a href="##"<?php the_field('contacts_mail', get_the_ID()) ?></a>
                </li>
              </nav>
            </div>
<!-- ciklas baigiasi-->
            <?php endwhile; endif; ?>
          </li>
      </ul>
    </div>
    <div class="team-box">
      <a href="##" ><p><?php the_field('team_sector_button', 88) ?></p></a>
    </div>
  </div>
</section>
