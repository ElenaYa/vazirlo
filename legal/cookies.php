<?php
/* legal/cookies.php */

$page_title = "Политика использования Cookies";
$page_description = "Информация о том, как Vazirlo использует cookies и другие технологии отслеживания на нашем веб-сайте. Управление настройками cookies.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Cookies', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/legal/cookies.php']
];

$additional_scripts = '<script>
// Cookie consent management
document.addEventListener("DOMContentLoaded", function() {
    const consentData = JSON.parse(localStorage.getItem("cookieConsent") || "{}");
    
    // Update toggles based on stored consent
    Object.keys(consentData).forEach(category => {
        const toggle = document.getElementById(category + "Toggle");
        if (toggle) {
            toggle.checked = consentData[category] || false;
        }
    });
    
    // Handle consent changes
    document.querySelectorAll(".cookie-toggle").forEach(toggle => {
        toggle.addEventListener("change", function() {
            updateConsent();
        });
    });
    
    function updateConsent() {
        const consent = {
            necessary: true, // Always true
            analytics: document.getElementById("analyticsToggle")?.checked || false,
            marketing: document.getElementById("marketingToggle")?.checked || false,
            timestamp: Date.now()
        };
        
        localStorage.setItem("cookieConsent", JSON.stringify(consent));
        
        // Show success message
        showConsentUpdate();
    }
    
    function showConsentUpdate() {
        const message = document.createElement("div");
        message.className = "toast toast--success show";
        message.textContent = "Настройки cookies сохранены";
        message.style.position = "fixed";
        message.style.top = "20px";
        message.style.right = "20px";
        message.style.zIndex = "1000";
        
        document.body.appendChild(message);
        
        setTimeout(() => {
            message.classList.remove("show");
            setTimeout(() => message.remove(), 300);
        }, 3000);
    }
});
</script>';

include '../partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Политика использования Cookies</h1>
            <p class="hero__subtitle">
                Как мы используем cookies и другие технологии отслеживания для улучшения вашего опыта
            </p>
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                Последнее обновление: <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </div>
</section>

