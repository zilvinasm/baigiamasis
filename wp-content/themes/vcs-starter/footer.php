</main>
<footer class="footer">
  <div class="container">
     <div class="footer-logo">
         <div><h3><?php the_field('footer_logo', 88) ?></h3></div>
         <div><h2><?php the_field('footer_copyright', 88) ?></h2></div>
         <div><p><?php the_field('footer_text', 88) ?></p></div>
         <div>
           <nav class="footer-logo-nav">
             <li>
                 <a href="##"<?php the_field('f_icons_twitter', 88) ?></a>
                 <a href="##"<?php the_field('f_icon_facebook', 88) ?></a>
                 <a href="##"<?php the_field('f_icon_google', 88) ?></a>
                 <a href="##"<?php the_field('f_i_map', 88) ?></a>
             </li>
           </nav>
         </div>
       </div>
  </div>
</footer>

 <?php wp_footer(); ?>

</body>
</html>
