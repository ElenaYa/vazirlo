<?php
/* legal/imprint.php */

$page_title = "Импрессум";
$page_description = "Импрессум Vazirlo - юридическая информация о компании, регистрационные данные, контактная информация и ответственные лица.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Импрессум', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/legal/imprint.php']
];

include '../partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Импрессум</h1>
            <p class="hero__subtitle">
                Юридическая информация и сведения о компании Vazirlo
            </p>
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                Информация актуальна на <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </div>
</section>

<!-- Company Information -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Информация о компании</h2>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>Основные данные</h3>
                    <div class="grid grid--2" style="gap: var(--space-lg); margin-top: var(--space-md);">
                        <div>
                            <p><strong>Название компании:</strong><br>
                             Vazirlo s.r.o.</p>
                            
                            <p><strong>Юридический адрес:</strong><br>
                            Karadžičova 8<br>
                            821 08 Bratislava<br>
                            Словацкая Республика</p>
                            
                            <p><strong>Почтовый адрес:</strong><br>
                            Аналогичен юридическому адресу</p>
                        </div>
                        
                        <div>
                            <p><strong>Регистрационный номер:</strong><br>
                            53 876 549</p>
                            
                            <p><strong>Налоговый номер:</strong><br>
                            2121575439</p>
                            
                            <p><strong>НДС номер:</strong><br>
                            SK2121575439</p>
                            
                            <p><strong>Регистрационный суд:</strong><br>
                            Окружной суд Братислава I</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
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
                                <div class="contact-icon">📞</div>
                                <div>
                                    <strong>Телефон:</strong><br>
                                    <a href="tel:+421940327781">+421 940 327 781</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">✉️</div>
                                <div>
                                    <strong>Email:</strong><br>
                                    <a href="mailto:hello@vazirlo.com">hello@vazirlo.com</a>
                                </div>
                            </div>
                            
                            <div class="contact-item">
                                <div class="contact-icon">🌐</div>
                                <div>
                                    <strong>Веб-сайт:</strong><br>
                                     <a href="https://vazirlo.com" target="_blank">vazirlo.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>Специализированные контакты</h3>
                        <div style="margin-top: var(--space-md);">
                            <p><strong>Юридические вопросы:</strong><br>
                             <a href="mailto:legal@vazirlo.com">legal@vazirlo.com</a></p>
                            
                            <p><strong>Вопросы конфиденциальности:</strong><br>
                             <a href="mailto:privacy@vazirlo.com">privacy@vazirlo.com</a></p>
                            
                            <p><strong>Бухгалтерия и оплата:</strong><br>
                             <a href="mailto:billing@vazirlo.com">billing@vazirlo.com</a></p>
                            
                            <p><strong>Техническая поддержка:</strong><br>
                             <a href="mailto:support@vazirlo.com">support@vazirlo.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Руководство компании</h2>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>Управляющий директор</h3>
                    <div class="grid grid--2" style="gap: var(--space-lg); margin-top: var(--space-md); align-items: center;">
                        <div>
                            <div style="width: 120px; height: 120px; background: var(--border); border-radius: 50%; margin-bottom: var(--space-md);"></div>
                        </div>
                        <div>
                            <p><strong>Михаил Петров</strong><br>
                            Управляющий директор и основатель</p>
                            
                            <p><strong>Образование:</strong><br>
                            Магистр экономики, Университет Коменского</p>
                            
                            <p><strong>Профессиональная квалификация:</strong><br>
                            Google Analytics Certified Professional<br>
                            Google Tag Manager Advanced User</p>
                            
                            <p><strong>Опыт:</strong><br>
                            5+ лет в области веб-аналитики<br>
                            150+ успешных проектов</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Activity -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Деятельность компании</h2>
            
            <h3>Основные виды деятельности</h3>
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <ul style="line-height: 1.8;">
                        <li><strong>74.90</strong> - Прочая профессиональная, научная и техническая деятельность</li>
                        <li><strong>62.02</strong> - Консультирование по компьютерным технологиям</li>
                        <li><strong>63.11</strong> - Обработка данных и размещение веб-сайтов</li>
                        <li><strong>85.59</strong> - Прочее образование</li>
                    </ul>
                </div>
            </div>
            
            <h3>Специализация</h3>
            <p>Компания специализируется на предоставлении услуг в области:</p>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg);">
                <li>Веб-аналитики и анализа данных</li>
                <li>Настройки систем отслеживания</li>
                <li>Создания дашбордов и отчётов</li>
                <li>A/B тестирования и оптимизации конверсии</li>
                <li>Консультирования по цифровому маркетингу</li>
                <li>Обучения работе с аналитическими инструментами</li>
            </ul>
            
            <h3>Лицензии и сертификаты</h3>
            <div class="grid grid--2" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h4>Google Partners</h4>
                        <p>Сертифицированный партнёр Google для работы с Google Analytics и Google Ads</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h4>GDPR Compliance</h4>
                        <p>Полное соответствие требованиям General Data Protection Regulation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Legal Information -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Правовая информация</h2>
            
            <h3>Применимое законодательство</h3>
            <p>Деятельность компании регулируется следующими нормативными актами:</p>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg);">
                <li>Торговый кодекс Словацкой Республики (Act No. 513/1991 Coll.)</li>
                <li>Закон о защите персональных данных (Act No. 18/2018 Coll.)</li>
                <li>General Data Protection Regulation (GDPR)</li>
                <li>Закон об электронной торговле (Act No. 22/2004 Coll.)</li>
                <li>Закон о защите прав потребителей (Act No. 250/2007 Coll.)</li>
            </ul>
            
            <h3>Профессиональная ответственность</h3>
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <p><strong>Страховая компания:</strong> Allianz - Slovenská poisťovňa, a.s.<br>
                    <strong>Полис профессиональной ответственности:</strong> №АL-2024-891456<br>
                    <strong>Покрытие:</strong> €500,000<br>
                    <strong>Действует до:</strong> 31.12.2024</p>
                </div>
            </div>
            
            <h3>Надзорные органы</h3>
            <div class="grid grid--1" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h4>Словацкая торговая инспекция</h4>
                        <p><strong>Адрес:</strong> Prievozská 32, 827 99 Bratislava<br>
                        <strong>Телефон:</strong> +421 2 58 27 21 04<br>
                        <strong>Email:</strong> oi.bratislava@soi.sk<br>
                        <strong>Веб-сайт:</strong> <a href="https://www.soi.sk" target="_blank">www.soi.sk</a></p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h4>Управление по защите персональных данных</h4>
                        <p><strong>Адрес:</strong> Hraničná 12, 820 07 Bratislava<br>
                        <strong>Телефон:</strong> +421 2 32 31 32 14<br>
                        <strong>Email:</strong> statny.dozor@pdp.gov.sk<br>
                        <strong>Веб-сайт:</strong> <a href="https://dataprotection.gov.sk" target="_blank">dataprotection.gov.sk</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dispute Resolution -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Разрешение споров</h2>
            
            <h3>Внесудебное урегулирование</h3>
            <p>
                В соответствии с законодательством ЕС о защите прав потребителей, потребители имеют право 
                на альтернативное разрешение споров.
            </p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h4>Центр арбитража Словакии</h4>
                    <p><strong>Адрес:</strong> Námestie SNP 15, 811 01 Bratislava<br>
                    <strong>Телефон:</strong> +421 2 54 41 21 28<br>
                    <strong>Email:</strong> info@rozhodca.sk<br>
                    <strong>Веб-сайт:</strong> <a href="https://www.rozhodca.sk" target="_blank">www.rozhodca.sk</a></p>
                </div>
            </div>
            
            <h3>Онлайн-платформа ЕС</h3>
            <p>
                Европейская комиссия предоставляет платформу для онлайн-разрешения споров (ODR): 
                <a href="https://ec.europa.eu/consumers/odr" target="_blank">ec.europa.eu/consumers/odr</a>
            </p>
            
            <h3>Контактное лицо по спорам</h3>
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <p><strong>Ответственное лицо:</strong> Михаил Петров<br>
                    <strong>Должность:</strong> Управляющий директор<br>
                    <strong>Email:</strong> <a href="mailto:disputes@vazirlo.com">disputes@vazirlo.com</a><br>
                    <strong>Телефон:</strong> <a href="tel:+421940327781">+421 940 327 781</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Additional Information -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Дополнительная информация</h2>
            
            <h3>Банковские реквизиты</h3>
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <div class="grid grid--2" style="gap: var(--space-lg);">
                        <div>
                            <p><strong>Банк:</strong> Tatra banka, a.s.<br>
                            <strong>SWIFT/BIC:</strong> TATRSKBX<br>
                            <strong>IBAN:</strong> SK89 1100 0000 0026 2805 7001</p>
                        </div>
                        <div>
                            <p><strong>Валюта счёта:</strong> EUR<br>
                            <strong>Назначение платежа:</strong> Услуги веб-аналитики<br>
                            <strong>Плательщик НДС:</strong> Да</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3>Часы работы</h3>
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <div class="grid grid--3" style="gap: var(--space-md);">
                        <div>
                            <h4>Офис</h4>
                            <p>Понедельник - Пятница<br>
                            9:00 - 18:00 CET</p>
                        </div>
                        <div>
                            <h4>Поддержка</h4>
                            <p>Понедельник - Пятница<br>
                            8:00 - 20:00 CET</p>
                        </div>
                        <div>
                            <h4>Экстренная связь</h4>
                            <p>24/7 по email<br>
                            для критических вопросов</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h3>Социальная ответственность</h3>
            <p>Vazirlo придерживается принципов:</p>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg);">
                <li>Этичного ведения бизнеса</li>
                <li>Защиты окружающей среды</li>
                <li>Поддержки местного сообщества</li>
                <li>Равенства возможностей</li>
                <li>Прозрачности и честности</li>
            </ul>
        </div>
    </div>
</section>

<!-- Updates -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Обновления информации</h2>
            
            <p>
                Информация в импрессуме актуализируется при любых изменениях в корпоративной структуре, 
                контактных данных или деятельности компании.
            </p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>История изменений</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li><strong><?php echo date('d.m.Y'); ?>:</strong> Обновление банковских реквизитов</li>
                        <li><strong>15.11.2024:</strong> Добавление информации о страховании</li>
                        <li><strong>01.09.2024:</strong> Обновление контактных данных</li>
                        <li><strong>01.03.2024:</strong> Создание импрессума</li>
                    </ul>
                </div>
            </div>
            
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                За актуальной информацией следите на нашем веб-сайте или обращайтесь к нам напрямую.
            </p>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <div class="text-center">
                <h2>Вопросы?</h2>
                <p class="text-large text-muted mb-xl">
                    Если у вас есть вопросы о юридической информации или деятельности компании
                </p>
                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:legal@vazirlo.com" class="btn btn--primary">
                        Юридические вопросы
                    </a>
                    <a href="../contacts.php" class="btn btn--secondary">
                        Общие вопросы
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../partials/footer.php'; ?>