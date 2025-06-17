<?php
/**
 * Template Name: Contact Page Template
 * Description: A custom home page template with ACF fields.
 */
get_header();
  $clients_title      = get_field('clients_section_heading');
  $clients_subheading = get_field('clients_section_subheading');
?>



<section class="py-5">
  <div class="container">
    <div class="card bg-white shadow-sm rounded overflow-hidden border-0">
      <div class="row g-0">

        <div class="col-12 col-md-6 p-5 d-flex flex-column justify-content-center">
        <img src="http://brontedogs.local/wp-content/uploads/2025/06/Group-contact.png" alt="Happy dog"  class="img-contact"/>

          <h2 class="fw-bold mb-2 custom-h2">Man’s best friend <br> deserves love 24/7.</h2>

          <p class="text-muted mb-0 custom-paragraph">
            Lorem duis minim ex non irure dolore exercitation aute ex commodo consectetur est et officia est. Lorem consectetur cupidatat elit ex nisi dolor quis est Lorem. Dquat sunt do. Enim aute voluptate voluptate veniam ut.
          </p>
        </div>

        <div class="col-12 col-md-6 p-5">
          <?php echo do_shortcode('[contact-form-7 id="0e9807c" title="Contact Form DOGS"]'); ?>
        </div>

      </div>
    </div>
  </div>
</section>


<?php 
  $banner = get_field('banner_image');

  if( $banner && is_array($banner) ):
    $url = esc_url( $banner['url'] );
    $alt = esc_attr( $banner['alt'] );
?>
  <div 
    class="banner-section mb-5"
    style="background: url('<?php echo $url; ?>') center center no-repeat;background-size: cover;height: 450px;"role="img"
    aria-label="<?php echo $alt; ?>"
  ></div>
<?php 
  endif;
?>
<section class="clients-intro bg-white py-5">
  <div class="container ">
   <div class=" mb-5">
      <?php if ($clients_title): ?>
      <h2 class="fw-bold mb-3"><?php echo esc_html($clients_title); ?></h2>
    <?php endif; ?>
    <?php if ($clients_subheading): ?>
      <p class="text-muted mb-0"><?php echo esc_html($clients_subheading); ?></p>
    <?php endif; ?>
    </div>
    </section>

    <!-- Carousel -->
  <section class="clients-intro bg-white ">
  <div class="container">
    <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
      <div class="carousel-inner">
        <!-- Slide 1:  -->
        <div class="carousel-item active">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★★</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">I was so nervous about leaving my golden retriever Murphy at daycare for the first time, but Bronte Dogs completely exceeded my expectations.</p>
                  <p class="fw-bold mb-0 small">- Jennifer W.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★☆</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    After six months, I can honestly say this place has transformed both Murphy's confidence and my peace of mind. I wouldn't trust anyone else with my best friend. I was so nervous...
                  </p>
                  <p class="fw-bold mb-0 small">- Farida C.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★★</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    After six months, I can honestly say this place has transformed both Murphy's confidence and my peace of mind. I wouldn't trust anyone else with my best friend. I was so nervous...
                  </p>
                  <p class="fw-bold mb-0 small">– Farida C.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★☆</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                   Murphy used to have separation anxiety, but now he gets excited when we pull into the parking lot! The facility is spotless, the play groups are well-supervised, and I love that they have both indoor and outdoor spaces.
                  </p>
                  <p class="fw-bold mb-0 small">– Jennifer W.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2:  -->
        <div class="carousel-item">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★★</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    The play area is amazing, and the staff treat every pup like family!
                  </p>
                  <p class="fw-bold mb-0 small">– Alex P.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★☆</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    We love the webcams—can check in on our pup any time. Great peace of mind!
                  </p>
                  <p class="fw-bold mb-0 small">– Maria S.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★★</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    Highly recommend! They handle special diet needs and give daily updates.
                  </p>
                  <p class="fw-bold mb-0 small">– Sam K.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★☆</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">
                    Fantastic grooming services too—our dog looks brand new every time!
                  </p>
                  <p class="fw-bold mb-0 small">– Jordan L.</p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#clientsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Prev</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#clientsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <!-- Indicators -->
      <div class="carousel-indicators mt-3">
        <button type="button" data-bs-target="#clientsCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#clientsCarousel" data-bs-slide-to="1"></button>
      </div>
    </div>
  </div>
</section>


<section class="perfect-day-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-lg-5 mb-4 mb-lg-0">
       <?php if( $title ): ?>
  <h2 class="fw-bold">
    <?php 
      echo wp_kses_post(
        str_replace(
          'Perfect Day',
          '<span class="perfect-highlight">Perfect Day</span>',
          esc_html( $title )
        )
      );
    ?>
  </h2>
<?php endif; ?>

        <?php if($description): ?>
          <p class="text-muted"><?php echo wp_kses_post($description); ?></p>
        <?php endif; ?>

        <?php if($price_full || $price_half): ?>
          <p class="fw-bold">
            <?php if($price_full): ?>
              Full Day: <span class="text-success custom-price"><?php echo esc_html($price_full); ?></span>
            <?php endif; ?>
            <?php if($price_half): ?>
              <?php if($price_full): ?> | <?php endif; ?>
              Half Day: <span class="text-success custom-price"><?php echo esc_html($price_half); ?></span>
            <?php endif; ?>
          </p>
        <?php endif; ?>

        <?php if($btn_text && $btn_url): ?>
          <a href="<?php echo esc_url($btn_url); ?>" class="btn btn-success custom-btn-color mb-4">
            <?php echo esc_html($btn_text); ?>
          </a>
        <?php endif; ?>

      
      </div>

      <div class="col-12 col-lg-7">
        <?php if($features): ?>
          <div class="row gy-4">
            <?php foreach($features as $feature): 
              $icon = $feature['feature_icon'];
              $ft   = $feature['feature_title'];
              $txt  = $feature['feature_text'];
            ?>
              <div class="col-12 col-md-6 d-flex">
                <div class="me-3">
                  <?php if($icon): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" 
                         alt="<?php echo esc_attr($ft); ?>" width="40">
                  <?php endif; ?>
                </div>
                <div>
                  <?php if($ft): ?>
                    <h5 class="mb-1"><?php echo esc_html($ft); ?></h5>
                  <?php endif; ?>
                  <?php if($txt): ?>
                    <p class="mb-0 text-muted small"><?php echo wp_kses_post($txt); ?></p>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>