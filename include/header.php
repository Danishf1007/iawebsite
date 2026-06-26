<?php
  $premature    = ob_get_clean() ?: '';
  $currentPage  = basename($_SERVER['PHP_SELF']);
  $basePath     = $basePath ?? '';
  // Per-page SEO — individual pages may define these before including this file
  $pageTitle    = $pageTitle    ?? 'IA SoftTech Sdn Bhd';
  $pageDesc     = $pageDesc     ?? 'IA SoftTech Sdn Bhd is a leading IT solutions provider in Malaysia specialising in system integration, managed services, cybersecurity, cloud computing and software development for enterprises and government.';
  $pageKeywords = $pageKeywords ?? 'IT solutions Malaysia, system integration, managed services, cybersecurity, cloud computing, government IT, software development';
  $pageOGImage  = $pageOGImage  ?? ($basePath . 'images/hero7.jpg');
  $proto        = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host         = htmlspecialchars($_SERVER['HTTP_HOST'] ?? 'iasofttech.com.my');
  $ogImageAbs   = (strpos($pageOGImage, 'http') === 0) ? $pageOGImage : $proto . '://' . $host . '/' . ltrim($pageOGImage, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
  <meta name="robots" content="index, follow">
  <meta name="author" content="IA SoftTech Sdn Bhd">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:image" content="<?= htmlspecialchars($ogImageAbs) ?>">
  <meta property="og:site_name" content="IA SoftTech Sdn Bhd">
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="twitter:image" content="<?= htmlspecialchars($ogImageAbs) ?>">
  <link rel="icon" type="image/png" href="<?= $basePath ?>images/logo.png?v=5">
  <link rel="apple-touch-icon" href="<?= $basePath ?>images/logo.png?v=5">
  <link rel="stylesheet" href="<?= $basePath ?>asset/style.css?v=4.1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<?php echo $premature; ?>
<header id="site-header" class="<?= $currentPage !== 'index.php' ? 'header--solid' : '' ?>">
  <div class="header-inner">
    <a href="<?= $basePath ?>index.php" class="logo-link">
      <img src="<?= $basePath ?>images/logo8.png" alt="IA SoftTech Logo" class="logo" />
    </a>
    <button class="hamburger" id="hamburger-toggle" aria-label="Toggle navigation menu" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>
    <nav id="main-nav">
      <ul class="navbar">
        <li>
          <a href="<?= $basePath ?>index.php" class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">HOME</a>
        </li>
        <li>
          <a href="<?= $basePath ?>about_us.php" class="<?= $currentPage == 'about_us.php' ? 'active' : '' ?>">ABOUT</a>
        </li>
        <li>
          <a href="<?= $basePath ?>product.php" class="<?= $currentPage == 'product.php' ? 'active' : '' ?>">PRODUCTS</a>
        </li>
        <li>
          <a href="<?= $basePath ?>directory.php" class="<?= $currentPage == 'directory.php' ? 'active' : '' ?>">DIRECTORY</a>
        </li>
        <li>
          <a href="<?= $basePath ?>partners.php" class="<?= $currentPage == 'partners.php' ? 'active' : '' ?>">PARTNERS</a>
        </li>
        <li>
          <a href="<?= $basePath ?>career.php" class="<?= $currentPage == 'career.php' ? 'active' : '' ?>">CAREER</a>
        </li>
        <li>
          <a href="<?= $basePath ?>gallery.php" class="<?= $currentPage == 'gallery.php' ? 'active' : '' ?>">GALLERY</a>
        </li>
        <li class="nav-cta">
          <a href="<?= $basePath ?>contact.php" class="<?= $currentPage == 'contact.php' ? 'active' : '' ?>">CONTACT</a>
        </li>
      </ul>
    </nav>
  </div>
</header>


