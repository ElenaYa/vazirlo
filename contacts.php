<?php

$page_title = "Контакты";
$page_description = "Свяжитесь с Vazirlo для получения консультации по веб-аналитике. Телефон: +421 940 327 781, Email: hello@vazirlo.com. Офис в Братиславе, Словакия.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Контакты', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/contacts.php']
];

include 'partials/header.php';
?>

<section class="section section--hero analytics-bg">
    <div class="container">
        <div class="hero">
            <div class="hero__grid">
                <div class="hero__media slide-left">
                    <img src="assets/img/contacts-hero.jpg"
                         alt="Команда Vazirlo на связи — современный офис, ноутбуки и консультации по веб-аналитике"
                         loading="eager" width="900" height="560">
                </div>
                <div class="hero__content slide-right">
                    <h1 class="hero__title">Свяжитесь с нами</h1>
                    <p class="hero__subtitle">
                        Готовы обсудить ваш проект? Мы ответим в течение 2 часов в рабочее время
                    </p>
                    <div class="hero__actions">
                        <a href="#contact-form" class="btn btn--primary btn--large">Оставить заявку</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

<section class="section">
    <div class="container">
        <div class="grid grid--2">
            <div class="fade-in">
                <h2>Получить консультацию</h2>
                <p class="text-muted mb-lg">
                    Заполните форму, и мы свяжемся с вами для обсуждения деталей проекта
                </p>
                
                <form class="form" id="contact-form" novalidate>
                    <div class="form__group">
                        <label for="name" class="form__label">Имя *</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="form__input" 
                               required 
                               autocomplete="name"
                               aria-describedby="name-error">
                    </div>
                    
                    <div class="form__group">
                        <label for="email" class="form__label">Email *</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               class="form__input" 
                               required 
                               autocomplete="email"
                               aria-describedby="email-error">
                    </div>
                    
                    <div class="form__group">
                        <label for="company" class="form__label">Компания</label>
                        <input type="text" 
                               id="company" 
                               name="company" 
                               class="form__input" 
                               autocomplete="organization">
                    </div>
                    
                    <div class="form__group">
                        <label for="website" class="form__label">Сайт</label>
                        <input type="url" 
                               id="website" 
                               name="website" 
                               class="form__input" 
                               placeholder="https://example.com"
                               autocomplete="url">
                    </div>
                    
                    <div class="form__group">
                        <label for="goal" class="form__label">Цель проекта *</label>
                        <select id="goal" name="goal" class="form__select" required>
                            <option value="">Выберите цель</option>
                            <option value="audit">Аудит текущей аналитики</option>
                            <option value="setup">Настройка отслеживания</option>
                            <option value="dashboards">Создание дашбордов</option>
                            <option value="optimization">A/B тестирование</option>
                            <option value="consulting">Консультации</option>
                            <option value="complex">Комплексное решение</option>
                            <option value="other">Другое</option>
                        </select>
                    </div>
                    
                    <div class="form__group">
                        <label for="message" class="form__label">Дополнительная информация</label>
                        <textarea id="message" 
                                  name="message" 
                                  class="form__textarea" 
                                  placeholder="Расскажите подробнее о ваших задачах и текущей ситуации"></textarea>
                    </div>
                    
                    <div class="checkbox-group">
                        <input type="checkbox" 
                               id="consent" 
                               name="consent" 
                               class="checkbox" 
                               required>
                        <label for="consent" style="font-size: var(--font-size-sm);">
                            Я согласен на обработку персональных данных в соответствии с 
                            <a href="legal/privacy-gdpr.php" target="_blank" style="color: var(--primary);">политикой конфиденциальности</a> *
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn--primary btn--large" style="width: 100%; margin-top: var(--space-md);">
                        Отправить заявку
                    </button>
                    
                    <p style="color: var(--muted); font-size: var(--font-size-sm); margin-top: var(--space-sm); text-align: center;">
                        Мы ответим в течение 2 часов в рабочее время
                    </p>
                </form>
            </div>
            
            <div class="slide-up">
                <div class="contact-info">
                    <h3 style="margin-bottom: var(--space-lg);">Контактная информация</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21s-7-5.5-7-11a7 7 0 1 1 14 0c0 5.5-7 11-7 11z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="2"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Адрес офиса</strong><br>
                            <a href="https://maps.google.com/?q=Karadžičova+8,+821+08+Bratislava,+Slovakia" target="_blank" rel="noopener noreferrer" style="color: var(--primary);">
                                Karadžičova 8, 821 08 Bratislava, Slovakia
                            </a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.92V19a2 2 0 0 1-2.18 2 19.86 19.86 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.86 19.86 0 0 1 3 4.18 2 2 0 0 1 5 2h2.09a2 2 0 0 1 2 1.72c.12.86.33 1.7.63 2.5a2 2 0 0 1-.45 2.11L8.1 9.9a16 16 0 0 0 6 6l1.57-1.57a2 2 0 0 1 2.11-.45c.8.3 1.64.51 2.5.63A2 2 0 0 1 22 16.92Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Телефон</strong><br>
                            <a href="tel:+421940327781" style="color: var(--primary);">+421 940 327 781</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="5" width="18" height="14" rx="2" stroke="currentColor" stroke-width="2"/>
                                <path d="M3 7l9 6 9-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:hello@vazirlo.com" style="color: var(--primary);">hello@vazirlo.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                                <path d="M12 7v5l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div>
                            <strong>Часы работы</strong><br>
                            Понедельник – Пятница<br>
                            9:00 – 18:00 CET
                        </div>
                    </div>
                    
                    <div style="margin-top: var(--space-xl); padding-top: var(--space-lg); border-top: 1px solid var(--border);">
                        <h4 style="margin-bottom: var(--space-md);">Время ответа</h4>
                        <div style="display: flex; flex-direction: column; gap: var(--space-sm);">
                            <div style="display: flex; justify-content: space-between;">
                                <span>Email:</span>
                                <strong style="color: var(--primary);">2 часа</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span>Телефон:</span>
                                <strong style="color: var(--primary);">Сразу</strong>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span>Консультация:</span>
                                <strong style="color: var(--primary);">Бесплатно</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="text-center mb-xl fade-in">
            <h2>Наш офис в Братиславе</h2>
            <p class="text-muted">Приходите к нам для личной встречи</p>
        </div>
        
        <div class="slide-up">
            <img src="assets/img/map-bratislava.jpg" 
                 alt="Карта расположения офиса Vazirlo в Братиславе по адресу Karadžičova 8"
                 style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
        </div>
        
        <div class="text-center mt-lg">
            <a href="https://maps.google.com/?q=Karadžičova+8,+821+08+Bratislava,+Slovakia" 
               target="_blank" 
               rel="noopener noreferrer"
               class="btn btn--secondary">
                Открыть в Google Maps
            </a>
        </div>
    </div>
</section>

<section class="section section--alt">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Вопросы о сотрудничестве</h2>
            <p class="text-large text-muted">Ответы на частые вопросы</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;" class="slide-up">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Сколько стоит консультация?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Первая 30-минутная консультация абсолютно бесплатна. На ней мы обсуждаем ваши задачи и предлагаем варианты решения.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Работаете ли удалённо?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Да, большинство наших клиентов находится в разных странах. Все консультации и встречи проводим онлайн, что никак не влияет на качество услуг.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Как быстро можете начать работу?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>После согласования деталей и подписания договора можем приступить к работе в течение 3-5 рабочих дней.</p>
                </div>
            </div>
            
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    Какие способы оплаты принимаете?
                    <span class="faq-icon">▼</span>
                </button>
                <div class="faq-answer">
                    <p>Банковский перевод, PayPal. Работаем с предоплатой 50% и окончательным расчётом по завершении работ.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>