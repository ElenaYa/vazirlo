/* assets/js/main.js */

// ===== UTILITY FUNCTIONS =====
const $ = (selector) => document.querySelector(selector);
const $$ = (selector) => document.querySelectorAll(selector);

const debounce = (func, wait) => {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
};

const throttle = (func, limit) => {
  let inThrottle;
  return function() {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  }
};

// ===== HEADER FUNCTIONALITY =====
class Header {
  constructor() {
    this.header = $('.header');
    this.burger = $('.burger');
    this.nav = $('.nav');
    this.navLinks = $$('.nav__link');
    this.isMenuOpen = false;
    
    this.init();
  }
  
  init() {
    this.setupScrollShrink();
    this.setupMobileMenu();
    this.setupActiveLinks();
    this.setupKeyboardNavigation();
  }
  
  setupScrollShrink() {
    let lastScrollY = window.scrollY;
    
    const handleScroll = throttle(() => {
      const currentScrollY = window.scrollY;
      
      if (currentScrollY > 100) {
        this.header.classList.add('shrink');
      } else {
        this.header.classList.remove('shrink');
      }
      
      lastScrollY = currentScrollY;
    }, 16);
    
    window.addEventListener('scroll', handleScroll);
  }
  
  setupMobileMenu() {
    if (!this.burger || !this.nav) return;
    
    this.burger.addEventListener('click', () => {
      this.toggleMenu();
    });
    
    // Close menu when clicking on links
    this.navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (this.isMenuOpen) {
          this.closeMenu();
        }
      });
    });
    
    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (this.isMenuOpen && !this.nav.contains(e.target) && !this.burger.contains(e.target)) {
        this.closeMenu();
      }
    });
    
    // Handle escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.isMenuOpen) {
        this.closeMenu();
      }
    });
  }
  
  toggleMenu() {
    if (this.isMenuOpen) {
      this.closeMenu();
    } else {
      this.openMenu();
    }
  }
  
  openMenu() {
    this.burger.classList.add('active');
    this.nav.classList.add('active');
    this.isMenuOpen = true;
    document.body.style.overflow = 'hidden';
    
    // Focus first menu item
    const firstLink = this.nav.querySelector('.nav__link');
    if (firstLink) {
      setTimeout(() => firstLink.focus(), 100);
    }
  }
  
  closeMenu() {
    this.burger.classList.remove('active');
    this.nav.classList.remove('active');
    this.isMenuOpen = false;
    document.body.style.overflow = '';
  }
  
  setupActiveLinks() {
    const currentPath = window.location.pathname;
    
    this.navLinks.forEach(link => {
      const href = link.getAttribute('href');
      if (href && currentPath.includes(href.replace('.php', ''))) {
        link.classList.add('active');
      }
    });
  }
  
  setupKeyboardNavigation() {
    this.navLinks.forEach((link, index) => {
      link.addEventListener('keydown', (e) => {
        let targetIndex;
        
        switch(e.key) {
          case 'ArrowDown':
          case 'ArrowRight':
            e.preventDefault();
            targetIndex = (index + 1) % this.navLinks.length;
            this.navLinks[targetIndex].focus();
            break;
          case 'ArrowUp':
          case 'ArrowLeft':
            e.preventDefault();
            targetIndex = (index - 1 + this.navLinks.length) % this.navLinks.length;
            this.navLinks[targetIndex].focus();
            break;
        }
      });
    });
  }
}

// ===== SMOOTH SCROLLING =====
class SmoothScroll {
  constructor() {
    this.init();
  }
  
  init() {
    // Handle anchor links
    document.addEventListener('click', (e) => {
      const link = e.target.closest('a[href^="#"]');
      if (!link) return;
      
      const href = link.getAttribute('href');
      if (href === '#') return;
      
      const target = $(href);
      if (!target) return;
      
      e.preventDefault();
      this.scrollToElement(target);
    });
  }
  
