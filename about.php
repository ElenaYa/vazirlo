<?php
/* about.php */

// Page-specific SEO data
$page_title = "О нас";
$page_description = "Vazirlo - команда экспертов по веб-аналитике с опытом более 7 лет. Наша миссия - помочь бизнесу принимать решения на основе данных и увеличивать прибыль.";

// Breadcrumbs
$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'О нас', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/about.php']
];

// Include header
include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero analytics-bg">
    <div class="container">
        <div class="hero">
            <div class="hero__grid">
                <div class="hero__media slide-left">
                    <img src="assets/img/analytics-dashboard.jpg"
                         alt="Команда Vazirlo работает с дашбордами и аналитикой"
                         loading="eager" width="900" height="560">
                </div>
                <div class="hero__content slide-right">
                    <h1 class="hero__title">
                        О компании <span style="color: var(--primary);">Vazirlo</span>
                    </h1>
                    <p class="hero__subtitle">
                        Мы превращаем данные в прибыль для вашего бизнеса. Команда экспертов с опытом более 7 лет
                        в области веб-аналитики и конверсионной оптимизации.
                    </p>
                    <div class="hero__actions">
                        <a href="services.php" class="btn btn--primary btn--large">Наши услуги</a>
                        <a href="contacts.php" class="btn btn--secondary btn--large">Связаться с нами</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section">
    <div class="container">
        <div class="grid grid--2">
            <div class="slide-up">
                <h2>Наша миссия</h2>
                <p class="text-large">
                    Помочь бизнесу принимать правильные решения на основе данных 
                    и достигать устойчивого роста прибыли.
                </p>
                <p>
                    Мы верим, что каждый бизнес заслуживает понимания своих клиентов 
                    и возможности оптимизировать свои процессы. Наша задача — сделать 
                    сложную аналитику простой и понятной для принятия решений.
                </p>
                <div class="mt-lg">
                    <div class="kpi-badge">7+ лет опыта</div>
                    <div class="kpi-badge">50+ проектов</div>
                    <div class="kpi-badge">15+ отраслей</div>
                </div>
            </div>
            
            <div class="slide-up">
                <img src="assets/img/analytics-team.jpg" 
                     alt="Команда аналитиков Vazirlo работает над дашбордами и отчетами"
                     loading="lazy" width="500" height="350"
                     style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
            </div>
        </div>
    </div>
</section>