<!-- What are Cookies -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Что такое cookies?</h2>
            <p>
                Cookies — это небольшие текстовые файлы, которые сохраняются на вашем устройстве (компьютере, 
                планшете или мобильном телефоне) при посещении веб-сайтов. Они помогают сайтам запоминать 
                информацию о вашем посещении, что делает следующие посещения более удобными и полезными.
            </p>
            
            <div class="card" style="margin: var(--space-xl) 0;">
                <div class="card__content">
                    <h3>Типы cookies по времени действия</h3>
                    <div class="grid grid--2" style="gap: var(--space-md); margin-top: var(--space-md);">
                        <div>
                            <h4>🕐 Сессионные cookies</h4>
                            <p>Удаляются при закрытии браузера. Используются для сохранения состояния во время одного сеанса.</p>
                        </div>
                        <div>
                            <h4>💾 Постоянные cookies</h4>
                            <p>Остаются на устройстве в течение заданного времени или до их ручного удаления.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cookie Categories -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Категории cookies, которые мы используем</h2>
            
            <div class="grid grid--1" style="gap: var(--space-lg); margin: var(--space-lg) 0;">
                <div class="card" style="border-left: 4px solid #10b981;">
                    <div class="card__content">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-md);">
                            <h3>🔧 Необходимые cookies</h3>
                            <div style="display: flex; align-items: center; gap: var(--space-xs);">
                                <span style="font-size: var(--font-size-sm); color: var(--muted);">Всегда активны</span>
                                <input type="checkbox" checked disabled style="opacity: 0.5;">
                            </div>
                        </div>
                        <p style="margin-bottom: var(--space-md);">
                            Эти cookies необходимы для работы сайта и не могут быть отключены. Они обычно 
                            устанавливаются в ответ на ваши действия на сайте.
                        </p>
                        <h4>Что мы сохраняем:</h4>
                        <ul style="margin-top: var(--space-sm);">
                            <li>Предпочтения cookies</li>
                            <li>Состояние сеанса</li>
                            <li>Настройки безопасности</li>
                            <li>Языковые предпочтения</li>
                        </ul>
                        <p style="margin-top: var(--space-md); font-size: var(--font-size-sm); color: var(--muted);">
                            <strong>Срок хранения:</strong> Сессионные или до 1 года
                        </p>
                    </div>
                </div>
                
                <div class="card" style="border-left: 4px solid var(--primary);">
                    <div class="card__content">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-md);">
                            <h3>📊 Аналитические cookies</h3>
                            <label style="display: flex; align-items: center; gap: var(--space-xs); cursor: pointer;">
                                <input type="checkbox" id="analyticsToggle" class="cookie-toggle">
                                <span style="font-size: var(--font-size-sm);">Разрешить</span>
                            </label>
                        </div>
                        <p style="margin-bottom: var(--space-md);">
                            Позволяют нам анализировать, как посетители используют сайт, чтобы улучшить его работу.
                        </p>
                        <h4>Что мы отслеживаем:</h4>
                        <ul style="margin-top: var(--space-sm);">
                            <li>Количество посетителей</li>
                            <li>Популярные страницы</li>
                            <li>Время на сайте</li>
                            <li>Источники трафика</li>
                            <li>Техническая информация (браузер, ОС)</li>
                        </ul>
                        <h4 style="margin-top: var(--space-md);">Используемые сервисы:</h4>
                        <ul style="margin-top: var(--space-sm);">
                            <li><strong>Google Analytics:</strong> _ga, _ga_*, _gid</li>
                            <li><strong>Hotjar:</strong> _hjSessionUser_*, _hjSession_*</li>
                        </ul>
                        <p style="margin-top: var(--space-md); font-size: var(--font-size-sm); color: var(--muted);">
                            <strong>Срок хранения:</strong> 2 года (Google Analytics), 1 год (Hotjar)
                        </p>
                    </div>
                </div>
                
                <div class="card" style="border-left: 4px solid var(--accent);">
                    <div class="card__content">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: var(--space-md);">
                            <h3>📢 Маркетинговые cookies</h3>
                            <label style="display: flex; align-items: center; gap: var(--space-xs); cursor: pointer;">
                                <input type="checkbox" id="marketingToggle" class="cookie-toggle">
                                <span style="font-size: var(--font-size-sm);">Разрешить</span>
                            </label>
                        </div>
                        <p style="margin-bottom: var(--space-md);">
                            Используются для показа релевантной рекламы и отслеживания эффективности рекламных кампаний.
                        </p>
                        <h4>Что мы отслеживаем:</h4>
                        <ul style="margin-top: var(--space-sm);">
                            <li>Взаимодействие с рекламой</li>
                            <li>Конверсии и цели</li>
                            <li>Ремаркетинг</li>
                            <li>Персонализация контента</li>
                        </ul>
                        <h4 style="margin-top: var(--space-md);">Используемые сервисы:</h4>
                        <ul style="margin-top: var(--space-sm);">
                            <li><strong>Google Ads:</strong> _gcl_au, _gcl_aw</li>
                            <li><strong>Facebook Pixel:</strong> _fbp, _fbc</li>
                            <li><strong>LinkedIn:</strong> _li_fat_id, li_sugr</li>
                        </ul>
                        <p style="margin-top: var(--space-md); font-size: var(--font-size-sm); color: var(--muted);">
                            <strong>Срок хранения:</strong> 90 дней - 2 года в зависимости от сервиса
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cookie Management -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Управление cookies</h2>
            
            <h3>Настройки браузера</h3>
            <p>Вы можете управлять cookies через настройки вашего браузера:</p>
            
            <div class="grid grid--2" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h4>🌐 Google Chrome</h4>
                        <p>Настройки → Конфиденциальность и безопасность → Файлы cookie и другие данные сайтов</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h4>🦊 Mozilla Firefox</h4>
                        <p>Настройки → Приватность и защита → Куки и данные сайтов</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h4>🧭 Safari</h4>
                        <p>Настройки → Конфиденциальность → Управлять данными веб-сайта</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h4>📘 Microsoft Edge</h4>
                        <p>Настройки → Файлы cookie и разрешения сайта → Управление и удаление файлов cookie</p>
                    </div>
                </div>
            </div>
            
            <div class="card" style="margin: var(--space-xl) 0; border-left: 4px solid var(--accent);">
                <div class="card__content">
                    <h3>⚠️ Важное предупреждение</h3>
                    <p>
                        Отключение cookies может повлиять на функциональность сайта. Некоторые возможности 
                        могут работать неправильно или стать недоступными.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Third Party Services -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Сторонние сервисы</h2>
            
            <p>Мы используем следующие сторонние сервисы, которые могут устанавливать свои cookies:</p>
            
            <div class="grid grid--1" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h3>Google Analytics</h3>
                        <p><strong>Назначение:</strong> Веб-аналитика<br>
                        <strong>Cookies:</strong> _ga, _ga_*, _gid<br>
                        <strong>Политика:</strong> <a href="https://policies.google.com/privacy" target="_blank">policies.google.com/privacy</a><br>
                        <strong>Отказ:</strong> <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">Google Analytics Opt-out</a></p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>Google Ads</h3>
                        <p><strong>Назначение:</strong> Реклама и конверсии<br>
                        <strong>Cookies:</strong> _gcl_au, _gcl_aw<br>
                        <strong>Политика:</strong> <a href="https://policies.google.com/privacy" target="_blank">policies.google.com/privacy</a><br>
                        <strong>Отказ:</strong> <a href="https://adssettings.google.com" target="_blank">Настройки рекламы Google</a></p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>Facebook Pixel</h3>
                        <p><strong>Назначение:</strong> Реклама и ремаркетинг<br>
                        <strong>Cookies:</strong> _fbp, _fbc<br>
                        <strong>Политика:</strong> <a href="https://www.facebook.com/privacy/explanation" target="_blank">facebook.com/privacy</a><br>
                        <strong>Отказ:</strong> <a href="https://www.facebook.com/settings?tab=ads" target="_blank">Настройки рекламы Facebook</a></p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>Hotjar</h3>
                        <p><strong>Назначение:</strong> Анализ поведения пользователей<br>
                        <strong>Cookies:</strong> _hjSessionUser_*, _hjSession_*<br>
                        <strong>Политика:</strong> <a href="https://www.hotjar.com/legal/policies/privacy" target="_blank">hotjar.com/legal/policies/privacy</a><br>
                        <strong>Отказ:</strong> <a href="https://www.hotjar.com/legal/compliance/opt-out" target="_blank">Hotjar Opt-out</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Your Choices -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Ваши права и выбор</h2>
            
            <h3>Согласие на cookies</h3>
            <p>
                В соответствии с GDPR мы запрашиваем ваше согласие на использование необязательных cookies. 
                Вы можете изменить свои предпочтения в любое время.
            </p>
            
            <h3>Отзыв согласия</h3>
            <p>
                Вы можете отозвать согласие на использование cookies в любое время, изменив настройки выше 
                или удалив cookies через настройки браузера.
            </p>
            
            <h3>Do Not Track</h3>
            <p>
                Мы уважаем сигналы "Do Not Track" от браузеров и не отслеживаем пользователей, которые 
                установили эту настройку.
            </p>
            
            <div class="card" style="margin: var(--space-xl) 0;">
                <div class="card__content">
                    <h3>Текущие настройки cookies</h3>
                    <p style="margin-bottom: var(--space-md);">Ваши текущие предпочтения:</p>
                    <div style="display: flex; flex-direction: column; gap: var(--space-sm);">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span>Необходимые cookies:</span>
                            <span style="color: #10b981; font-weight: 600;">✓ Включены</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span>Аналитические cookies:</span>
                            <span id="analyticsStatus" style="font-weight: 600;">Проверка...</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span>Маркетинговые cookies:</span>
                            <span id="marketingStatus" style="font-weight: 600;">Проверка...</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Updates -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Изменения политики</h2>
            
            <p>
                Мы можем время от времени обновлять эту политику использования cookies. При внесении 
                существенных изменений мы уведомим вас через баннер на сайте или по email.
            </p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>История изменений</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li><strong><?php echo date('d.m.Y'); ?>:</strong> Обновление в соответствии с новыми требованиями GDPR</li>
                        <li><strong>15.06.2024:</strong> Добавлена информация о Hotjar</li>
                        <li><strong>01.03.2024:</strong> Первая версия политики</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <div class="text-center">
                <h2>Вопросы о cookies?</h2>
                <p class="text-large text-muted mb-xl">
                    Если у вас есть вопросы о нашем использовании cookies, свяжитесь с нами
                </p>
                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:privacy@vazirlo.com" class="btn btn--primary">
                        Написать нам
                    </a>
                    <a href="../contacts.php" class="btn btn--secondary">
                        Все контакты
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Update status indicators
document.addEventListener('DOMContentLoaded', function() {
    const consent = JSON.parse(localStorage.getItem('cookieConsent') || '{}');
    
    document.getElementById('analyticsStatus').textContent = consent.analytics ? '✓ Включены' : '✗ Отключены';
    document.getElementById('analyticsStatus').style.color = consent.analytics ? '#10b981' : '#ef4444';
    
    document.getElementById('marketingStatus').textContent = consent.marketing ? '✓ Включены' : '✗ Отключены';
    document.getElementById('marketingStatus').style.color = consent.marketing ? '#10b981' : '#ef4444';
});
</script>

<?php include '../partials/footer.php'; ?>