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
                        <div class="contact-icon" aria-hidden="true">📍</div>
                        <div>
                            <strong>Адрес:</strong><br>
                            Karadžičova 8<br>
                            821 08 Bratislava, Slovakia
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
                        <div class="contact-icon" aria-hidden="true">📞</div>
                        <div>
                            <strong>Телефон:</strong><br>
                            <a href="tel:+421940327781" class="footer__link">+421 940 327 781</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">✉️</div>
                        <div>
                            <strong>Email:</strong><br>
                            <a href="mailto:hello@vazirlo.com" class="footer__link">hello@vazirlo.com</a>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">🕒</div>
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
                    <button class="cookie-banner__btn cookie-banner__btn--settings" aria-label="Настроить cookies">
                        Настроить
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