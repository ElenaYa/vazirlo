<?php
/* legal/privacy-gdpr.php */

$page_title = "Политика конфиденциальности GDPR";
$page_description = "Политика конфиденциальности Vazirlo в соответствии с требованиями GDPR. Информация о сборе, обработке и защите персональных данных.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'GDPR', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/legal/privacy-gdpr.php']
];

include '../partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Политика конфиденциальности GDPR</h1>
            <p class="hero__subtitle">
                Информация о том, как мы собираем, используем и защищаем ваши персональные данные
            </p>
            <p style="color: var(--muted); font-size: var(--font-size-sm);">
                Последнее обновление: <?php echo date('d.m.Y'); ?>
            </p>
        </div>
    </div>
</section>

<!-- Introduction -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Введение</h2>
            <p>
                Vazirlo ("мы", "наша компания") серьёзно относится к защите ваших персональных данных. 
                Эта политика конфиденциальности объясняет, как мы собираем, используем, храним и защищаем вашу 
                личную информацию в соответствии с Общим регламентом по защите данных (GDPR) ЕС.
            </p>
            
            <div class="card" style="margin: var(--space-xl) 0;">
                <div class="card__content">
                    <h3>Контактные данные контролёра данных</h3>
                    <p><strong>Компания:</strong> Vazirlo<br>
                    <strong>Адрес:</strong> Karadžičova 8, 821 08 Bratislava, Slovakia<br>
                    <strong>Email:</strong> <a href="mailto:privacy@vazirlo.com">privacy@vazirlo.com</a><br>
                    <strong>Телефон:</strong> <a href="tel:+421940327781">+421 940 327 781</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Data We Collect -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Какие данные мы собираем</h2>
            
            <h3>Персональные данные</h3>
            <p>Мы можем собирать следующие типы персональных данных:</p>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg);">
                <li><strong>Контактная информация:</strong> имя, фамилия, email, телефон, адрес компании</li>
                <li><strong>Профессиональная информация:</strong> должность, название компании, сфера деятельности</li>
                <li><strong>Техническая информация:</strong> IP-адрес, тип браузера, операционная система</li>
                <li><strong>Данные о взаимодействии:</strong> страницы сайта, время посещения, источники трафика</li>
                <li><strong>Коммуникации:</strong> переписка по email, записи звонков (с согласия)</li>
            </ul>
            
            <h3>Особые категории данных</h3>
            <p>
                Мы не собираем особые категории персональных данных (данные о расе, этнической принадлежности, 
                политических взглядах, религиозных убеждениях, состоянии здоровья и т.д.), за исключением 
                случаев, когда это необходимо для выполнения договорных обязательств и у нас есть ваше 
                явное согласие.
            </p>
        </div>
    </div>
</section>

<!-- Legal Basis -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Правовые основания обработки</h2>
            <p>Мы обрабатываем ваши персональные данные на следующих правовых основаниях:</p>
            
            <div class="grid grid--1" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h3>📋 Согласие</h3>
                        <p>Когда вы даёте явное согласие на обработку данных (например, при подписке на рассылку или заполнении контактной формы).</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>📝 Исполнение договора</h3>
                        <p>Для выполнения договорных обязательств при оказании наших услуг веб-аналитики.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>⚖️ Законные интересы</h3>
                        <p>Для защиты наших законных интересов (безопасность, предотвращение мошенничества, улучшение услуг).</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>📊 Правовые обязательства</h3>
                        <p>Для соблюдения применимого законодательства (налоговое, бухгалтерское).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How We Use Data -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Как мы используем данные</h2>
            
            <h3>Цели обработки</h3>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg); line-height: 1.8;">
                <li><strong>Оказание услуг:</strong> выполнение договорных обязательств, настройка аналитики, создание отчётов</li>
                <li><strong>Коммуникации:</strong> ответы на запросы, техническая поддержка, уведомления о услугах</li>
                <li><strong>Маркетинг:</strong> отправка информации о наших услугах (только с согласия)</li>
                <li><strong>Аналитика:</strong> улучшение нашего сайта и услуг, анализ эффективности</li>
                <li><strong>Безопасность:</strong> защита от мошенничества, обеспечение безопасности системы</li>
                <li><strong>Соблюдение закона:</strong> выполнение правовых обязательств</li>
            </ul>
            
            <h3>Автоматизированное принятие решений</h3>
            <p>
                Мы не принимаем автоматизированные решения, которые могут существенно повлиять на вас, 
                включая профилирование. Все важные решения принимаются человеком.
            </p>
        </div>
    </div>
