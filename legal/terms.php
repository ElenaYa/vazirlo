<?php

$page_title = "Условия использования";
$page_description = "Условия использования Vazirlo — правила и условия посещения и использования сайта vazirlo.com.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Условия использования', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/legal/terms.php']
];

include '../partials/header.php';
?>

<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Условия использования</h1>
            <p class="hero__subtitle">
                Правила и условия использования сайта Vazirlo
            </p>
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                Информация актуальна на <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;" class="fade-in">
            <h2>Условия использования сайта vazirlo.com</h2>
            <div class="card" style="margin-top: var(--space-lg);">
                <div class="card__content">
                    <h3>1. Общие положения</h3>
                    <p>
                        Настоящие Условия использования (далее — «Условия») регулируют доступ и использование сайта
                        vazirlo.com (далее — «Сайт»), принадлежащего Vazirlo. Посещая Сайт, вы подтверждаете согласие
                        с Условиями. Если вы не согласны с ними, пожалуйста, покиньте Сайт.
                    </p>

                    <h3>2. Предоставляемые услуги</h3>
                    <p>Мы предоставляем услуги в области веб-аналитики и роста конверсий, включая:</p>
                    <ul>
                        <li>Аудит аналитики (GA4, GTM, качество данных, атрибуция)</li>
                        <li>Настройка отслеживания (GA4, GTM, Enhanced/Custom Ecommerce, Consent Mode, server-side)</li>
                        <li>Дашборды и отчёты (Looker Studio/Power BI/Tableau)</li>
                        <li>A/B тестирование и оптимизация конверсии</li>
                        <li>Консультации и обучение</li>
                        <li>Комплексные проекты «под ключ»</li>
                    </ul>
                    <p>
                        Содержание и объём конкретных работ фиксируются в коммерческом предложении/Scope of Work (SOW)
                        и/или договоре с клиентом.
                    </p>

                    <h3>3. Информация на сайте и точность данных</h3>
                    <p>
                        Материалы на Сайте носят информационный характер и не являются публичной офертой. Мы стремимся
                        поддерживать актуальность контента, однако не гарантируем полную точность, полноту и
                        бесперебойную доступность Сайта.
                    </p>

                    <h3>4. Ответственность и ограничения</h3>
                    <ul>
                        <li>Сайт предоставляется «как есть» без каких‑либо гарантий.</li>
                        <li>Мы не несём ответственность за косвенные убытки, потерю прибыли, данные третьих лиц.</li>
                        <li>Ответственность в рамках конкретного проекта определяется условиями договора.</li>
                    </ul>

                    <h3>5. Конфиденциальность и Cookies</h3>
                    <p>
                        Обработка персональных данных регулируется нашей
                        <a href="/legal/privacy-gdpr.php" style="color: var(--primary);">Политикой конфиденциальности</a>.
                        Информация о файлах cookie — в разделе
                        <a href="/legal/cookies.php" style="color: var(--primary);">Cookies</a>.
                    </p>

                    <h3>6. Интеллектуальная собственность</h3>
                    <p>
                        Все материалы Сайта (тексты, графика, логотипы, дизайн, код) защищены правом интеллектуальной
                        собственности и не могут использоваться без письменного согласия правообладателя.
                    </p>

                    <h3>7. Условия сотрудничества и оплата</h3>
                    <ul>
                        <li>Стоимость и сроки определяются индивидуально и фиксируются в коммерческом предложении/договоре.</li>
                        <li>Оплата осуществляется на основании счета/инвойса, возможна предоплата.</li>
                        <li>Результаты работ и метрики зависят от множества факторов (трафик, продукт, маркетинг и т.д.).</li>
                    </ul>

                    <h3>8. Допустимое использование</h3>
                    <p>
                        Запрещено использовать Сайт с нарушением применимого законодательства, пытаться получить
                        несанкционированный доступ к разделам Сайта или его инфраструктуре, а также вмешиваться в работу
                        Сайта техническими средствами.
                    </p>

                    <h3>9. Изменения условий</h3>
                    <p>
                        Мы можем обновлять Условия время от времени. Актуальная дата обновления указана вверху страницы.
                        Продолжая пользоваться Сайтом после изменений, вы соглашаетесь с обновлённой редакцией.
                    </p>

                    <h3>10. Применимое право</h3>
                    <p>
                        К Условиям применяется право Словацкой Республики. Споры подлежат рассмотрению судами г. Братислава,
                        если иное не предусмотрено договором с клиентом.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Информация о компании</h2>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>Основные данные</h3>
                    <div style="margin-top: var(--space-md);">
                        <p><strong>Название компании:</strong><br>
                        Vazirlo s.r.o.</p>

                        <p><strong>Адрес:</strong><br>
                        Karadžičova 8, 821 08 Bratislava, Slovakia</p>

                        <p><strong>Email:</strong><br>
                        <a href="mailto:hello@vazirlo.com" style="color: var(--primary);">hello@vazirlo.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                                <div class="contact-icon" aria-hidden="true">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92V19a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 3 4.18 2 2 0 0 1 5 2h2.09a2 2 0 0 1 2 1.72c.12.86.33 1.7.63 2.5a2 2 0 0 1-.45 2.11L8.1 9.9a16 16 0 0 0 6 6l1.57-1.57a2 2 0 0 1 2.11-.45c.8.3 1.64.51 2.5.63A2 2 0 0 1 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Телефон:</strong><br>
                                    <a href="tel:+421940327781">+421 940 327 781</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                        <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Email:</strong><br>
                                     <a href="mailto:hello@vazirlo.com">hello@vazirlo.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon" aria-hidden="true">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                                        <path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div>
                                    <strong>Веб-сайт:</strong><br>
                                     <a href="https://vazirlo.com" target="_blank">vazirlo.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include '../partials/footer.php'; ?>