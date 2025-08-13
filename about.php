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
<section class="section section--hero">
    <div class="container">
        <div class="hero fade-in">
            <h1 class="hero__title">
                О компании <span style="color: var(--primary);">Vazirlo</span>
            </h1>
            <p class="hero__subtitle">
                Мы превращаем данные в прибыль для вашего бизнеса. Команда экспертов 
                с опытом более 7 лет в области веб-аналитики и конверсионной оптимизации.
            </p>
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
            <div class="card slide-up">
                <div style="font-size: var(--font-size-3xl); color: var(--primary); margin-bottom: var(--space-md);">🔍</div>
                <h3 class="card__title">Глубокий анализ</h3>
                <p>
                    Не делаем поспешных выводов. Тщательно изучаем ваш бизнес, 
                    аудиторию и конкурентов перед началом работы.
                </p>
            </div>
            
            <div class="card slide-up">
                <div style="font-size: var(--font-size-3xl); color: var(--primary); margin-bottom: var(--space-md);">📊</div>
                <h3 class="card__title">Данные превыше всего</h3>
                <p>
                    Каждое решение основано на фактах и метриках. 
                    Тестируем гипотезы и масштабируем только работающие решения.
                </p>
            </div>
            
            <div class="card slide-up">
                <div style="font-size: var(--font-size-3xl); color: var(--primary); margin-bottom: var(--space-md);">🚀</div>
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
                <div class="team-member__avatar"></div>
                <h3 class="team-member__name">Александр Петров</h3>
                <div class="team-member__role">Ведущий аналитик</div>
                <p class="team-member__bio">
                    Google Analytics Certified Professional с опытом 8+ лет. 
                    Специализируется на e-commerce аналитике и attribution modeling.
                </p>
            </div>
            
            <div class="team-member slide-up">
                <div class="team-member__avatar"></div>
                <h3 class="team-member__name">Мария Новакова</h3>
                <div class="team-member__role">CRO-специалист</div>
                <p class="team-member__bio">
                    Эксперт по конверсионной оптимизации. Провела более 200 A/B тестов 
                    и увеличила конверсию клиентов в среднем на 87%.
                </p>
            </div>
            
            <div class="team-member slide-up">
                <div class="team-member__avatar"></div>
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
            <div class="card text-center slide-up">
                <div style="font-size: var(--font-size-3xl); margin-bottom: var(--space-md);">🥇</div>
                <h4>Google Analytics</h4>
                <p class="text-muted">Certified Professional</p>
            </div>
            
            <div class="card text-center slide-up">
                <div style="font-size: var(--font-size-3xl); margin-bottom: var(--space-md);">🎯</div>
                <h4>Google Ads</h4>
                <p class="text-muted">Certified Specialist</p>
            </div>
            
            <div class="card text-center slide-up">
                <div style="font-size: var(--font-size-3xl); margin-bottom: var(--space-md);">📈</div>
                <h4>Facebook Blueprint</h4>
                <p class="text-muted">Certified Professional</p>
            </div>
            
            <div class="card text-center slide-up">
                <div style="font-size: var(--font-size-3xl); margin-bottom: var(--space-md);">🔍</div>
                <h4>Hotjar</h4>
                <p class="text-muted">Certified Partner</p>
            </div>
        </div>
    </div>
</section>

<!-- Company Values -->
<section class="section">
    <div class="container">
        <div class="text-center mb-2xl">
            <h2 class="slide-up">Наши ценности</h2>
            <p class="text-large text-muted slide-up">Принципы, которыми мы руководствуемся</p>
        </div>
        
        <div class="grid grid--2">
            <div class="card slide-up">
                <h3 style="color: var(--primary);">🎯 Прозрачность</h3>
                <p>
                    Все процессы, методы и результаты работы полностью прозрачны. 
                    Вы всегда знаете, что мы делаем и почему.
                </p>
            </div>
            
            <div class="card slide-up">
                <h3 style="color: var(--primary);">📈 Ориентация на результат</h3>
                <p>
                    Измеряем успех только конкретными бизнес-метриками: 
                    рост продаж, увеличение прибыли, снижение затрат.
                </p>
            </div>
            
            <div class="card slide-up">
                <h3 style="color: var(--primary);">🤝 Партнёрский подход</h3>
                <p>
                    Мы не просто исполнители, а стратегические партнёры. 
                    Вкладываемся в ваш успех как в свой собственный.
                </p>
            </div>
            
            <div class="card slide-up">
                <h3 style="color: var(--primary);">🎓 Постоянное обучение</h3>
                <p>
                    Сфера аналитики развивается быстро. Мы изучаем новые инструменты 
                    и методы, чтобы предлагать лучшие решения.
                </p>
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