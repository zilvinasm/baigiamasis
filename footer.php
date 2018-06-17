</main>
<footer class="footer">
  <div class="container">
      <div class="footer-logo">
        <div>
          <ul class="part1">
            <li><h3><?php the_field('footer_logo', 88) ?></h3></li>
            <li><h2><?php the_field('footer_copyright', 88) ?></h2></li>
          <ul/>
        </div>
        <div>
          <ul class="part2">
            <li><p><?php the_field('footer_text', 88) ?></p></li>
            <li>
              <ul class="footer-logo-nav">
                 <li><a href="##"<?php the_field('f_icons_twitter', 88) ?></a></li>
                 <li><a href="##"<?php the_field('f_icon_facebook', 88) ?></a></li>
                 <li><a href="##"<?php the_field('f_icon_google', 88) ?></a></li>
                 <li><a href="##"<?php the_field('f_i_map', 88) ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
  </div>
</footer>

 <?php wp_footer(); ?>

</body>
</html>
