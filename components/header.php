<?php require_once __DIR__ . '/../core/lang.php'; ?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= t('gonpay_manage_your_loyalty_cards_easily') ?></title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'gonpay-orange': '#FF7A00',
            'gonpay-orange-dark': '#E56D00',
            'gonpay-dark': '#1A1A1A',
            'gonpay-gray': '#666666',
            'gonpay-light': '#F9F9F9',
            'gonpay-border': '#EEEEEE',
          },
        },
      },
    };
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" crossorigin="anonymous"/>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" rel="stylesheet" crossorigin="anonymous"/>

  <style>
    body { font-family: 'Poppins', sans-serif; }
    .ring-spin { animation: spin 20s linear infinite; }
    @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    .float { animation: floating 3s ease-in-out infinite; }
    @keyframes floating { 0% { transform: translateY(0); } 50% { transform: translateY(-10px); } 100% { transform: translateY(0); } }
    .testimonialSwiper { padding-bottom: 40px; }
    .testimonial-content { opacity: 0; transform: translateY(20px); transition: all 0.8s ease; }
    .swiper-slide-active .testimonial-content { opacity: 1; transform: translateY(0); }
    .swiper-pagination-bullet { width: 10px; height: 10px; background: #e2e8f0; opacity: 1; }
    .swiper-pagination-bullet-active { background: #ff6b00; transform: scale(1.2); }
  </style>
</head>

<body class="bg-white">
<header class="fixed top-0 left-0 right-0 bg-white z-50">
  <div class="container mx-auto px-4 py-4 flex items-center justify-between">
    <div class="flex items-center">
      <a href="index.php" class="mr-6 lg:mr-12">
        <img src="images/logo.png" alt="GoNpay Logo" class="h-8 lg:h-10">
      </a>
      <nav class="hidden lg:flex space-x-10">
        <a href="index.php" class="nav-link"><?= t('explore_loyalty') ?></a>
        <a href="company.php" class="nav-link"><?= t('about_us') ?></a>
      </nav>
      <a href="business.php" class="hidden md:block btn-orange bg-gonpay-orange text-white font-medium py-2.5 px-6 rounded-full ms-12"><?= t('for_business') ?></a>
    </div>

    <div class="flex items-center space-x-4">
      <!-- Language Dropdown -->
      <div class="hidden md:flex items-center space-x-1 cursor-pointer group relative">
        <div class="flex items-center space-x-2 py-2 px-3 rounded-lg hover:bg-gray-50">
          <img id="selected-lang-flag" src="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/flags/4x3/<?= $currentFlag ?>.svg" alt="<?= $lang ?>" class="w-6 h-4">
          <span id="selected-lang"><?= t($lang) ?></span>
          <svg class="h-4 w-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
          </svg>
        </div>

        <!-- Dropdown menu -->
        <div class="absolute top-full right-0 mt-1 bg-white border border-gray-100 rounded-lg shadow-lg py-2 hidden group-hover:block min-w-[138px]">
          <a href="?lang=en" class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-50"><img class="w-6 h-4" src="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/flags/4x3/gb.svg"><span><?= t('english') ?></span></a>
          <a href="?lang=lt" class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-50"><img class="w-6 h-4" src="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/flags/4x3/lt.svg"><span><?= t('lithuanian') ?></span></a>
          <a href="?lang=lv" class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-50"><img class="w-6 h-4" src="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/flags/4x3/lv.svg"><span><?= t('latvian') ?></span></a>
          <a href="?lang=ee" class="flex items-center space-x-2 px-4 py-2 hover:bg-gray-50"><img class="w-6 h-4" src="https://cdn.jsdelivr.net/npm/flag-icon-css@3.5.0/flags/4x3/ee.svg"><span><?= t('estonian') ?></span></a>
        </div>
      </div>

      <a href="login.php" class="hidden md:block login-link text-gonpay-orange font-semibold"><?= t('login_2') ?></a>
      <a href="register.php" class="hidden md:block btn-orange bg-gonpay-orange text-white font-medium py-2.5 px-6 rounded-full"><?= t('sign_up_3') ?></a>
      <button id="mobile-menu-button" class="lg:hidden text-gray-600"><svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg></button>
    </div>
  </div>
</header>

<!-- Your page content goes here -->

<script>
  // Mobile menu toggle if needed
  document.getElementById('mobile-menu-button')?.addEventListener('click', () => {
    const menu = document.getElementById('mobile-menu');
    menu?.classList.toggle('hidden');
  });
</script>
</body>
</html>
