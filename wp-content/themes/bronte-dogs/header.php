<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <nav class="side-menu d-xl-none initial-opacity" style="transform: translateX(110%);">
        <div class="inner">
            <?php wp_nav_menu([
                'theme_location' => 'mobile-menu',
                'menu_class'     => 'menu menu-mobile',
                'container'      => '',
                'depth'          => 2,
            ]); ?>
        </div>
    </nav>

    <!-- Fixed header -->
<header class="fixed-top bg-white shadow-sm">
  <header class="fixed-top bg-white shadow-sm">
  <div class="container d-flex align-items-center py-3">
    
    <a class="navbar-brand" href="<?= esc_url( home_url('/') ); ?>">
      <img class="logo-header"
           src="<?= esc_url( 'http://brontedogs.local/wp-content/uploads/2025/06/Logo.png' ); ?>"
           alt="<?php bloginfo('name'); ?>" height="40">
    </a>

    <div class="d-flex align-items-center ms-auto gap-4">
      <!-- Meniu -->
      <?php
      wp_nav_menu([
        'theme_location' => 'header-menu',
        'container'      => '',
        // adăugăm flex direct pe ul
        'menu_class'     => 'd-flex align-items-center gap-4 menu-header',
        'depth'          => 1,
        'fallback_cb'    => false,
      ]);
      ?>
      <a href="http://brontedogs.local/contact/" class="btn btn-success btn-cta">
        Get in Touch
      </a>
    </div>

  </div>
</header>
</header>

    <main>
