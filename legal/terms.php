<?php
/* legal/imprint.php */

$page_title = "Импрессум";
$page_description = "Импрессум Vazirlo - юридическая информация о компании, регистрационные данные, контактная информация и ответственные лица.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Импрессум', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/legal/imprint.php']
];

include '../partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Импрессум</h1>
            <p class="hero__subtitle">
                Юридическая информация и сведения о компании Vazirlo
            </p>
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                Информация актуальна на <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </div>
</section>

<!-- Company Information -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Информация о компании</h2>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>Основные данные</h3>
                    <div class="grid grid--2" style="gap: var(--space-lg); margin-top: var(--space-md);">
                        <div>
                            <p><strong>Название компании:</strong><br>
                             Vazirlo s.r.o.</p>
                            
                            <p><strong>Юридический адрес:</strong><br>
                            Karadžičova 8<br>
                            821 08 Bratislava<br>
                            Словацкая Республика</p>
                            
                            <p><strong>Почтовый адрес:</strong><br>
                            Аналогичен юридическому адресу</p>
                        </div>
                        
                        <div>
                            <p><strong>Регистрационный номер:</strong><br>
                            53 876 549</p>
                            
                            <p><strong>Налоговый номер:</strong><br>
                            2121575439</p>
                            
                            <p><strong>НДС номер:</strong><br>
                            SK2121575439</p>
                            
                            <p><strong>Регистрационный суд:</strong><br>
                            Окружной суд Братислава I</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Контактная информация</h2>
            
            <div class="grid grid--2" style="gap: var(--space-lg);">
                <div class="card">
                    <div class="card__content">
                        <h3>Основные контакты</h3>
                        <div style="margin-top: var(--space-md);">
                            <div class="contact-item">
                                <div class="contact-icon">📞</div>
                                <div>
                                    <strong>Телефон:</strong><br>
                                    <a href="tel:+421940327781">+421 940 327 781</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">✉️</div>
                                <div>
                                    <strong>Email:</strong><br>
                                     <a href="mailto:hello@vazirlo.com">hello@vazirlo.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">🌐</div>
                                <div>
                                    <strong>Веб-сайт:</strong><br>
                                     <a href="https://vazirlo.com" target="_blank">vazirlo.com</a>
                                </div>
                            </div>
                        </div