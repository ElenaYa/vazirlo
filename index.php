<?php
/* index.php */

// Page-specific SEO data
$page_title = "Главная";
$page_description = "Vazirlo - профессиональные услуги веб-аналитики для увеличения конверсии и продаж. Аудит, настройка отслеживания, дашборды и A/B тестирование в Bratislava, Slovakia.";

// Include header
include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero analytics-bg">
    <div class="container">
        <div class="hero fade-in">
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
            <div class="hero__image">
                 <img src="assets/img/dashboard-hero.jpg" 
                      alt="Современный дашборд веб-аналитики Vazirlo с ключевыми метриками и графиками роста продаж"
                     loading="eager"
                     width="800" height="450">
            </div>
        </div>
    </div>
</section>

<!-- KPI Section -->
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

<!-- Pain Points & Benefits -->
<section class="section section--alt">
    <div class="container">
        <div class="grid grid--2">
            <!-- Pain Points -->
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
            
            <!-- Benefits -->
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

<!-- How It Works -->
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

<!-- Case Studies -->
<section class="section section--alt">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Кейсы клиентов</h2>
            <p class="text-large text-muted slide-up">Реальные результаты реальных проектов</p>
        </div>
        
        <div class="grid grid--3">
            <!-- Case Study 1 -->
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
            
            <!-- Case Study 2 -->
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
            
            <!-- Case Study 3 -->
            <div class="card slide-up">
                <img src="assets/img/dashboard-hero.jpg" 
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

<!-- Client Logos -->
<section class="section">
    <div class="container">
        <div class="text-center mb-xl">
            <h2 class="slide-up">Нам доверяют</h2>
            <p class="text-muted slide-up">Более 50 успешных проектов в различных нишах</p>
        </div>
        
        <!-- Placeholder for client logos -->
        <div class="grid grid--4 slide-up">
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="font-size: var(--font-size-2xl); color: var(--muted); margin-bottom: var(--space-sm);">🛒</div>
                <strong>E-commerce</strong>
                <p class="text-muted">Интернет-магазины</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="font-size: var(--font-size-2xl); color: var(--muted); margin-bottom: var(--space-sm);">💼</div>
                <strong>SaaS</strong>
                <p class="text-muted">Программные продукты</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="font-size: var(--font-size-2xl); color: var(--muted); margin-bottom: var(--space-sm);">🎓</div>
                <strong>EdTech</strong>
                <p class="text-muted">Образовательные платформы</p>
            </div>
            <div class="card text-center" style="padding: var(--space-lg); background: var(--surface);">
                <div style="font-size: var(--font-size-2xl); color: var(--muted); margin-bottom: var(--space-sm);">🏥</div>
                <strong>Healthcare</strong>
                <p class="text-muted">Медицинские сервисы</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
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
                <a href="tel:+421940327781" class="btn" style="background: rgba(255,255,255,0.2); color: white; border: 2px solid rgba(255,255,255,0.3);">
                    +421 940 327 781
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
// Additional structured data for homepage
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

// Include footer
include 'partials/footer.php';
?>