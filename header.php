<?php
  const SITE_TITLE = 'site name here';
  const SITE_DESCRIPTION = 'site description here';
  const IMAGE_DIR = './assets/images/';
  $has_page_title = defined('PAGE_TITLE');
  $meta_title = $has_page_title ? SITE_TITLE.' | '.PAGE_TITLE : SITE_TITLE;
  $meta_description = defined('PAGE_DESCRIPTION') ? PAGE_DESCRIPTION : SITE_DESCRIPTION.($has_page_title ? PAGE_TITLE.'のページです。' : '');
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $meta_title ?></title>
  <meta name="description" content="<?= $meta_description; ?>">
  <meta name="format-detection" content="telephone=no">

  <meta property="og:locale" content="ja_JP">
  <meta property="og:title" content="<?= $meta_title ?>">
  <meta property="og:description" content="<?= $meta_description ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="ogp.png">
  <meta property="og:site_name" content="<?= SITE_TITLE ?>">

  <link rel="stylesheet" href="./style.css">
</head>

<body>

<header class="header">
  <p class="header-logo">
    <img src="<?= IMAGE_DIR ?>/logo.svg" alt="<?= SITE_TITLE ?>" class="header-logo-image">
  </p>

  <?php
    $header_nav_pages = [
      [
        'label' => 'Business',
        'url' => './business',
      ],
      [
        'label' => 'Company',
        'url' => './company',
      ],
      [
        'label' => 'Recruitment',
        'url' => './recruitment',
      ],
      [
        'label' => 'news',
        'url' => './news',
      ],
      [
        'label' => 'contact',
        'url' => './contact',
      ],
    ];
  ?>
  <nav class="header-nav">
    <ul class="header-nav-items">
      <?php foreach($header_nav_pages as $page): ?>
      <li class="header-nav-item">
        <a href="<?= $page['url'] ?>" class="header-nav-item-link">
          <?= $page['label'] ?>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</header>
