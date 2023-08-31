<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset=<?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#navbarNav">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <?php 
            $logo = get_field('logo'); // Assuming 'logo' is the name of your custom field
            if($logo): ?>
                <img src="<?php echo esc_url($logo); ?>" alt="Your Logo" class="logo">
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#artists">Nasi Artyści</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#news">Nowości</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">O Nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#playlist">Spotify</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Współpraca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#partners">Nasi Partnerzy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#demo">Zostaw Demo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

    