</section>

<!-- Data Sharing -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Передача данных третьим лицам</h2>
            
            <h3>Когда мы передаём данные</h3>
            <p>Мы можем передавать ваши персональные данные в следующих случаях:</p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h4>🔧 Поставщики услуг</h4>
                    <p>Надёжные третьи стороны, которые помогают нам предоставлять услуги:</p>
                    <ul style="margin-top: var(--space-sm);">
                        <li>Облачные сервисы хостинга (AWS, Google Cloud)</li>
                        <li>Email-сервисы (Google Workspace)</li>
                        <li>Системы аналитики (Google Analytics, Hotjar)</li>
                        <li>CRM системы (HubSpot, Salesforce)</li>
                    </ul>
                </div>
            </div>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h4>🏛️ Государственные органы</h4>
                    <p>При наличии законных требований правоохранительных органов или судебных решений.</p>
                </div>
            </div>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h4>🔄 Передача бизнеса</h4>
                    <p>В случае слияния, поглощения или продажи активов компании.</p>
                </div>
            </div>
            
            <h3>Международные передачи</h3>
            <p>
                Некоторые наши поставщики услуг находятся за пределами ЕС. Мы обеспечиваем адекватный 
                уровень защиты через:
            </p>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg);">
                <li>Решения Европейской комиссии об адекватности</li>
                <li>Стандартные договорные положения ЕС</li>
                <li>Схемы сертификации (например, Privacy Shield преемники)</li>
            </ul>
        </div>
    </div>
</section>

<!-- Data Retention -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Сроки хранения данных</h2>
            
            <p>Мы храним ваши персональные данные только в течение необходимого периода:</p>
            
            <div class="grid grid--1" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h3>📋 Клиентские данные</h3>
                        <p><strong>Срок:</strong> В течение действия договора + 3 года после завершения<br>
                        <strong>Основание:</strong> Исполнение договора и налоговые обязательства</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>📧 Маркетинговые данные</h3>
                        <p><strong>Срок:</strong> До отзыва согласия или 2 года бездействия<br>
                        <strong>Основание:</strong> Согласие на маркетинговые коммуникации</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>🌐 Данные веб-сайта</h3>
                        <p><strong>Срок:</strong> 26 месяцев (Google Analytics)<br>
                        <strong>Основание:</strong> Законные интересы в улучшении сайта</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>📞 Записи коммуникаций</h3>
                        <p><strong>Срок:</strong> 1 год<br>
                        <strong>Основание:</strong> Обеспечение качества услуг</p>
                    </div>
                </div>
            </div>
            
            <p>
                По истечении сроков хранения данные удаляются или анонимизируются, если нет правовых 
                оснований для их дальнейшего хранения.
            </p>
        </div>
    </div>
</section>