  scrollToElement(element) {
    const headerHeight = $('.header')?.offsetHeight || 0;
    const elementTop = element.getBoundingClientRect().top + window.pageYOffset;
    const offsetTop = elementTop - headerHeight - 20;
    
    if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
      });
    } else {
      window.scrollTo(0, offsetTop);
    }
  }
}

// ===== INTERSECTION OBSERVER ANIMATIONS =====
class ScrollAnimations {
  constructor() {
    this.elements = $$('.fade-in, .slide-up, .slide-left, .slide-right, .bounce-in');
    this.init();
  }
  
  init() {
    if ('IntersectionObserver' in window) {
      this.setupObserver();
    } else {
      // Fallback: show all elements immediately
      this.elements.forEach(el => el.classList.add('visible'));
    }
    
    // Add staggered delays to grid items
    this.addStaggeredDelays();
  }
  
  setupObserver() {
    const options = {
      threshold: 0.15,
      rootMargin: '0px 0px -30px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          // Don't unobserve to allow repeated animations if needed
          // observer.unobserve(entry.target);
        }
      });
    }, options);
    
    this.elements.forEach(el => {
      observer.observe(el);
    });
  }
  
  addStaggeredDelays() {
    // Add delays to grid items for staggered animation
    const grids = $$('.grid');
    grids.forEach(grid => {
      const items = grid.querySelectorAll('.card, .team-member, .pricing-card');
      items.forEach((item, index) => {
        if (index < 5) {
          item.classList.add(`animation-delay-${index + 1}`);
        }
      });
    });
  }
}

// ===== FORM HANDLING =====
class FormHandler {
  constructor() {
    this.forms = $$('form');
    this.init();
  }
  
  init() {
    this.forms.forEach(form => {
      form.addEventListener('submit', (e) => this.handleSubmit(e));
      
      // Real-time validation
      const inputs = form.querySelectorAll('input, textarea, select');
      inputs.forEach(input => {
        input.addEventListener('blur', () => this.validateField(input));
        input.addEventListener('input', debounce(() => this.validateField(input), 300));
      });
    });
  }
  
  handleSubmit(e) {
    e.preventDefault();
    
    const form = e.target;
    const isValid = this.validateForm(form);
    
    if (isValid) {
      this.submitForm(form);
    }
  }
  
  validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input, textarea, select');
    
    inputs.forEach(input => {
      if (!this.validateField(input)) {
        isValid = false;
      }
    });
    
