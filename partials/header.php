<?php

$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_dir = basename(dirname($_SERVER['PHP_SELF']));

function isActive($page, $current_page, $current_dir = '') {
    if ($current_dir === 'legal' && $page === 'legal') {
        return true;
    }
    return $page === $current_page;
}

$site_name = "Vazirlo";
$site_description = "Повышение продаж через веб-аналитику";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title><?php echo isset($page_title) ? $page_title . ' | ' . $site_name : $site_name . ' | ' . $site_description; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональные услуги веб-аналитики для увеличения конверсии и продаж. Аудит, настройка отслеживания, дашборды и A/B тестирование.'; ?>">
    <meta name="keywords" content="веб-аналитика, Google Analytics, конверсия, A/B тестирование, дашборды, отслеживание, электронная торговля, Vazirlo">
    <meta name="author" content="<?php echo $site_name; ?>">
    <meta name="robots" content="index, follow">
    
    <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : $site_name; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональные услуги веб-аналитики для увеличения конверсии и продаж'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <meta property="og:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>assets/img/dashboard-hero.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="ru_RU">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : $site_name; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональные услуги веб-аналитики для увеличения конверсии и продаж'; ?>">
    <meta name="twitter:image" content="<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>assets/img/dashboard-hero.jpg">
    
    <link rel="icon" type="image/png" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/img/favicon.png">
    <link rel="shortcut icon" type="image/png" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/img/favicon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">
    
    <link rel="stylesheet" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/css/styles.css">
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "<?php echo $site_name; ?>",
        "description": "<?php echo $site_description; ?>",
        "url": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>",
        "logo": "<?php echo 'https://' . $_SERVER['HTTP_HOST']; ?>assets/img/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+421940327781",
            "contactType": "customer service",
            "availableLanguage": ["Russian", "Slovak", "English"]
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Karadžičova 8",
            "addressLocality": "Bratislava",
            "postalCode": "821 08",
            "addressCountry": "SK"
        },
        "openingHours": "Mo-Fr 09:00-18:00",
        "sameAs": []
    }
    </script>
    
    <link rel="preload" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/css/styles.css" as="style">
    <link rel="preload" href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/js/main.js" as="script">
    
    <?php if (isset($additional_head)): ?>
        <?php echo $additional_head; ?>
    <?php endif; ?>
</head>
<body>
    
    
    <header class="header" role="banner">
        <div class="container">
            <div class="header__container">
                <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>index.php" class="logo-text" aria-label="Vazirlo - Главная страница">
                    Vazirlo
                </a>
                
                <nav class="nav" id="navigation" role="navigation" aria-label="Основная навигация">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>index.php" 
                               class="nav__link <?php echo isActive('index', $current_page) ? 'active' : ''; ?>"
                               <?php echo isActive('index', $current_page) ? 'aria-current="page"' : ''; ?>>
                                Главная
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>about.php" 
                               class="nav__link <?php echo isActive('about', $current_page) ? 'active' : ''; ?>"
                               <?php echo isActive('about', $current_page) ? 'aria-current="page"' : ''; ?>>
                                О нас
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php" 
                               class="nav__link <?php echo isActive('services', $current_page) ? 'active' : ''; ?>"
                               <?php echo isActive('services', $current_page) ? 'aria-current="page"' : ''; ?>>
                                Услуги
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>contacts.php" 
                               class="nav__link <?php echo isActive('contacts', $current_page) ? 'active' : ''; ?>"
                               <?php echo isActive('contacts', $current_page) ? 'aria-current="page"' : ''; ?>>
                                Контакты
                            </a>
                        </li>
                    </ul>
                </nav>
                
                <a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>index.php" class="logo-image" aria-label="Vazirlo - Главная страница">
                    <img src="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/img/logo.webp" alt="Vazirlo логотип" width="40" height="40">
                </a>
                
                <button class="burger" aria-label="Открыть меню" aria-expanded="false" aria-controls="navigation">
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                    <span class="burger__line"></span>
                </button>
            </div>
        </div>
    </header>
    
    <main id="main-content" class="main" role="main">