<!-- Our Approach -->
<section id="approach" class="section section--alt">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Наш подход</h2>
            <p class="text-large text-muted slide-up">Как мы гарантируем результат</p>
        </div>
        
        <div class="grid grid--3">
            <div class="card approach-card slide-up">
                <div class="feature-icon" aria-hidden="true">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
                        <line x1="16.65" y1="16.65" x2="21" y2="21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="card__title">Глубокий анализ</h3>
                <p>
                    Не делаем поспешных выводов. Тщательно изучаем ваш бизнес, 
                    аудиторию и конкурентов перед началом работы.
                </p>
            </div>
            
            <div class="card approach-card slide-up">
                <div class="feature-icon" aria-hidden="true">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="3" y="10" width="4" height="10" rx="1" stroke="currentColor" stroke-width="2"/>
                        <rect x="10" y="6" width="4" height="14" rx="1" stroke="currentColor" stroke-width="2"/>
                        <rect x="17" y="2" width="4" height="18" rx="1" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <h3 class="card__title">Данные превыше всего</h3>
                <p>
                    Каждое решение основано на фактах и метриках. 
                    Тестируем гипотезы и масштабируем только работающие решения.
                </p>
            </div>
            
            <div class="card approach-card slide-up">
                <div class="feature-icon" aria-hidden="true">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C9 5 8 7 8 9C8 11 9.5 12.5 11 13L12 22L13 13C14.5 12.5 16 11 16 9C16 7 15 5 12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M8 9L6 10M16 9L18 10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="card__title">Фокус на результат</h3>
                <p>
                    Работаем не ради процесса, а ради конкретных бизнес-результатов: 
                    увеличения продаж, снижения затрат, роста LTV.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section id="team" class="section">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Команда экспертов</h2>
            <p class="text-large text-muted slide-up">Профессионалы с международным опытом</p>
        </div>
        
        <div class="team-grid">
            <div class="team-member slide-up">
                <div class="team-member__avatar">
                    <img src="assets/img/team-alexander.jpg" alt="Фото — Александр Петров, ведущий аналитик Vazirlo" loading="lazy" width="120" height="120">
                </div>
                <h3 class="team-member__name">Александр Петров</h3>
                <div class="team-member__role">Ведущий аналитик</div>
                <p class="team-member__bio">
                    Google Analytics Certified Professional с опытом 8+ лет. 
                    Специализируется на e-commerce аналитике и attribution modeling.
                </p>
            </div>
            
            <div class="team-member slide-up">
                <div class="team-member__avatar">
                    <img src="assets/img/team-maria.jpg" alt="Фото — Мария Новакова, CRO-специалист Vazirlo" loading="lazy" width="120" height="120">
                </div>
                <h3 class="team-member__name">Мария Новакова</h3>
                <div class="team-member__role">CRO-специалист</div>
                <p class="team-member__bio">
                    Эксперт по конверсионной оптимизации. Провела более 200 A/B тестов 
                    и увеличила конверсию клиентов в среднем на 87%.
                </p>
            </div>
            
            <div class="team-member slide-up">
                <div class="team-member__avatar">
                    <img src="assets/img/team-tomas.jpg" alt="Фото — Томаш Кованец, Data Engineer Vazirlo" loading="lazy" width="120" height="120">
                </div>
                <h3 class="team-member__name">Томаш Кованец</h3>
                <div class="team-member__role">Data Engineer</div>
                <p class="team-member__bio">
                    Специалист по автоматизации и построению дашбордов. 
                    Создает решения для обработки больших объемов данных.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Certifications -->
<section id="certifications" class="section section--alt">
    <div class="container">
        <div class="text-center mb-xl">
            <h2 class="slide-up">Сертификации и партнёрства</h2>
            <p class="text-muted slide-up">Подтверждённая экспертиза от ведущих платформ</p>
        </div>
        
        <div class="grid grid--4">
            <div class="card cert-card text-center slide-up">
                <div class="cert-icon" aria-hidden="true">
                    <!-- Analytics icon -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 20V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M10 20V4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M16 20V12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 20H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h4>Google Analytics</h4>
                <p class="text-muted">Certified Professional</p>
            </div>
            
            <div class="card cert-card text-center slide-up">
                <div class="cert-icon" aria-hidden="true">
                    <!-- Ads/Target icon -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="8" stroke="currentColor" stroke-width="2"/>
                        <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2"/>
                        <path d="M12 2V6M22 12H18M12 22V18M2 12H6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h4>Google Ads</h4>
                <p class="text-muted">Certified Specialist</p>
            </div>
            
            <div class="card cert-card text-center slide-up">
                <div class="cert-icon" aria-hidden="true">
                    <!-- Certificate/Ribbon icon -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="9" r="5" stroke="currentColor" stroke-width="2"/>
                        <path d="M9 14L7 21L12 18L17 21L15 14" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h4>Facebook Blueprint</h4>
                <p class="text-muted">Certified Professional</p>
            </div>
            
            <div class="card cert-card text-center slide-up">
                <div class="cert-icon" aria-hidden="true">
                    <!-- Flame/Heat icon for Hotjar -->
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3C12 3 8 6 8 10C8 12.7614 10.2386 15 13 15C14.6569 15 16 13.6569 16 12C16 10 15 9 15 9C15 12 13 13 12 13C10.8954 13 10 12.1046 10 11C10 8 12 6 12 6C12 6 18 9 18 14C18 17.3137 15.3137 20 12 20C8.68629 20 6 17.3137 6 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h4>Hotjar</h4>
                <p class="text-muted">Certified Partner</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Values -->