    return isValid;
  }
  
  validateField(field) {
    const value = field.value.trim();
    const type = field.type || field.tagName.toLowerCase();
    const required = field.hasAttribute('required');
    let isValid = true;
    let errorMessage = '';
    
    // Remove existing error
    this.clearFieldError(field);
    
    // Required validation
    if (required && !value) {
      errorMessage = 'Это поле обязательно для заполнения';
      isValid = false;
    }
    
    // Type-specific validation
    if (value && isValid) {
      switch (type) {
        case 'email':
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailRegex.test(value)) {
            errorMessage = 'Пожалуйста, введите корректный email адрес';
            isValid = false;
          }
          break;
          
        case 'tel':
          const phoneRegex = /^[\+]?[\d\s\-\(\)]{10,}$/;
          if (!phoneRegex.test(value)) {
            errorMessage = 'Пожалуйста, введите корректный номер телефона';
            isValid = false;
          }
          break;
          
        case 'url':
          try {
            new URL(value.startsWith('http') ? value : `https://${value}`);
          } catch {
            errorMessage = 'Пожалуйста, введите корректный URL';
            isValid = false;
          }
          break;
      }
    }
    
    // Show error if invalid
    if (!isValid) {
      this.showFieldError(field, errorMessage);
    }
    
    return isValid;
  }
  
  showFieldError(field, message) {
    field.classList.add('error');
    
    const errorElement = document.createElement('div');
    errorElement.className = 'form__error';
    errorElement.textContent = message;
    errorElement.setAttribute('role', 'alert');
    
    field.parentNode.appendChild(errorElement);
  }
  
  clearFieldError(field) {
    field.classList.remove('error');
    const errorElement = field.parentNode.querySelector('.form__error');
    if (errorElement) {
      errorElement.remove();
    }
  }
  
  submitForm(form) {
    // Simulate form submission
    const submitButton = form.querySelector('button[type="submit"], input[type="submit"]');
    const originalText = submitButton?.textContent || submitButton?.value;
    
    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = 'Отправка...';
    }
    
    // Simulate API call
    setTimeout(() => {
      if (submitButton) {
        submitButton.disabled = false;
        submitButton.textContent = originalText;
      }
      
      // Show success message
      this.showToast('Сообщение успешно отправлено!', 'success');
      
      // Reset form
      form.reset();
      
      // Clear any validation errors
      const errorElements = form.querySelectorAll('.form__error');
      errorElements.forEach(el => el.remove());
      
      const errorFields = form.querySelectorAll('.error');
      errorFields.forEach(field => field.classList.remove('error'));
      
    }, 1500);
  }
  
  showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast toast--${type}`;
    toast.textContent = message;
    toast.setAttribute('role', 'alert');
    
    document.body.appendChild(toast);
    
    // Trigger animation
    setTimeout(() => toast.classList.add('show'), 100);
    
    // Remove after delay
    setTimeout(() => {
      toast.classList.remove('show');
      setTimeout(() => {
        if (toast.parentNode) {
          toast.parentNode.removeChild(toast);
        }
      }, 300);
    }, 4000);
  }
}

// ===== FAQ ACCORDION =====
class FAQ {
  constructor() {
    this.faqItems = $$('.faq-item');
    this.init();
  }
  
  init() {
    this.faqItems.forEach(item => {
      const question = item.querySelector('.faq-question');
      if (question) {
        question.addEventListener('click', () => this.toggleItem(item));
        question.addEventListener('keydown', (e) => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            this.toggleItem(item);
          }
        });
      }
    });
  }
  
  toggleItem(item) {
    const isActive = item.classList.contains('active');
    
    // Close all items
    this.faqItems.forEach(faqItem => {
      faqItem.classList.remove('active');
      const answer = faqItem.querySelector('.faq-answer');
      if (answer) {
        answer.style.maxHeight = '0';
      }
    });
    
    // Open clicked item if it wasn't active
    if (!isActive) {
      item.classList.add('active');
      const answer = item.querySelector('.faq-answer');
      if (answer) {
        answer.style.maxHeight = answer.scrollHeight + 'px';
      }
    }
  }
}

// ===== COOKIE BANNER =====
class CookieBanner {
  constructor() {
    this.banner = $('.cookie-banner');
    this.acceptBtn = $('.cookie-banner__btn--accept');
    this.declineBtn = $('.cookie-banner__btn--decline');
    this.storageKey = 'cookieConsent';
    
    this.init();
  }
  
  init() {
    if (!this.banner) return;
    
    // Check if user has already given consent
    try {
      const consent = localStorage.getItem(this.storageKey);
      if (!consent) {
        this.showBanner();
      } else {
        // Try to parse if it's JSON, if not, treat as old format
        try {
          JSON.parse(consent);
        } catch (e) {
          // Old format, clear and show banner
          localStorage.removeItem(this.storageKey);
          this.showBanner();
        }
      }
    } catch (e) {
      // localStorage not available or other error
      this.showBanner();
    }
    
    // Setup event listeners
    if (this.acceptBtn) {
      this.acceptBtn.addEventListener('click', () => this.acceptCookies());
    }
    
    if (this.declineBtn) {
      this.declineBtn.addEventListener('click', () => this.declineCookies());
    }
    
    // Handle escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && this.banner.classList.contains('show')) {
        this.acceptCookies();
      }
    });
  }
  
  showBanner() {
    setTimeout(() => {
      this.banner.classList.add('show');
      
      // Focus the accept button for accessibility
      if (this.acceptBtn) {
        this.acceptBtn.focus();
      }
    }, 1000);
  }
  
  hideBanner() {
    this.banner.classList.remove('show');
  }
  
  acceptCookies() {
    try {
      localStorage.setItem(this.storageKey, JSON.stringify({
        necessary: true,
        analytics: true,
        marketing: true,
        timestamp: Date.now()
      }));
    } catch (e) {
      console.warn('Could not save cookie preferences:', e);
    }
    
    this.hideBanner();
  }
  
  declineCookies() {
    try {
      localStorage.setItem(this.storageKey, JSON.stringify({
        necessary: true,
        analytics: false,
        marketing: false,
        timestamp: Date.now()
      }));
    } catch (e) {
      console.warn('Could not save cookie preferences:', e);
    }
    
    this.hideBanner();
  }
}

// ===== PRICE CALCULATOR (for services page) =====
class PriceCalculator {
  constructor() {
    this.calculator = $('.price-calculator');
    this.init();
  }
  
  init() {
    if (!this.calculator) return;
    
    const inputs = this.calculator.querySelectorAll('input, select');
    inputs.forEach(input => {
      input.addEventListener('change', () => this.calculatePrice());
      input.addEventListener('input', debounce(() => this.calculatePrice(), 300));
    });
    
    // Initial calculation
    this.calculatePrice();
  }
  
  calculatePrice() {
    const formData = new FormData(this.calculator);
    let basePrice = 0;
    let multiplier = 1;
    
    // Base service price
    const service = formData.get('service');
    switch (service) {
      case 'audit':
        basePrice = 500;
        break;
      case 'setup':
        basePrice = 1200;
        break;
      case 'optimization':
        basePrice = 800;
        break;
      default:
        basePrice = 500;
    }
    
    // Website complexity multiplier
    const complexity = formData.get('complexity');
    switch (complexity) {
      case 'simple':
        multiplier = 1;
        break;
      case 'medium':
        multiplier = 1.5;
        break;
      case 'complex':
        multiplier = 2.5;
        break;
      default:
        multiplier = 1;
    }
    
    const totalPrice = Math.round(basePrice * multiplier);
    
    const priceDisplay = this.calculator.querySelector('.price-display');
    if (priceDisplay) {
      priceDisplay.textContent = `€${totalPrice.toLocaleString()}`;
    }
  }
}

// ===== LAZY LOADING IMAGES =====
class LazyLoader {
  constructor() {
    this.images = $$('img[data-src]');
    this.init();
  }
  
  init() {
    if ('IntersectionObserver' in window) {
      this.setupObserver();
    } else {
      // Fallback: load all images immediately
      this.images.forEach(img => this.loadImage(img));
    }
  }
  
  setupObserver() {
    const options = {
      threshold: 0,
      rootMargin: '50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          this.loadImage(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, options);
    
    this.images.forEach(img => observer.observe(img));
  }
  
  loadImage(img) {
    const src = img.dataset.src;
    if (src) {
      img.src = src;
      img.removeAttribute('data-src');
      img.classList.add('loaded');
    }
  }
}

// ===== PERFORMANCE MONITORING =====
class PerformanceMonitor {
  constructor() {
    this.init();
  }
  
  init() {
    // Monitor page load performance
    window.addEventListener('load', () => {
      setTimeout(() => {
        if ('performance' in window && 'getEntriesByType' in performance) {
          const navigation = performance.getEntriesByType('navigation')[0];
          
          // Log key metrics (in a real app, send to analytics)
          const metrics = {
            loadTime: Math.round(navigation.loadEventEnd - navigation.fetchStart),
            domContentLoaded: Math.round(navigation.domContentLoadedEventEnd - navigation.fetchStart),
            firstPaint: this.getFirstPaint(),
            largestContentfulPaint: this.getLCP()
          };
          
          console.log('Performance Metrics:', metrics);
        }
      }, 0);
    });
  }
  
  getFirstPaint() {
    const paintEntries = performance.getEntriesByType('paint');
    const firstPaint = paintEntries.find(entry => entry.name === 'first-paint');
    return firstPaint ? Math.round(firstPaint.startTime) : null;
  }
  
  getLCP() {
    return new Promise((resolve) => {
      if ('PerformanceObserver' in window) {
        const observer = new PerformanceObserver((list) => {
          const entries = list.getEntries();
          const lastEntry = entries[entries.length - 1];
          resolve(Math.round(lastEntry.startTime));
        });
        
        observer.observe({ entryTypes: ['largest-contentful-paint'] });
        
        // Fallback timeout
        setTimeout(() => resolve(null), 5000);
      } else {
        resolve(null);
      }
    });
  }
}

// ===== DARK MODE TOGGLE (optional enhancement) =====
class DarkMode {
  constructor() {
    this.toggle = $('.dark-mode-toggle');
    this.storageKey = 'darkMode';
    this.init();
  }
  
  init() {
    if (!this.toggle) return;
    
    // Check saved preference
    const savedMode = localStorage.getItem(this.storageKey);
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (savedMode === 'dark' || (!savedMode && prefersDark)) {
      this.enableDarkMode();
    }
    
    // Setup toggle
    this.toggle.addEventListener('click', () => this.toggleMode());
    
    // Listen for system preference changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
      if (!localStorage.getItem(this.storageKey)) {
        if (e.matches) {
          this.enableDarkMode();
        } else {
          this.disableDarkMode();
        }
      }
    });
  }
  
  toggleMode() {
    if (document.body.classList.contains('dark-mode')) {
      this.disableDarkMode();
    } else {
      this.enableDarkMode();
    }
  }
  
  enableDarkMode() {
    document.body.classList.add('dark-mode');
    localStorage.setItem(this.storageKey, 'dark');
    if (this.toggle) {
      this.toggle.setAttribute('aria-label', 'Переключить на светлую тему');
    }
  }
  
  disableDarkMode() {
    document.body.classList.remove('dark-mode');
    localStorage.setItem(this.storageKey, 'light');
    if (this.toggle) {
      this.toggle.setAttribute('aria-label', 'Переключить на тёмную тему');
    }
  }
}

// ===== INITIALIZATION =====
document.addEventListener('DOMContentLoaded', () => {
  // Initialize all components
  new Header();
  new SmoothScroll();
  new ScrollAnimations();
  new FormHandler();
  new FAQ();
  new CookieBanner();
  new PriceCalculator();
  new LazyLoader();
  new PerformanceMonitor();
  new DarkMode();
  
  // Add loaded class to body for CSS transitions
  document.body.classList.add('loaded');
  
  // Announce page load to screen readers
  const announcement = document.createElement('div');
  announcement.textContent = 'Страница загружена';
  announcement.setAttribute('aria-live', 'polite');
  announcement.className = 'visually-hidden';
  document.body.appendChild(announcement);
  
  setTimeout(() => {
    document.body.removeChild(announcement);
  }, 1000);
});

// ===== ERROR HANDLING =====
window.addEventListener('error', (event) => {
  console.error('JavaScript Error:', event.error);
  
  // In production, you might want to send this to an error tracking service
  // trackError(event.error);
});

window.addEventListener('unhandledrejection', (event) => {
  console.error('Unhandled Promise Rejection:', event.reason);
  
  // Prevent the default browser behavior
  event.preventDefault();
});

// ===== EXPORT FOR MODULE USAGE =====
if (typeof module !== 'undefined' && module.exports) {
  module.exports = {
    Header,
    SmoothScroll,
    ScrollAnimations,
    FormHandler,
    FAQ,
    CookieBanner,
    PriceCalculator,
    LazyLoader,
    PerformanceMonitor,
    DarkMode
  };
}