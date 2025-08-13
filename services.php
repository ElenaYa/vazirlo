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
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Услуги веб-аналитики</h1>
            <p class="hero__subtitle">
                Полный спектр решений для роста вашего бизнеса через данные
            </p>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="section" id="services">
    <div class="container">
        <div class="grid grid--3 fade-in">
            <div class="card" id="audit">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        🔍
                    </div>
                    <h3 class="card__title">Аудит аналитики</h3>
                    <p class="card__subtitle">От €500</p>
                </div>
                <div class="card__content">
                    <p>Комплексная проверка текущего состояния веб-аналитики с детальными рекомендациями по улучшению.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Анализ настроек Google Analytics</li>
                        <li>Проверка корректности отслеживания</li>
                        <li>Оценка качества данных</li>
                        <li>План оптимизации</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </div>
            </div>
            
            <div class="card" id="tracking">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        ⚙️
                    </div>
                    <h3 class="card__title">Настройка отслеживания</h3>
                    <p class="card__subtitle">От €1200</p>
                </div>
                <div class="card__content">
                    <p>Полная настройка систем аналитики для корректного сбора данных о пользователях и конверсиях.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Google Analytics 4 + GTM</li>
                        <li>Enhanced Ecommerce</li>
                        <li>Отслеживание событий</li>
                        <li>Настройка целей и воронок</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </div>
            </div>
            
            <div class="card" id="dashboards">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        📊
                    </div>
                    <h3 class="card__title">Дашборды и отчёты</h3>
                    <p class="card__subtitle">От €800</p>
                </div>
                <div class="card__content">
                    <p>Автоматические дашборды с ключевыми метриками для ежедневного мониторинга эффективности бизнеса.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Google Data Studio дашборды</li>
                        <li>Кастомные отчёты</li>
                        <li>Автоматические алерты</li>
                        <li>Mobile-friendly интерфейс</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </div>
            </div>
            
            <div class="card" id="optimization">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        🧪
                    </div>
                    <h3 class="card__title">A/B тестирование</h3>
                    <p class="card__subtitle">От €1500</p>
                </div>
                <div class="card__content">
                    <p>Системное тестирование гипотез для увеличения конверсии и прибыли на основе статистически значимых данных.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Аудит UX и выявление гипотез</li>
                        <li>Дизайн экспериментов</li>
                        <li>Запуск и мониторинг тестов</li>
                        <li>Анализ результатов и внедрение</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </div>
            </div>
            
            <div class="card" id="consulting">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        💡
                    </div>
                    <h3 class="card__title">Консультации</h3>
                    <p class="card__subtitle">€120/час</p>
                </div>
                <div class="card__content">
                    <p>Экспертные консультации по стратегии развития аналитики и оптимизации конверсии.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Стратегия аналитики</li>
                        <li>Обучение команды</li>
                        <li>Ревью текущих процессов</li>
                        <li>Помощь в выборе инструментов</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--secondary">Подробнее</a>
                </div>
            </div>
            
            <div class="card">
                <div class="card__header">
                    <div style="background: var(--primary); color: white; width: 48px; height: 48px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: var(--font-size-xl); margin-bottom: var(--space-md);">
                        🎯
                    </div>
                    <h3 class="card__title">Комплексное решение</h3>
                    <p class="card__subtitle">От €3500</p>
                </div>
                <div class="card__content">
                    <p>Полный цикл работ от аудита до запуска экспериментов — всё под ключ для максимального результата.</p>
                    <ul style="margin: var(--space-md) 0; padding-left: var(--space-md);">
                        <li>Все услуги в комплексе</li>
                        <li>Приоритетная поддержка</li>
                        <li>Гарантия результата</li>
                        <li>Ежемесячная оптимизация</li>
                    </ul>
                </div>
                <div class="card__footer">
                    <a href="#pricing" class="btn btn--primary">Популярный выбор</a>
                </div>
            </div>
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
<section class="section analytics-bg">
    <div class="container">
        <div class="text-center fade-in">
            <h2>Готовы увеличить конверсию?</h2>
            <p class="text-large text-muted mb-xl">
                Начните с бесплатной консультации — обсудим ваши задачи и подберём оптимальное решение
            </p>
            <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                <a href="contacts.php" class="btn btn--primary btn--large">
                    Получить консультацию
                </a>
                <a href="tel:+421940327781" class="btn btn--secondary btn--large">
                    Позвонить сейчас
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>