<section class="section values">
    <div class="values__bg" aria-hidden="true"></div>
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Наши ценности</h2>
            <p class="text-large text-muted slide-up">Принципы, которые формируют результат</p>
        </div>

        <div class="values__list">
            <div class="values__item slide-left">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 12C3 7.58172 6.58172 4 11 4C15.4183 4 19 7.58172 19 12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M19 12H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <circle cx="11" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Прозрачность</h3>
                    <p class="text-muted">Полная ясность процессов, методик и результатов. Доступ к данным и статусу — всегда открытый.</p>
                </div>
            </div>

            <div class="values__item slide-right">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 18V10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M10 18V6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M16 18V12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        <path d="M3 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Ориентация на результат</h3>
                    <p class="text-muted">Измеряем успех метриками бизнеса: рост выручки, снижение затрат, увеличение LTV.</p>
                </div>
            </div>

            <div class="values__item slide-left">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 12L11 15L16 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Партнерство</h3>
                    <p class="text-muted">Работаем как единая команда с клиентом. Долгосрочные цели важнее краткосрочных задач.</p>
                </div>
            </div>

            <div class="values__item slide-right">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L8 6V10L12 12L16 10V6L12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M8 14H16V18H8V14Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Постоянное обучение</h3>
                    <p class="text-muted">Всегда на острие инструментов и практик: GA4, server-side, MMM, incrementality.</p>
                </div>
            </div>

            <div class="values__item slide-left">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C8.68629 2 6 4.68629 6 8C6 10.2091 7.34315 12.2091 9.5 13M12 22V18M12 18C9.79086 18 8 16.2091 8 14C8 11.7909 9.79086 10 12 10C14.2091 10 16 11.7909 16 14C16 16.2091 14.2091 18 12 18Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Инновации</h3>
                    <p class="text-muted">Экспериментируем и внедряем лучшее: прогнозирование, автоматизация, персонализация.</p>
                </div>
            </div>

            <div class="values__item slide-right">
                <div class="values__icon" aria-hidden="true">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3L3 9V21H21V9L12 3Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M9 13L11 15L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="values__content">
                    <h3>Конфиденциальность и этика</h3>
                    <p class="text-muted">GDPR-by-design: минимизация сборов, безопасность данных и этичные подходы.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="section section--alt">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">История развития</h2>
            <p class="text-large text-muted slide-up">Путь от стартапа до экспертного агентства</p>
        </div>
        
        <div class="timeline slide-up">
            <div class="timeline-item">
                <div class="timeline-year">2017</div>
                <h3 class="timeline-title">Основание компании</h3>
                <p class="timeline-description">
                    Начали с консультаций по Google Analytics для малого бизнеса. 
                    Первые 5 клиентов, первые успешные кейсы.
                </p>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2019</div>
                <h3 class="timeline-title">Расширение команды</h3>
                <p class="timeline-description">
                    Привлекли специалистов по CRO и data engineering. 
                    Начали работать с крупными e-commerce проектами.
                </p>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2021</div>
                <h3 class="timeline-title">Международное признание</h3>
                <p class="timeline-description">
                    Получили статус Google Partner. Начали работать с клиентами 
                    из ЕС и СНГ. Более 30 завершённых проектов.
                </p>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2023</div>
                <h3 class="timeline-title">Технологический прорыв</h3>
                <p class="timeline-description">
                    Внедрили ML-алгоритмы для предиктивной аналитики. 
                    Автоматизировали процессы создания дашбордов.
                </p>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2024</div>
                <h3 class="timeline-title">Лидерство в регионе</h3>
                <p class="timeline-description">
                    Более 50 успешных проектов, средний ROI клиентов +150%. 
                    Признанные эксперты в области веб-аналитики в CEE.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Extended Case Studies -->
