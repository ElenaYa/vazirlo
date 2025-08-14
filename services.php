<?php
/* services.php */

$page_title = "Услуги";
$page_description = "Полный спектр услуг по веб-аналитике: аудит, настройка отслеживания, создание дашбордов, A/B тестирование и консультации. Повысьте конверсию вашего сайта с Vazirlo.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Услуги', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/services.php']
];

include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero analytics-bg">
    <div class="container">
        <div class="hero">
            <div class="hero__grid">
                <div class="hero__media slide-left">
                    <img src="assets/img/services-dashboard.jpg"
                         alt="Дашборды и аналитика Vazirlo для роста бизнеса"
                         loading="eager" width="900" height="560">
                </div>
                <div class="hero__content slide-right">
                    <h1 class="hero__title">Услуги веб-аналитики</h1>
                    <p class="hero__subtitle">Полный спектр решений для роста вашего бизнеса через данные</p>
                    <div class="hero__actions">
                        <a href="contacts.php" class="btn btn--primary btn--large" style="padding: 10px 20px;">Получить консультацию</a>
                        <a href="about.php#cases" class="btn btn--secondary btn--large">Посмотреть кейсы</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section" id="services">
    <div class="container">
        <div class="services-list">
            <!-- Audit -->
            <article class="service-card slide-up" id="audit">
                <figure class="service-card__media">
                    <img src="assets/img/services-audit.jpg" alt="Аудит аналитики — проверка GA4, качества данных и схемы отслеживания" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/>
                            <line x1="16.65" y1="16.65" x2="21" y2="21" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">Аудит аналитики</h3>
                        <p class="service-card__subtitle">От €500</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Находим разрывы в данных и точки роста: проверяем GA4/GTM, схему событий, ecommerce, кросс-доменные сценарии и консистентность отчётов.</p>
                    <ul>
                        <li>GA4: структура ресурсов, потоки данных, аудит событий и параметров</li>
                        <li>GTM: валидация триггеров, тегов, переменных, приоритетов</li>
                        <li>Data quality: дубликаты, sampling, несоответствия атрибуции</li>
                        <li>Roadmap: план исправлений и прироста метрик на 4–6 недель</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </footer>
            </article>

            <!-- Tracking setup -->
            <article class="service-card slide-up" id="tracking">
                <figure class="service-card__media">
                    <img src="assets/img/services-tracking.jpg" alt="Настройка отслеживания — GA4, GTM, события, цели, ecommerce" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 13H20M4 17H14M4 7H10M14 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">Настройка отслеживания</h3>
                        <p class="service-card__subtitle">От €1200</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Строим надёжный фундамент данных: корректные события, ecommerce, кросс-домены, server-side и интеграции.</p>
                    <ul>
                        <li>GA4 + GTM: архитектура событий и параметров под ваши KPI</li>
                        <li>Enhanced Ecommerce / custom ecommerce</li>
                        <li>Server-side tagging (по необходимости)</li>
                        <li>Интеграции: CRM/BI, рекламные кабинеты, Consent Mode</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </footer>
            </article>

            <!-- Dashboards -->
            <article class="service-card slide-up" id="dashboards">
                <figure class="service-card__media">
                    <img src="assets/img/services-dashboards.jpg" alt="Дашборды и отчёты — единое окно показателей бизнеса" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="10" width="4" height="10" rx="1" stroke="currentColor" stroke-width="2"/>
                            <rect x="10" y="6" width="4" height="14" rx="1" stroke="currentColor" stroke-width="2"/>
                            <rect x="17" y="2" width="4" height="18" rx="1" stroke="currentColor" stroke-width="2"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">Дашборды и отчёты</h3>
                        <p class="service-card__subtitle">От €800</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Создаём наглядные отчёты с KPI, трендами и атрибуцией для быстрых решений руководства и маркетинга.</p>
                    <ul>
                        <li>Looker Studio / Power BI / Tableau — под вашу инфраструктуру</li>
                        <li>Шаблоны по ролям: руководство, маркетинг, продукт, продажи</li>
                        <li>Алерты аномалий и еженедельные дайджесты</li>
                        <li>Документация и обучение команды</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </footer>
            </article>

            <!-- A/B testing -->
            <article class="service-card slide-up" id="optimization">
                <figure class="service-card__media">
                    <img src="assets/img/services-abtest.jpg" alt="A/B тестирование — системная оптимизация конверсии" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 7H20M8 7L12 17M16 7L12 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">A/B тестирование</h3>
                        <p class="service-card__subtitle">От €1500</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Разворачиваем культуру экспериментов: от воронки гипотез до внедрения победителей и роста выручки.</p>
                    <ul>
                        <li>Backlog гипотез из аналитики и юзабилити-исследований</li>
                        <li>Дизайн, запуск, мониторинг и статистический анализ</li>
                        <li>Эксперименты на ключевых этапах воронки</li>
                        <li>Плейбук масштабирования победивших вариантов</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </footer>
            </article>

            <!-- Consulting -->
            <article class="service-card slide-up" id="consulting">
                <figure class="service-card__media">
                    <img src="assets/img/services-consulting.jpg" alt="Консультации — стратегия аналитики и обучение команды" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L7 7H10V13H14V7H17L12 2Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">Консультации</h3>
                        <p class="service-card__subtitle">€120/час</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Помогаем выстроить стратегию аналитики, процессы и компетенции команды под цели роста.</p>
                    <ul>
                        <li>Стратегическая сессия: цели, KPI, карта метрик</li>
                        <li>Архитектура данных и план внедрений</li>
                        <li>Обучение, регламенты, SLA и контроль качества</li>
                        <li>Сопровождение и ревью решений</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </footer>
            </article>

            <!-- Suite -->
            <article class="service-card slide-up">
                <figure class="service-card__media">
                    <img src="assets/img/services-suite.jpg" alt="Комплексное решение — полный цикл работ под ключ" loading="lazy" width="1280" height="720">
                </figure>
                <header class="service-card__header">
                    <div class="service-card__icon" aria-hidden="true">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 7H21M7 7V17C7 18.1046 7.89543 19 9 19H15C16.1046 19 17 18.1046 17 17V7" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="service-card__title">Комплексное решение</h3>
                        <p class="service-card__subtitle">От €3500</p>
                    </div>
                </header>
                <div class="service-card__content">
                    <p>Всё включено: от аудита и настройки до экспериментов и отчётности. Максимальная скорость внедрения и ROI.</p>
                    <ul>
                        <li>Один поток работ, единая команда и ответственность</li>
                        <li>Приоритетная поддержка и быстрые итерации</li>
                        <li>Фокус на бизнес-результат и прозрачные отчёты</li>
                        <li>Непрерывная оптимизация и развитие</li>
                    </ul>
                </div>
                <footer class="service-card__footer">
                    <a href="#pricing" class="btn btn--primary">Популярный выбор</a>
                </footer>
            </article>
        </div>
    </div>
