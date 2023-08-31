<?php

get_header();

$contact_email = get_field('contact_email');
?>


<div id="home" class="container-fluid page-banner mb-5">
    <div class="parallax-image" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>
    <div class="container banner-content mb-5">
        <h1><?php the_field('h1'); ?></h1>
        <h2><?php the_field('h2'); ?></h2>
        <div class='btn-holder'>
            <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="btn btn-3 hover-border-2">
                <span>Skontaktuj się</span>
            </a>
        </div>
    </div>
</div>


<!-- Nasi Artyści Section -->
<div  id="artists" class="container mb-5 py-5">
  <h3>Nasi_Artyści</h3>  
  <div class="row shadow-lg mb-5">
    <?php 
    $args = array(
        'post_type' => 'artist',
        'posts_per_page' => -1
    );
    $artist_query = new WP_Query($args);
    while($artist_query->have_posts()) : $artist_query->the_post();
    ?>
    <div class="col-lg-3 col-md-6 col-sm-12 padding-0">
      <a href="<?php the_permalink(); ?>" class="artist-card">
        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
        <div class="artist-name">
          <h4><?php the_title(); ?></h4>
        </div>
      </a>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>   
  <div class="row ">
    <div class='btn-holder mx-auto'>
      <a href="YOUR_LINK_HERE" class="btn btn-dark-3 dark-hover-border-2 mx-auto">
        <span>Skontaktuj się</span>
      </a>
    </div>
  </div>   
</div>
  
<!-- Nowości Section -->
<div id="news" class="container mb-5 py-5">
  <h3>Nowości</h3>  
  <div class="row mb-5 news-section">
    <?php 
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2
    );
    $news_query = new WP_Query($args);
    $post_count = 0;
    while($news_query->have_posts()) : $news_query->the_post(); $post_count++; ?>
    
    <div class="col-lg-12 news-item shadow-lg <?php echo ($post_count == 2) ? 'inverted' : ''; ?>">
      <div class="news-image">
      <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
      </div>
      <div class="news-content">
        <h4><?php the_title(); ?></h4>
        <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-3 hover-border-2">
          <span>Czytaj więcej</span>
        </a>
      </div>
      <div class="pink-line"></div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
  <div class="row">
    <div class='btn-holder mx-auto'>
      <a href="YOUR_LINK_HERE" class="btn btn-dark-3 dark-hover-border-2 mx-auto">
        <span>Więcej nowości</span>
      </a>
    </div>
  </div>   
</div>

<!-- O Nas Section -->
<div id="about" class="container mb-5 py-5">
  <h3>O Nas</h3>
  <div class="row mb-5">
    <?php
    // Loop through each owner
    for ($i = 1; $i <= 3; $i++) {
      $owner = get_field("owner-{$i}");
      if ($owner) { // Check if owner exists
        $owner_name = $owner['name'];
        $owner_avatar = $owner['avatar'];
        $owner_bio = $owner['bio'];
        $owner_email_link = "mailto:" . $owner['e-mail'];
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
      <div class="owner-card shadow-lg">
        <div class="owner-avatar">          
          <img src="<?php echo esc_url($owner_avatar); ?>" alt="<?php echo esc_attr($owner_name); ?>" class="img-fluid">
        </div>
        <div class="owner-bio">
          <div class="owner-name">
            <h4><?php echo esc_html($owner_name); ?></h4>
          </div>
          <p><?php echo esc_html($owner_bio); ?></p>
        </div>
        <div class='btn-holder mb-5'>
          <a href="<?php echo esc_url($owner_email_link); ?>" class="btn btn-dark-3 dark-hover-border-2">
            <span>Kontakt</span>
          </a>
        </div>
      </div>
    </div>
    <?php
      }
    }
    ?>
  </div>
</div>