<!-- Your Rights -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Ваши права по GDPR</h2>
            
            <p>В соответствии с GDPR у вас есть следующие права:</p>
            
            <div class="grid grid--2" style="gap: var(--space-md); margin: var(--space-lg) 0;">
                <div class="card">
                    <div class="card__content">
                        <h3>📋 Право на информацию</h3>
                        <p>Получать прозрачную информацию о том, как мы используем ваши данные.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>👁️ Право на доступ</h3>
                        <p>Запрашивать копию ваших персональных данных, которые мы обрабатываем.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>✏️ Право на исправление</h3>
                        <p>Требовать исправления неточных или неполных данных.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>🗑️ Право на удаление</h3>
                        <p>Требовать удаления ваших данных при определённых обстоятельствах.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>⏸️ Право на ограничение</h3>
                        <p>Ограничить обработку ваших данных в определённых случаях.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>📤 Право на переносимость</h3>
                        <p>Получать ваши данные в структурированном формате и передавать их другому контролёру.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>❌ Право на возражение</h3>
                        <p>Возражать против обработки данных на основании законных интересов.</p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card__content">
                        <h3>🚫 Право отозвать согласие</h3>
                        <p>Отозвать согласие на обработку в любое время без ущерба для законности предыдущей обработки.</p>
                    </div>
                </div>
            </div>
            
            <div class="card" style="margin: var(--space-xl) 0; border-left: 4px solid var(--primary);">
                <div class="card__content">
                    <h3>Как воспользоваться правами</h3>
                    <p>Для реализации ваших прав свяжитесь с нами:</p>
                    <ul style="margin-top: var(--space-sm);">
                        <li><strong>Email:</strong> <a href="mailto:privacy@vazirlo.com">privacy@vazirlo.com</a></li>
                        <li><strong>Телефон:</strong> <a href="tel:+421940327781">+421 940 327 781</a></li>
                    </ul>
                    <p style="margin-top: var(--space-sm);">
                        Мы ответим на ваш запрос в течение одного месяца. В сложных случаях срок может быть 
                        продлён до трёх месяцев с уведомлением о причинах задержки.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Security -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Безопасность данных</h2>
            
            <p>Мы применяем технические и организационные меры для защиты ваших данных:</p>
            
            <h3>Технические меры</h3>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg); line-height: 1.8;">
                <li>Шифрование данных при передаче (SSL/TLS)</li>
                <li>Шифрование данных при хранении</li>
                <li>Регулярные резервные копии</li>
                <li>Системы обнаружения вторжений</li>
                <li>Антивирусная защита</li>
                <li>Межсетевые экраны</li>
            </ul>
            
            <h3>Организационные меры</h3>
            <ul style="margin: var(--space-md) 0; padding-left: var(--space-lg); line-height: 1.8;">
                <li>Ограничение доступа по принципу необходимости</li>
                <li>Обучение сотрудников вопросам безопасности</li>
                <li>Соглашения о конфиденциальности</li>
                <li>Регулярный аудит безопасности</li>
                <li>План реагирования на инциденты</li>
            </ul>
            
            <div class="card" style="margin: var(--space-xl) 0;">
                <div class="card__content">
                    <h3>🚨 Уведомление о нарушениях</h3>
                    <p>
                        В случае нарушения безопасности данных, которое может повлечь высокий риск для ваших 
                        прав и свобод, мы уведомим вас в течение 72 часов после обнаружения нарушения.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Complaints -->
<section class="section">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="fade-in">
            <h2>Подача жалоб</h2>
            
            <p>
                Если вы считаете, что мы нарушаем ваши права на защиту данных, вы имеете право подать жалобу 
                в надзорный орган по защите данных.
            </p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>🇸🇰 Словакия (основной надзорный орган)</h3>
                    <p><strong>Úrad na ochranu osobných údajov Slovenskej republiky</strong><br>
                    Hraničná 12, 820 07 Bratislava<br>
                    <strong>Сайт:</strong> <a href="https://dataprotection.gov.sk" target="_blank">dataprotection.gov.sk</a><br>
                    <strong>Email:</strong> statny.dozor@pdp.gov.sk</p>
                </div>
            </div>
            
            <p>
                Вы также можете обратиться в надзорный орган той страны ЕС, где вы находитесь или где 
                произошло предполагаемое нарушение.
            </p>
        </div>
    </div>
</section>

<!-- Updates -->
<section class="section section--alt">
    <div class="container">
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <h2>Изменения политики</h2>
            
            <p>
                Мы можем время от времени обновлять эту политику конфиденциальности для отражения изменений 
                в наших практиках или по другим операционным, правовым или регулятивным причинам.
            </p>
            
            <div class="card" style="margin: var(--space-lg) 0;">
                <div class="card__content">
                    <h3>Уведомление об изменениях</h3>
                    <ul style="margin-top: var(--space-sm);">
                        <li>Существенные изменения будут доведены до вашего сведения по email</li>
                        <li>Дата последнего обновления указана в начале документа</li>
                        <li>Рекомендуем периодически проверять эту страницу</li>
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
                <h2>Вопросы о конфиденциальности?</h2>
                <p class="text-large text-muted mb-xl">
                    Если у вас есть вопросы об этой политике или о том, как мы обрабатываем ваши данные, свяжитесь с нами
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

<?php include '../partials/footer.php'; ?>