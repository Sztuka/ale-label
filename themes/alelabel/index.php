<?php

get_header();?>

<div class="container-fluid page-banner mb-5" style="background-image: url('<?php the_field('your_custom_field_name'); ?>');">
  <div class="container">
    <h1>Twoja Muzyczna Inspiracja</h1>
    <h2>Gdzie marzenia stają się dźwiękiem</h2>
    <div class='btn-holder'>
      <a href="YOUR_LINK_HERE" class="btn btn-3 hover-border-2">
        <span>Skontaktuj się</span>
      </a>
    </div>
  </div>
</div>
<!-- Nasi Artyści Section -->
<div class="container mb-5 py-5">
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
<div class="container mb-5 py-5">
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
<div class="container mb-5 py-5">
  <h3>O Nas</h3>
  <div class="row mb-5">
    <?php
    // Get the ID of the 'About Us' page (replace 'about-us' with the slug of your About Us page)
    $about_us_id = get_page_by_path('about-us')->ID;

    // Loop through each owner
    for ($i = 1; $i <= 3; $i++) {
      $owner = get_field("owner-{$i}", $about_us_id);
      $owner_name = $owner['name'];
      $owner_avatar = $owner['avatar'];
      $owner_bio = $owner['bio'];
      $owner_email_link = $owner['e-mail'];
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
    ?>
  </div>
</div>

<!-- Spotify Section -->
<div class="container-fluid mb-5 py-5 main-gradient">
  <div class="container">
    <div class="row mx-auto justify-content-center">
      <div class="col-4 spotify-description ">
        <h3>To zrobiliśmy</h3>
        <p>W trakcie naszej kariery maczaliśmy palce w niejednym artyście i hicie. Playlista z tych kolaboiracji jest dostępna na spotify.</p>
        <div class='btn-holder'>
          <a href="https://open.spotify.com/playlist/51i961xk6gBVoTuoFzKglS?si=0ab0237d31e54de2" class="btn btn-3 hover-border-2">
            <span>Posłuchaj całości</span>
          </a>
        </div>
      </div>
      <div class="col-4 spotify-playlist">
        <iframe src="https://open.spotify.com/embed/playlist/51i961xk6gBVoTuoFzKglS?utm_source=generator&theme=0" width="100%" height="380" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
      </div>
    </div>
  </div>
</div>


<!-- Współpraca Section -->
<div class="container mb-5 py-5">
  <h3>Współpraca</h3>
  <div class="row mb-5">
    <?php
    for ($i = 1; $i <= 4; $i++) { // Assuming you have 4 services
        $service_title = get_field("service{$i}_title");
        $service_description = get_field("service{$i}_description");
    ?>
    <div class="col-lg-4 col-md-6 col-sm-12 mb-5 pb-3">
      <div class="owner-card shadow-lg">
        <div class="owner-bio">
          <div class="owner-name">
            <h4>123 <?php echo esc_html($service_title); ?></h4>
          </div>
          <p>sd fWEF WE WE F<?php echo esc_html($service_description); ?></p>
        </div>
        <div class='btn-holder mb-5'>
          <a href="" class="btn btn-dark-3 dark-hover-border-2">
            <span>Kontakt</span>
          </a>
        </div>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</div>





<?php get_footer();

?>