<!-- Spotify Section -->
<div id="playlist" class="container-fluid mb-5 py-5 main-gradient">
  <div class="container py-5">
    <div class="row mx-auto justify-content-center">
      <div class="col-lg-4 col-md-12 spotify-description ">
        <h3>To zrobiliśmy</h3>
        <p>W trakcie naszej kariery maczaliśmy palce w niejednym artyście i hicie. Playlista z tych kolaboiracji jest dostępna na spotify.</p>
        <div class='btn-holder'>
          <a href="https://open.spotify.com/playlist/51i961xk6gBVoTuoFzKglS?si=0ab0237d31e54de2" class="btn btn-3 hover-border-2">
            <span>Posłuchaj całości</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 spotify-playlist">
        <iframe src="https://open.spotify.com/embed/playlist/51i961xk6gBVoTuoFzKglS?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
      </div>
    </div>
  </div>
</div>


<!-- Współpraca Section -->
<div id="services" class="container mb-5 py-5">
  <h3>Współpraca</h3>
  <div class="row mb-5">
    <?php
    for ($i = 1; $i <= 4; $i++) { // Assuming you have 4 services
        $service_title = get_field("service{$i}_title");
        $service_description = get_field("service{$i}_description");
        if ($service_title && $service_description) { // Check if service exists
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-5 service-card">
      <div class="owner-card shadow-lg">
        <div class="owner-bio">
          <div class="owner-name">
            <h4><?php echo esc_html($service_title); ?></h4>
          </div>
          <p><?php echo esc_html($service_description); ?></p>
        </div>
        <div class='btn-holder mb-5'>
          <a href="mailto:<?php echo esc_attr($contact_email); ?>" class="btn btn-dark-3 dark-hover-border-2">
            <span>Kontakt</span>
          </a>
        </div>
      </div>
    </div>
    <?php
        }
    }
    ?>
  </div>
</div>


<!-- Our partners Section -->
<div  id="partners" class="container-fluid mb-5 py-0 black-gradient px-0">
  <div class="container-fluid py-5 partners bg-white">
    <div class="container">
      <h3 class="partners">Nasi_partnerzy</h3>
      <div class="row py-3">
        <?php 
        $partner1 = get_field('partner_1');
        $partner2 = get_field('partner_2');
        $partner3 = get_field('partner_3');
        $partner4 = get_field('partner_4');
        ?>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 partner-col">
          <img src="<?php echo esc_url($partner1); ?>" alt="Partner 1 Logo" class="partner-logo" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 partner-col">
          <img src="<?php echo esc_url($partner2); ?>" alt="Partner 2 Logo" class="partner-logo" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 partner-col">
          <img src="<?php echo esc_url($partner3); ?>" alt="Partner 3 Logo" class="partner-logo" />
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 partner-col">
          <img src="<?php echo esc_url($partner4); ?>" alt="Partner 4 Logo" class="partner-logo" />
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Leave a demo Section -->
<div  id="demo" class="container mb-5 py-5">
  <h3>Zostaw_swoje_demo</h3>  
  <div class="row mb-5 news-section">    
    <div class="col-lg-12 news-item shadow-lg">
      <div class="news-image">
        <?php 
        $demo_image = get_field('demo_image');
        if($demo_image): ?>
            <img src="<?php echo esc_url($demo_image); ?>" alt="Demo Image" />
        <?php endif; ?>
      </div>
      <div class="news-content">
        <h4><?php the_field('demo_title'); ?></h4>
        <p><?php the_field('demo_description'); ?></p>
        <a href="#" class="btn btn-3 hover-border-2" data-toggle="modal" data-target="#demoFormModal">
          <span>Zostaw demo</span>
        </a>
      </div>
      <div class="pink-line"></div>
    </div>
  </div>  
</div>

<!-- Modal -->
<div class="modal fade" id="demoFormModal" tabindex="-1" role="dialog" aria-labelledby="demoFormModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="demoFormModalLabel">Leave Your Demo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Your form goes here. You can use a plugin like Contact Form 7 or Gravity Forms to create the form and then place the shortcode here. -->
        <?php echo do_shortcode('[contact-form-7 id="50277e4" title="Leave a Demo"]'); ?>
      </div>
    </div>
  </div>
</div>

<!-- Instagram Section -->
<div class="container-fluid">
  <div class="row">
    <div class="col-12 p-0">
      <div id="instagram-section" class="text-center">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
