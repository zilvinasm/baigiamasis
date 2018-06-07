<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
  <title><?php the_field('page_title_name', 88) ?></title>
<?php wp_head(); ?>
</head>
<body>
<header style="background: linear-gradient( rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7) ), url('<?php the_field('header_foto', 88) ?>');">
  <div class="container">
    <div class="logo-container">
      <div class="logo">
        <p><?php the_field('logo_text', 88) ?></p>
      </div>
      <nav class="logo-container logo-nav">
        <p><?php the_field('menu_text', 88) ?></p>
        <div class="dropdown">
          <ul>
            <li>
              <a> <?php the_field('menu_icon', 88) ?></a>
              <?php
                wp_nav_menu( array(
                  'menu'            => 'header-menu',
                  'container_class' => 'dropdown',
                ));
                ?>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="title">
      <h2><?php the_field('head_title', 88) ?></h2>
    </div>
    <div class="title-text">
      <p><?php the_field('head_title_text', 88) ?></p>
      <p><?php the_field('head_title_subtext', 88) ?></p>
    </div>
    <div class="head-box">
      <a  href='#contacts'> <p><?php the_field('head_button_text', 88) ?></p></a>
    </div>
    <div class="button-circle">
      <p><?php the_field('head_button_icon', 88) ?></p>
    </div>
    <div class="line-down"></div>
  </div>
</header>
<main>
