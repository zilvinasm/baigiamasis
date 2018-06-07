<section class="contact" id="contacts">
    <div>
      <ul class="contact-box">
        <!--google map pradžia -->
        <li class="google-map">
          <?php
          $location = get_field('location', 88);
          if( !empty($location) ):
          ?>
          <div class="acf-map">
          	<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
          <?php endif; ?>
        </li>
        <!--google map pabaiga-->
        <li>
          <ul class="contact-set" style="background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php the_field('contact_foto', 88) ?>');">
            <!--kontaktų bloko pradžia-->
            <form>
              <div class="row-contact">
                <div class="col-25">
                  <label><?php the_field('contact_name', 88) ?></label>
                </div>
                <div class="col-75">
                  <input type="text" name="firstname">
                </div>
              </div>
              <div class="row-contact">
                <div class="col-25">
                  <label><?php the_field('contact_email', 88) ?></label>
                </div>
                <div class="col-75">
                  <input type="text" name="email">
                </div>
              </div>
              <div class="row-contact">
                <div class="col-25">
                  <label><?php the_field('contact_phone', 88) ?></label>
                </div>
                <div class="col-75">
                  <input type="text" name="phone">
                </div>
              </div>
              <div class="row-contact">
                <div class="col-25">
                  <label><?php the_field('contact_message', 88) ?></label>
                </div>
                <div class="col-75" style="height:145px">
                  <textarea name="message" style="height:145px"></textarea>
                </div>
              </div>
              <div class="row-contact submit">
                <input type="submit" value="Submit">
              </div>
            </form>
          </ul>
        </li>
      </ul>
    </div>
</section>
