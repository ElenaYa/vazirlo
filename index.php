<?php

$page_title = "Главная";
$page_description = "Vazirlo - профессиональные услуги веб-аналитики для увеличения конверсии и продаж. Аудит, настройка отслеживания, дашборды и A/B тестирование в Bratislava, Slovakia.";

include 'partials/header.php';
?>

<section class="section section--hero analytics-bg">
    <div class="container">
        <div class="hero">
            <div class="hero__grid">
                <div class="hero__media slide-left">
                    <img src="assets/img/dashboard-hero.jpg" 
                         alt="Современный дашборд веб-аналитики Vazirlo с ключевыми метриками и графиками роста продаж"
                         loading="eager" width="900" height="560">
                </div>
                <div class="hero__content slide-right">
                    <h1 class="hero__title">
                        Повышаем продажи через <span style="color: var(--primary);">веб-аналитику</span>
                    </h1>
                    <p class="hero__subtitle">
                        Превращаем данные в прибыль. Профессиональная настройка аналитики, 
                        оптимизация конверсий и увеличение ROI для вашего бизнеса.
                    </p>
                    <div class="hero__actions">
                        <a href="contacts.php" class="btn btn--primary btn--large">
                            Получить аудит бесплатно
                        </a>
                        <a href="services.php" class="btn btn--secondary btn--large">
                            Наши услуги
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="section section--insight">
    <div class="insight__bg"></div>
    <div class="container">
        <div class="insight__grid">
            <div class="insight__media insight__media--left slide-left">
                <img src="assets/img/insight-attribution.jpg" alt="Атрибуция конверсий на дашборде Vazirlo" loading="lazy" width="720" height="540">
            </div>
            <div class="insight__content slide-up">
                <h2 class="gradient-text" style="margin-bottom: var(--space-md);">Найдём рост, где его не видно</h2>
                <p class="text-large" style="color: var(--text-light); max-width: 640px;">
                    Мы соединяем поведенческие данные, атрибуцию и сегментацию в единую картину. 
                    Чтобы вы видели не просто цифры — а решения, на которых растёт бизнес.
                </p>
                <div class="insight__stats">
                    <div class="insight__stat">
                        <div class="kpi-number">+38%</div>
                        <div class="kpi-label">Конверсии из нефинансируемых каналов</div>
                    </div>
                    <div class="insight__stat">
                        <div class="kpi-number">-27%</div>
                        <div class="kpi-label">Снижение пересекающейся атрибуции</div>
                    </div>
                    <div class="insight__stat">
                        <div class="kpi-number">+2.4x</div>
                        <div class="kpi-label">Рост LTV в приоритетных сегментах</div>
                    </div>
                </div>
                <div class="hero__actions" style="margin-top: var(--space-xl);">
                    <a href="services.php#dashboards" class="btn btn--primary btn--large">Посмотреть примеры</a>
                    <a href="contacts.php" class="btn btn--secondary btn--large">Обсудить внедрение</a>
                </div>
            </div>
            <div class="insight__media insight__media--right slide-right">
                <img src="assets/img/insight-segmentation.jpg" alt="Сегментация аудитории на визуальном дашборде Vazirlo" loading="lazy" width="720" height="540">
            </div>
        </div>
    </div>
    <div class="insight__stripe">
        <div class="container insight__stripe-inner">
            <div class="insight__stripe-media">
                <img src="assets/img/insight-journey.jpg" alt="Карта пользовательского пути: от первого касания до покупки" loading="lazy" width="960" height="360">
            </div>
            <div class="insight__stripe-content">
                <h3 class="gradient-text">Прозрачный путь клиента</h3>
                <p class="text-muted">От первого визита до покупки — все точки касания, влияние каналов и реальная ценность каждого клика. Наша система аналитики отслеживает полный путь пользователя через все устройства и каналы, учитывая как онлайн, так и офлайн взаимодействия.</p>
                <p class="text-muted">Вы получаете детальное понимание того, какие каналы и кампании реально приносят результат, как пользователи взаимодействуют с вашим сайтом, и где находятся точки роста конверсии. Это позволяет принимать более точные маркетинговые решения и оптимизировать рекламные бюджеты.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-xl">
            <h2 class="slide-up">Результаты наших клиентов</h2>
            <p class="text-large text-muted slide-up">Измеримый рост ключевых показателей</p>
        </div>
        
        <div class="grid grid--4">
            <div class="card text-center slide-up">
                <div class="kpi-number">+127%</div>
                <div class="kpi-label">Рост конверсии</div>
                <p class="text-muted">Средний прирост после оптимизации воронки продаж</p>
            </div>
            
            <div class="card text-center slide-up">
                <div class="kpi-number">-43%</div>
                <div class="kpi-label">Снижение CPA</div>
                <p class="text-muted">Уменьшение стоимости привлечения клиента</p>
            </div>
            
            <div class="card text-center slide-up">
                <div class="kpi-number">+89%</div>
                <div class="kpi-label">Увеличение ROI</div>
                <p class="text-muted">Рост возврата инвестиций в рекламу</p>
            </div>
            
            <div class="card text-center slide-up">
                <div class="kpi-number">24/7</div>
                <div class="kpi-label">Мониторинг</div>
                <p class="text-muted">Непрерывное отслеживание ключевых метрик</p>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="grid grid--2">
            <div class="slide-up">
                <h2 style="color: var(--accent);">Знакомые проблемы?</h2>
                <div class="mb-lg">
                    <h4>❌ Не понимаете, откуда приходят клиенты</h4>
                    <p class="text-muted">Тратите бюджет на неэффективные каналы, не видите полную картину пользовательского пути.</p>
                </div>
                <div class="mb-lg">
                    <h4>❌ Низкая конверсия сайта</h4>
                    <p class="text-muted">Много трафика, но мало продаж. Не знаете, где теряете потенциальных клиентов.</p>
                </div>
                <div class="mb-lg">
                    <h4>❌ Неточные данные в отчётах</h4>
                    <p class="text-muted">Аналитика настроена неправильно, данные противоречат друг другу, решения принимаются вслепую.</p>
                </div>
                <div class="mb-lg">
                    <h4>❌ Нет времени на анализ</h4>
                    <p class="text-muted">Данных много, но нет экспертизы для их интерпретации и принятия решений.</p>
                </div>
            </div>
            
            <div class="slide-up">
                <h2 style="color: var(--primary);">Наше решение</h2>
                <div class="mb-lg">
                    <h4>✅ Полная прозрачность воронки</h4>
                    <p class="text-muted">Видите весь путь клиента от первого клика до покупки. Понимаете, какие каналы работают.</p>
                </div>
                <div class="mb-lg">
                    <h4>✅ Увеличение конверсии на 50-200%</h4>
                    <p class="text-muted">Находим слабые места и оптимизируем их. Больше продаж с того же трафика.</p>
                </div>
                <div class="mb-lg">
                    <h4>✅ Точные и достоверные данные</h4>
                    <p class="text-muted">Профессиональная настройка всех систем аналитики. Один источник правды для принятия решений.</p>
                </div>
                <div class="mb-lg">
                    <h4>✅ Готовые инсайты и рекомендации</h4>
                    <p class="text-muted">Получаете конкретные действия для роста, а не просто цифры. Экономите время на анализе.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Как мы работаем</h2>
            <p class="text-large text-muted slide-up">Проверенная методология в 4 этапа</p>
        </div>
        
        <div class="process-steps">
            <div class="process-step slide-up">
                <div class="process-step__number">1</div>
                <h3 class="process-step__title">Аудит</h3>
                <p class="process-step__description">
                    Глубокий анализ текущих настроек аналитики, выявление проблем 
                    и точек роста. Получаете детальный отчёт с рекомендациями.
                </p>
            </div>
            
            <div class="process-step slide-up">
                <div class="process-step__number">2</div>
                <h3 class="process-step__title">Настройка отслеживания</h3>
                <p class="process-step__description">
                    Внедряем правильное отслеживание всех ключевых событий: 
                    покупки, лиды, цели. Настраиваем Enhanced Ecommerce.
                </p>
            </div>
            
            <div class="process-step slide-up">
                <div class="process-step__number">3</div>
                <h3 class="process-step__title">Дашборды</h3>
                <p class="process-step__description">
                    Создаём автоматические отчёты и дашборды с ключевыми метриками. 
                    Видите результат работы в реальном времени.
                </p>
            </div>
            
            <div class="process-step slide-up">
                <div class="process-step__number">4</div>
                <h3 class="process-step__title">Оптимизация</h3>
                <p class="process-step__description">
                    A/B тестируем гипотезы, оптимизируем воронку продаж, 
                    масштабируем успешные решения на весь сайт.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Кейсы клиентов</h2>
            <p class="text-large text-muted slide-up">Реальные результаты реальных проектов</p>
        </div>
        
        <div class="grid grid--3">
            <div class="card slide-up">
                <img src="assets/img/case-study-1.jpg" 
                     alt="График роста конверсии интернет-магазина после оптимизации аналитики"
                     loading="lazy" width="300" height="200"
                     style="border-radius: var(--radius-md); margin-bottom: var(--space-md);">
                <div class="card__content">
                    <h3 class="card__title">Интернет-магазин электроники</h3>
                    <div class="kpi-badge mb-sm">+156% конверсия</div>
                    <p class="text-muted">
                        Настроили корректное отслеживание покупок, оптимизировали воронку 
                        и увеличили конверсию с 0.8% до 2.05% за 3 месяца.
                    </p>
                </div>
                <div class="card__footer">
                    <strong style="color: var(--primary);">Результат:</strong> +€47,000 дополнительной прибыли в месяц
                </div>
            </div>
            
            <div class="card slide-up">
                <img src="assets/img/analytics-team.jpg" 
                     alt="Дашборд с метриками SaaS платформы показывающий рост пользователей"
                     loading="lazy" width="300" height="200"
                     style="border-radius: var(--radius-md); margin-bottom: var(--space-md);">
                <div class="card__content">
                    <h3 class="card__title">SaaS платформа</h3>
                    <div class="kpi-badge mb-sm">-65% Churn Rate</div>
                    <p class="text-muted">
                        Внедрили продуктовую аналитику, выявили паттерны оттока пользователей 
                        и снизили churn rate с 15% до 5.2%.
                    </p>
                </div>
                <div class="card__footer">
                    <strong style="color: var(--primary);">Результат:</strong> Удержание +2,400 пользователей в год
                </div>
            </div>
            
            <div class="card slide-up">
                <img src="assets/img/case-study-2.jpg" 
                     alt="Аналитический дашборд с ROI метриками рекламных кампаний"
                     loading="lazy" width="300" height="200"
                     style="border-radius: var(--radius-md); margin-bottom: var(--space-md);">
                <div class="card__content">
                    <h3 class="card__title">Образовательные курсы</h3>
                    <div class="kpi-badge mb-sm">+234% ROI</div>
                    <p class="text-muted">
                        Настроили attribution modeling, перераспределили рекламный бюджет 
                        и увеличили ROI с 150% до 500%.
                    </p>
                </div>
                <div class="card__footer">
                    <strong style="color: var(--primary);">Результат:</strong> Экономия €15,000 рекламного бюджета
                </div>
            </div>
        </div>
        
        <div class="text-center mt-xl">
            <a href="about.php#cases" class="btn btn--secondary">
                Больше кейсов
            </a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-xl">
            <h2 class="slide-up">Нам доверяют</h2>
            <p class="text-muted slide-up">Более 50 успешных проектов в различных нишах</p>
        </div>
        
        <div class="grid grid--4 slide-up">
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="color: var(--muted); margin-bottom: var(--space-sm); display: flex; justify-content: center;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 6H4M6 6H20L18 14H7L6 6ZM6 6L7 14M9 20C8.44772 20 8 19.5523 8 19C8 18.4477 8.44772 18 9 18C9.55228 18 10 18.4477 10 19C10 19.5523 9.55228 20 9 20ZM16 20C15.4477 20 15 19.5523 15 19C15 18.4477 15.4477 18 16 18C16.5523 18 17 18.4477 17 19C17 19.5523 16.5523 20 16 20Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <strong>E-commerce</strong>
                <p class="text-muted">Интернет-магазины</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="color: var(--muted); margin-bottom: var(--space-sm); display: flex; justify-content: center;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M10 6V4C10 3.44772 10.4477 3 11 3H13C13.5523 3 14 3.44772 14 4V6M4 9H20C21.1046 9 22 9.89543 22 11V17C22 18.1046 21.1046 19 20 19H4C2.89543 19 2 18.1046 2 17V11C2 9.89543 2.89543 9 4 9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <strong>SaaS</strong>
                <p class="text-muted">Программные продукты</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="color: var(--muted); margin-bottom: var(--space-sm); display: flex; justify-content: center;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M12 3L2 8L12 13L22 8L12 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 10V16C5 16 8 19 12 19C16 19 19 16 19 16V10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <strong>EdTech</strong>
                <p class="text-muted">Образовательные платформы</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="color: var(--muted); margin-bottom: var(--space-sm); display: flex; justify-content: center;">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M19 7H14V5C14 4.44772 13.5523 4 13 4H11C10.4477 4 10 4.44772 10 5V7H5C3.89543 7 3 7.89543 3 9V19C3 20.1046 3.89543 21 5 21H19C20.1046 21 21 20.1046 21 19V9C21 7.89543 20.1046 7 19 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 13H15M12 10V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <strong>Healthcare</strong>
                <p class="text-muted">Медицинские сервисы</p>
            </div>
        </div>
    </div>
