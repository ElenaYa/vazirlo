<?php
/* partials/footer.php */
?>
    </main>
    
    <!-- Footer -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="footer__content">
                <!-- Company Info -->
                <div class="footer__section">
                    <div class="footer__brand">
                        <img src="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/img/logo.webp" alt="Vazirlo логотип" class="footer__logo">
                        <h4>Vazirlo</h4>
                    </div>
                    <p>Профессиональные услуги веб-аналитики для повышения эффективности вашего бизнеса.</p>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C12 22 19 15.5 19 10C19 6.13401 15.866 3 12 3C8.13401 3 5 6.13401 5 10C5 15.5 12 22 12 22Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Адрес:</strong><br>
                            <a href="https://maps.app.goo.gl/Q8Ha8i19Vg7XQZvW9" target="_blank">Karadžičova 8<br>
                            821 08 Bratislava, Slovakia</a>
                        </div>
                    </div>
                </div>
                
                <!-- Services -->
                <div class="footer__section">
                    <h4>Услуги</h4>
                    <ul class="footer__links">
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php#audit" class="footer__link">Аудит аналитики</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php#tracking" class="footer__link">Настройка отслеживания</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php#dashboards" class="footer__link">Дашборды и отчёты</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php#optimization" class="footer__link">A/B тестирование</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>services.php#consulting" class="footer__link">Консультации</a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div class="footer__section">
                    <h4>Компания</h4>
                    <ul class="footer__links">
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>about.php" class="footer__link">О нас</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>about.php#team" class="footer__link">Команда</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>about.php#approach" class="footer__link">Подход</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>about.php#certifications" class="footer__link">Сертификаты</a></li>
                        <li><a href="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>contacts.php" class="footer__link">Контакты</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div class="footer__section">
                    <h4>Контакты</h4>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92V19C22 19.5304 21.7893 20.0391 21.4142 20.4142C21.0391 20.7893 20.5304 21 20 21C15.221 21 10.683 19.157 7.51472 15.9887C4.34641 12.8203 2.5 8.279 2.5 3.5C2.5 2.96957 2.71071 2.46086 3.08579 2.08579C3.46086 1.71071 3.96957 1.5 4.5 1.5H6.58C6.82601 1.49978 7.06864 1.55867 7.28665 1.67033C7.50466 1.78198 7.69147 1.94253 7.83 2.14L9.62 4.69C9.7782 4.91951 9.86256 5.1947 9.86078 5.47622C9.85899 5.75774 9.77114 6.03196 9.61 6.26L8.21 8.26C9.29788 10.6406 11.3594 12.7021 13.74 13.79L15.74 12.39C15.968 12.2286 16.2429 12.1407 16.5241 12.139C16.8053 12.1373 17.0809 12.2218 17.31 12.38L19.86 14.17C20.0575 14.3091 20.2177 14.4955 20.3291 14.7137C20.4404 14.9319 20.4985 15.1751 20.5 15.42V16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Телефон:</strong><br>
                            <a href="tel:+421940327781" class="footer__link">+421 940 327 781</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 4H20C21.1046 4 22 4.89543 22 6V18C22 19.1046 21.1046 20 20 20H4C2.89543 20 2 19.1046 2 18V6C2 4.89543 2.89543 4 4 4Z" stroke="currentColor" stroke-width="2"/>
                                <path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:hello@vazirlo.com" class="footer__link">hello@vazirlo.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 7V12L15 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Часы работы:</strong><br>
                            Пн–Пт, 9:00–18:00 CET
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer__bottom">
                <div class="footer__copyright">
                    <p>&copy; <?php echo date('Y'); ?> Vazirlo. Все права защищены.</p>
                </div>
                
                <nav class="footer__legal" aria-label="Правовая информация">
                    <a href="<?php echo ($current_dir === 'legal') ? '' : 'legal/'; ?>privacy-gdpr.php">GDPR</a>
                    <a href="<?php echo ($current_dir === 'legal') ? '' : 'legal/'; ?>cookies.php">Cookies</a>
                    <a href="<?php echo ($current_dir === 'legal') ? '' : 'legal/'; ?>terms.php">Условия использования</a>
                    <a href="<?php echo ($current_dir === 'legal') ? '' : 'legal/'; ?>imprint.php">Импрессум</a>
                </nav>
            </div>
        </div>
    </footer>
    
    <!-- Cookie Banner -->
    <div class="cookie-banner" role="dialog" aria-labelledby="cookie-banner-title" aria-describedby="cookie-banner-description">
        <div class="container">
            <div class="cookie-banner__content">
                <div class="cookie-banner__text">
                    <div id="cookie-banner-title" class="visually-hidden">Использование cookies</div>
                    <p id="cookie-banner-description">
                        Мы используем cookies для улучшения работы сайта и анализа трафика. 
                        <a href="<?php echo ($current_dir === 'legal') ? '' : 'legal/'; ?>cookies.php" style="color: #60a5fa;">Подробнее</a>
                    </p>
                </div>
                <div class="cookie-banner__actions">
                    <button class="cookie-banner__btn cookie-banner__btn--decline" aria-label="Отклонить cookies">
                        Отклонить
                    </button>
                    <button class="cookie-banner__btn cookie-banner__btn--accept" aria-label="Принять все cookies">
                        Принять все
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript -->
    <script src="<?php echo ($current_dir === 'legal') ? '../' : ''; ?>assets/js/main.js" defer></script>
    
    <?php if (isset($additional_scripts)): ?>
        <?php echo $additional_scripts; ?>
    <?php endif; ?>
    
    <!-- Google Analytics (placeholder - replace with your tracking ID) -->
    <script>
        // Check if analytics cookies are accepted
        const cookieConsent = JSON.parse(localStorage.getItem('cookieConsent') || '{}');
        if (cookieConsent.analytics) {
            // Initialize Google Analytics here
            // gtag('config', 'GA_MEASUREMENT_ID');
        }
    </script>
    
    <!-- Structured Data for Breadcrumbs (if needed) -->
    <?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            <?php foreach ($breadcrumbs as $index => $breadcrumb): ?>
            {
                "@type": "ListItem",
                "position": <?php echo $index + 1; ?>,
                "name": "<?php echo htmlspecialchars($breadcrumb['name']); ?>",
                "item": "<?php echo htmlspecialchars($breadcrumb['url']); ?>"
            }<?php echo $index < count($breadcrumbs) - 1 ? ',' : ''; ?>
            <?php endforeach; ?>
        ]
    }
    </script>
    <?php endif; ?>
    
    <!-- Performance monitoring script -->
    <script>
        // Report Web Vitals
        function reportWebVitals() {
            if ('performance' in window && 'PerformanceObserver' in window) {
                // Track Largest Contentful Paint
                new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    const lcpEntry = entries[entries.length - 1];
                    // In production, send to analytics
                    console.log('LCP:', lcpEntry.startTime);
                }).observe({entryTypes: ['largest-contentful-paint']});
                
                // Track First Input Delay
                new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    entries.forEach((entry) => {
                        // In production, send to analytics
                        console.log('FID:', entry.processingStart - entry.startTime);
                    });
                }).observe({entryTypes: ['first-input']});
                
                // Track Cumulative Layout Shift
                let cumulativeLayoutShift = 0;
                new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    entries.forEach((entry) => {
                        if (!entry.hadRecentInput) {
                            cumulativeLayoutShift += entry.value;
                        }
                    });
                    // In production, send to analytics
                    console.log('CLS:', cumulativeLayoutShift);
                }).observe({entryTypes: ['layout-shift']});
            }
        }
        
        // Initialize performance monitoring
        if (document.readyState === 'complete') {
            reportWebVitals();
        } else {
            window.addEventListener('load', reportWebVitals);
        }
    </script>
</body>
</html>