</section>

<!-- Deliverables Section -->
<section class="section section--alt" id="deliverables">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Что вы получите</h2>
            <p class="text-large text-muted">Конкретные результаты нашей работы</p>
        </div>
        
        <div class="grid grid--2 slide-up">
            <div class="card">
                <div class="card__header">
                    <h3 class="card__title">Документация и отчёты</h3>
                </div>
                <div class="card__content">
                    <ul style="line-height: 1.8;">
                        <li>✅ Детальный аудит-отчёт с рекомендациями</li>
                        <li>✅ Техническая документация по настройкам</li>
                        <li>✅ Инструкции по использованию дашбордов</li>
                        <li>✅ План развития аналитики на 6-12 месяцев</li>
                        <li>✅ Ежемесячные отчёты по результатам</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card__header">
                    <h3 class="card__title">Настроенные системы</h3>
                </div>
                <div class="card__content">
                    <ul style="line-height: 1.8;">
                        <li>✅ Google Analytics 4 с Enhanced Ecommerce</li>
                        <li>✅ Google Tag Manager с триггерами</li>
                        <li>✅ Дашборды в Google Data Studio</li>
                        <li>✅ Настроенные цели и воронки</li>
                        <li>✅ Автоматические алерты и уведомления</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card__header">
                    <h3 class="card__title">Знания и навыки</h3>
                </div>
                <div class="card__content">
                    <ul style="line-height: 1.8;">
                        <li>✅ Обучение команды работе с аналитикой</li>
                        <li>✅ Видеоинструкции по использованию</li>
                        <li>✅ Чек-листы для самостоятельной работы</li>
                        <li>✅ Доступ к базе знаний</li>
                        <li>✅ 30 дней поддержки после завершения</li>
                    </ul>
                </div>
            </div>
            
            <div class="card">
                <div class="card__header">
                    <h3 class="card__title">Результаты и метрики</h3>
                </div>
                <div class="card__content">
                    <ul style="line-height: 1.8;">
                        <li>✅ Увеличение конверсии на 40-150%</li>
                        <li>✅ Снижение стоимости привлечения клиента</li>
                        <li>✅ Рост ROI рекламных кампаний</li>
                        <li>✅ Повышение LTV клиентов</li>
                        <li>✅ Ускорение принятия бизнес-решений</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="section" id="pricing">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Тарифные планы</h2>
            <p class="text-large text-muted">Выберите подходящий уровень сервиса</p>
        </div>
        
        <div class="pricing-cards slide-up">
            <div class="pricing-card">
                <h3 class="pricing-card__title">Стартовый</h3>
                <div class="pricing-card__price">€1,200</div>
                <div class="pricing-card__period">Единоразово</div>
                <ul class="pricing-card__features">
                    <li class="pricing-card__feature">Аудит текущей аналитики</li>
                    <li class="pricing-card__feature">Базовая настройка GA4</li>
                    <li class="pricing-card__feature">Настройка 5 ключевых событий</li>
                    <li class="pricing-card__feature">1 простой дашборд</li>
                    <li class="pricing-card__feature">Документация и инструкции</li>
                    <li class="pricing-card__feature">Email поддержка 30 дней</li>
                </ul>
                <a href="contacts.php" class="btn btn--secondary">Выбрать план</a>
            </div>
            
            <div class="pricing-card pricing-card--featured">
                <h3 class="pricing-card__title">Профессиональный</h3>
                <div class="pricing-card__price">€3,500</div>
                <div class="pricing-card__period">Единоразово</div>
                <ul class="pricing-card__features">
                    <li class="pricing-card__feature">Полный аудит + план развития</li>
                    <li class="pricing-card__feature">GA4 + GTM настройка под ключ</li>
                    <li class="pricing-card__feature">Enhanced Ecommerce</li>
                    <li class="pricing-card__feature">3 дашборда + мобильная версия</li>
                    <li class="pricing-card__feature">Настройка целей и воронок</li>
                    <li class="pricing-card__feature">1 месяц A/B тестирования</li>
                    <li class="pricing-card__feature">Обучение команды</li>
                    <li class="pricing-card__feature">Приоритетная поддержка 60 дней</li>
                </ul>
                <a href="contacts.php" class="btn btn--primary">Выбрать план</a>
            </div>
            
            <div class="pricing-card">
                <h3 class="pricing-card__title">Энтерпрайз</h3>
                <div class="pricing-card__price">€8,000+</div>
                <div class="pricing-card__period">Индивидуально</div>
                <ul class="pricing-card__features">
                    <li class="pricing-card__feature">Стратегия аналитики на 12 месяцев</li>
                    <li class="pricing-card__feature">Полная настройка экосистемы</li>
                    <li class="pricing-card__feature">Интеграция с CRM/ERP</li>
                    <li class="pricing-card__feature">Кастомные дашборды + API</li>
                    <li class="pricing-card__feature">Система экспериментов</li>
                    <li class="pricing-card__feature">Персональный менеджер</li>
                    <li class="pricing-card__feature">Ежемесячная оптимизация</li>
                    <li class="pricing-card__feature">24/7 поддержка</li>
                </ul>
                <a href="contacts.php" class="btn btn--secondary">Обсудить проект</a>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="section section--alt" id="process">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Процесс работы</h2>
            <p class="text-large text-muted">Как проходит сотрудничество от первого звонка до результата</p>
        </div>
        
        <div class="process-steps slide-up">
            <div class="process-step">
                <div class="process-step__number">1</div>
                <h3 class="process-step__title">Консультация</h3>
                <p class="process-step__description">
                    Бесплатная 30-минутная консультация для понимания ваших задач и целей
                </p>
            </div>
            
            <div class="process-step">
                <div class="process-step__number">2</div>
                <h3 class="process-step__title">Анализ и планирование</h3>
                <p class="process-step__description">
                    Изучаем ваш сайт, текущую аналитику и составляем детальный план работ
                </p>
            </div>
            
            <div class="process-step">
                <div class="process-step__number">3</div>
                <h3 class="process-step__title">Выполнение</h3>
                <p class="process-step__description">
                    Реализуем план поэтапно с еженедельными отчётами о прогрессе
                </p>
            </div>
            
            <div class="process-step">
                <div class="process-step__number">4</div>
                <h3 class="process-step__title">Передача и обучение</h3>
                <p class="process-step__description">
                    Обучаем вашу команду работе с настроенными системами и передаём управление
                </p>
            </div>
        </div>
        
        <div class="text-center mt-xl fade-in">
            <div class="card" style="max-width: 600px; margin: 0 auto;">
                <div class="card__content">
                    <h3>Гарантии качества</h3>
                    <div class="grid grid--2" style="margin-top: var(--space-md); gap: var(--space-md);">
                        <div>
                            <strong>🔄 30 дней гарантии</strong><br>
                            <span style="color: var(--muted); font-size: var(--font-size-sm);">Бесплатные доработки в течение месяца</span>
                        </div>
                        <div>
                            <strong>📈 Гарантия результата</strong><br>
                            <span style="color: var(--muted); font-size: var(--font-size-sm);">Или вернём 50% стоимости</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" id="faq">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Часто задаваемые вопросы</h2>
            <p class="text-large text-muted">Ответы на популярные вопросы о наших услугах</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Сколько времени занимает настройка аналитики?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Базовая настройка занимает 1-2 недели, полная настройка с дашбордами — 3-4 недели. Сроки зависят от сложности проекта и количества интеграций.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Нужен ли доступ к сайту для настройки?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Да, для качественной настройки нужен доступ к Google Analytics, Google Tag Manager и возможность добавления кода на сайт. Мы работаем только с необходимыми правами доступа.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Какие инструменты вы используете?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Google Analytics 4, Google Tag Manager, Google Data Studio, Google Optimize, Facebook Pixel, Яндекс.Метрика. Выбор инструментов зависит от специфики вашего бизнеса.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Предоставляете ли обучение команды?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Да, в рамках всех тарифов предусмотрено обучение. Проводим вебинары, создаём видеоинструкции и предоставляем документацию для самостоятельной работы.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Работаете ли с международными проектами?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Да, у нас есть опыт работы с компаниями из разных стран. Настраиваем аналитику с учётом требований GDPR и других международных стандартов.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Что включает в себя поддержка?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Поддержка включает консультации по работе с аналитикой, мелкие доработки, решение технических проблем и обновление настроек при изменениях на сайте.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section analytics-bg" style="background: linear-gradient(135deg, var(--primary) 0%, #1e42cc 100%); color: white;">
    <div class="container">
        <div class="text-center fade-in">
            <h2 style="color: white; margin-bottom: var(--space-md);">Готовы увеличить конверсию?</h2>
            <p class="text-large" style="color: rgba(255,255,255,0.9); margin-bottom: var(--space-xl); max-width: 600px; margin-left: auto; margin-right: auto;">
                Начните с бесплатной консультации — обсудим ваши задачи и подберём оптимальное решение
            </p>
            <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                <a href="contacts.php" class="btn btn--primary btn--large">
                    Получить консультацию
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>