</section>

<section class="section analytics-bg" style="background: linear-gradient(135deg, var(--primary) 0%, #1e42cc 100%); color: white;">
    <div class="container">
        <div class="text-center">
             <h2 class="slide-up" style="color: white; margin-bottom: var(--space-md);">
                Готовы увеличить продажи?
            </h2>
            <p class="text-large slide-up" style="color: rgba(255,255,255,0.9); margin-bottom: var(--space-xl); max-width: 600px; margin-left: auto; margin-right: auto;">
                Получите бесплатный аудит вашей аналитики и персональные рекомендации 
                по увеличению конверсии уже сегодня.
            </p>
            <div class="slide-up">
                 <a href="contacts.php" class="btn btn--accent btn--large" style="margin-right: var(--space-md);">
                    Получить бесплатный аудит
                </a>
            </div>
            
            <!-- Trust indicators -->
            <div class="mt-xl slide-up" style="display: flex; justify-content: center; gap: var(--space-xl); flex-wrap: wrap; color: rgba(255,255,255,0.8); font-size: var(--font-size-sm);">
                <div style="display: flex; align-items: center; gap: var(--space-xs);">
                    <span>✓</span> Бесплатная консультация
                </div>
                <div style="display: flex; align-items: center; gap: var(--space-xs);">
                    <span>✓</span> Быстрый результат
                </div>
                <div style="display: flex; align-items: center; gap: var(--space-xs);">
                    <span>✓</span> Гарантия качества
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$additional_scripts = '
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Vazirlo",
    "image": "https://' . $_SERVER['HTTP_HOST'] . '/assets/img/analytics-team.jpg",
    "description": "Профессиональные услуги веб-аналитики для увеличения конверсии и продаж",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Karadžičova 8",
        "addressLocality": "Bratislava",
        "postalCode": "821 08",
        "addressCountry": "SK"
    },
    "geo": {
        "@type": "GeoCoordinates",
        "latitude": 48.1516988,
        "longitude": 17.1093063
    },
    "url": "https://' . $_SERVER['HTTP_HOST'] . '",
    "telephone": "+421940327781",
    "email": "hello@vazirlo.com",
    "openingHours": "Mo-Fr 09:00-18:00",
    "priceRange": "€€",
    "areaServed": {
        "@type": "Country",
        "name": "Slovakia"
    },
    "serviceType": [
        "Веб-аналитика",
        "Google Analytics",
        "Конверсионная оптимизация",
        "A/B тестирование",
        "Настройка отслеживания"
    ],
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "23"
    }
}
</script>
';

include 'partials/footer.php';
?>