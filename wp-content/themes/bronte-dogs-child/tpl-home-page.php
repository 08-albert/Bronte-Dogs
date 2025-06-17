<?php
/**
 * Template Name: Home Page Template
 * Description: A custom home page template with ACF fields.
 */
get_header(); ?>

<section class="home-hero py-5">
  <div class="container">
    <div class="row align-items-center">
      <?php
      // ACF Fields for Hero Section
      $title       = get_field('hero_heading');
      $description = get_field('hero_description');
      $btn_primary_text = get_field('hero_primary_button_text');
      $btn_primary_url  = get_field('hero_primary_button_url');
      $btn_secondary_text = get_field('hero_secondary_button_text');
      $btn_secondary_url  = get_field('hero_secondary_button_url');
      $hero_image       = get_field('hero_image');
      $clients_title      = get_field('clients_section_heading');
      $clients_subheading = get_field('clients_section_subheading');

      $title       = get_field('perfect_title');
      $description = get_field('perfect_description');
      $price_full  = get_field('price_full');
      $price_half  = get_field('price_half');
      $btn_text    = get_field('button_text');
      $btn_url     = get_field('button_url');
      $features    = get_field('features');

      ?>

      <!-- Left Column: Text & Buttons -->
      <div class="col-lg-6 mb-4 mb-lg-0">
     <?php
$title = get_field( 'hero_heading' ); // sau cum ai definit tu $title

$parts = explode( ' ', trim( $title ), 2 );
?>

<h1 class="display-4 fw-bold custom-font-size">
  <?php
    if ( ! empty( $parts[0] ) ) {
      echo '<span class="underline-yellow">' . esc_html( $parts[0] ) . '</span>';
    }
    if ( ! empty( $parts[1] ) ) {
      echo ' ' . esc_html( $parts[1] );
    }
  ?>
</h1>
         <div class="lead custom-description">
          <?php echo wp_kses_post($description); ?>
        </div>
        <div class="d-flex flex-wrap gap-3">
          <!-- Always output both buttons -->
          <a href="<?php echo esc_url($btn_primary_url); ?>" class="btn btn-success btn-lg">
            <?php echo esc_html($btn_primary_text); ?>
          </a>
          <a href="<?php echo esc_url($btn_secondary_url); ?>" class="btn btn-outline-success btn-lg">
            <?php echo esc_html($btn_secondary_text); ?>
          </a>
        </div>
      </div>

      <!-- Right Column: Image -->
      <div class="col-lg-6 text-center">
        <?php if ($hero_image): ?>
          <img src="<?php echo esc_url($hero_image['url']); ?>"
               alt="<?php echo esc_attr($hero_image['alt']); ?>"
               class="img-fluid rounded">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>


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

        <!-- Slide 1: -->
        <div class="carousel-item active">
          <div class="row g-3">
            <div class="col-12 col-md-6 col-lg-3">
              <div class="card h-100">
                <div class="card-body d-flex flex-column">
                  <div class="d-flex justify-content-between align-items-center mb-2">
                    <div><span class="text-warning fs-2">★★★★★</span></div>
                    <img src="http://brontedogs.local/wp-content/uploads/2025/06/image-4.png" alt="Google" width="16">
                  </div>
                  <p class="card-text flex-grow-1 small">Bella comes home exhausted and happy every day!</p>
                  <p class="fw-bold mb-0 small">– Rachel T.</p>
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
                    I was so nervous about leaving my golden retriever Murphy at daycare for the first time, but Bronte Dogs completely exceeded my expectations.
                  </p>
                  <p class="fw-bold mb-0 small">– Jennifer W.</p>
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

        <!-- Slide 2: -->
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

        <div class="mt-3">
          
        </div>
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