<section id="cases" class="section">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Подробные кейсы</h2>
            <p class="text-large text-muted slide-up">Глубокий анализ наших проектов</p>
        </div>
        
        <!-- Case Study 1 - Detailed -->
        <div class="card slide-up mb-xl">
            <div class="grid grid--2">
                <div>
                    <img src="assets/img/case-study-1.jpg" 
                         alt="Детальная аналитика роста конверсии интернет-магазина"
                         loading="lazy" width="400" height="300"
                         style="border-radius: var(--radius-md);">
                </div>
                <div>
                    <h3 style="color: var(--primary);">Интернет-магазин техники</h3>
                    <div class="mb-md">
                        <span class="kpi-badge">+156% конверсия</span>
                        <span class="kpi-badge">+€47k прибыль/мес</span>
                    </div>
                    
                    <h4>Проблема:</h4>
                    <p>Высокий трафик (50,000 посетителей/мес), но низкая конверсия 0.8%. 
                    Неточное отслеживание покупок, потеря данных при переходах между страницами.</p>
                    
                    <h4>Решение:</h4>
                    <ul style="margin-left: var(--space-md);">
                        <li>Настроили Enhanced Ecommerce и Server-Side Tracking</li>
                        <li>Внедрили heat maps и session recordings</li>
                        <li>Провели 15 A/B тестов элементов воронки</li>
                        <li>Оптимизировали страницы товаров и корзины</li>
                    </ul>
                    
                    <h4>Результат:</h4>
                    <p><strong>За 3 месяца конверсия выросла с 0.8% до 2.05%</strong></p>
                </div>
            </div>
        </div>
        
        <!-- Case Study 2 - Detailed -->
        <div class="card slide-up mb-xl">
            <div class="grid grid--2">
                <div>
                    <h3 style="color: var(--primary);">SaaS платформа для HR</h3>
                    <div class="mb-md">
                        <span class="kpi-badge">-65% Churn Rate</span>
                        <span class="kpi-badge">+2,400 users/год</span>
                    </div>
                    
                    <h4>Проблема:</h4>
                    <p>Высокий churn rate 15% в месяц. Не понимали, на каком этапе 
                    пользователи прекращают использовать продукт и почему.</p>
                    
                    <h4>Решение:</h4>
                    <ul style="margin-left: var(--space-md);">
                        <li>Настроили event tracking для всех ключевых действий</li>
                        <li>Построили cohort analysis и retention rate анализ</li>
                        <li>Создали автоматические алерты для risk-пользователей</li>
                        <li>Разработали onboarding оптимизацию</li>
                    </ul>
                    
                    <h4>Результат:</h4>
                    <p><strong>Churn rate снизился с 15% до 5.2% за 4 месяца</strong></p>
                </div>
                <div>
                    <img src="assets/img/analytics-team.jpg" 
                         alt="Аналитика пользовательского поведения в SaaS платформе"
                         loading="lazy" width="400" height="300"
                         style="border-radius: var(--radius-md);">
                </div>
            </div>
        </div>
        
        <!-- Case Study 3 - Detailed -->
        <div id="case-study-3" class="card slide-up mb-xl">
            <div class="grid grid--2">
                <div>
                    <img src="assets/img/case-study-3.jpg" 
                         alt="Оптимизация конверсии образовательной платформы"
                         loading="lazy" width="400" height="300"
                         style="border-radius: var(--radius-md);">
                </div>
                <div>
                    <h3 style="color: var(--primary);">Образовательная онлайн-платформа</h3>
                    <div class="mb-md">
                        <span class="kpi-badge">+240% регистрации</span>
                        <span class="kpi-badge">+€125k ARR</span>
                    </div>
                    
                    <h4>Проблема:</h4>
                    <p>Низкая конверсия из trial в платную подписку (8%). Пользователи регистрировались, 
                    но не проходили полный onboarding и не видели ценность продукта.</p>
                    
                    <h4>Решение:</h4>
                    <ul style="margin-left: var(--space-md);">
                        <li>Настроили funnel tracking от первого визита до оплаты</li>
                        <li>Провели user journey mapping и выявили точки отвала</li>
                        <li>Оптимизировали onboarding через серию A/B тестов</li>
                        <li>Внедрили персонализированные email-кампании</li>
                        <li>Добавили in-app нотификации и progress tracking</li>
                    </ul>
                    
                    <h4>Результат:</h4>
                    <p><strong>Trial-to-paid конверсия выросла с 8% до 27.2% за 5 месяцев</strong></p>
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <a href="contacts.php" class="btn btn--primary btn--large">Обсудить ваш проект</a>
        </div>
    </div>
</section>

<?php
// Include footer
include 'partials/footer.php';
?>