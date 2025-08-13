<?php
/* contacts.php */

$page_title = "Контакты";
$page_description = "Свяжитесь с Vazirlo для получения консультации по веб-аналитике. Телефон: +421 940 327 781, Email: hello@vazirlo.com. Офис в Братиславе, Словакия.";

$breadcrumbs = [
    ['name' => 'Главная', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/index.php'],
    ['name' => 'Контакты', 'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/contacts.php']
];

include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="section section--hero">
    <div class="container">
        <div class="text-center fade-in">
            <h1>Свяжитесь с нами</h1>
            <p class="hero__subtitle">
                Готовы обсудить ваш проект? Мы ответим в течение 2 часов в рабочее время
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="section">
    <div class="container">
        <div class="grid grid--2">
            <!-- Contact Form -->
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
            
            <!-- Contact Information -->
            <div class="slide-up">
                <div class="contact-info">
                    <h3 style="margin-bottom: var(--space-lg);">Контактная информация</h3>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <strong>Адрес офиса</strong><br>
                            Karadžičova 8<br>
                            821 08 Bratislava, Slovakia
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <strong>Телефон</strong><br>
                            <a href="tel:+421940327781" style="color: var(--primary);">+421 940 327 781</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <strong>Email</strong><br>
                            <a href="mailto:hello@vazirlo.com" style="color: var(--primary);">hello@vazirlo.com</a>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
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

<!-- Map Section -->
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

<!-- Alternative Contact Methods -->
<section class="section">
    <div class="container">
        <div class="text-center mb-2xl fade-in">
            <h2>Другие способы связи</h2>
            <p class="text-large text-muted">Выберите удобный для вас способ</p>
        </div>
        
        <div class="grid grid--3 slide-up">
            <div class="card text-center">
                <div class="card__content">
                    <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-md); font-size: var(--font-size-xl);">
                        📞
                    </div>
                    <h3>Звонок</h3>
                    <p class="text-muted">Обсудим задачи по телефону</p>
                    <a href="tel:+421940327781" class="btn btn--primary">Позвонить</a>
                </div>
            </div>
            
            <div class="card text-center">
                <div class="card__content">
                    <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-md); font-size: var(--font-size-xl);">
                        ✉️
                    </div>
                    <h3>Email</h3>
                    <p class="text-muted">Отправьте детали проекта</p>
                    <a href="mailto:hello@vazirlo.com" class="btn btn--primary">Написать</a>
                </div>
            </div>
            
            <div class="card text-center">
                <div class="card__content">
                    <div style="background: var(--primary); color: white; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto var(--space-md); font-size: var(--font-size-xl);">
                        📅
                    </div>
                    <h3>Встреча</h3>
                    <p class="text-muted">Личная консультация в офисе</p>
                    <a href="mailto:hello@vazirlo.com?subject=Запрос на встречу" class="btn btn--primary">Записаться</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
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