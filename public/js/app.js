// Alpine.js CDN версія для роботи без білда
document.addEventListener('DOMContentLoaded', function() {
    // Завантажуємо Alpine.js з CDN
    if (!window.Alpine) {
        const script = document.createElement('script');
        script.src = 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js';
        script.defer = true;
        document.head.appendChild(script);
    }
});

// Базова функціональність для форм
document.addEventListener('DOMContentLoaded', function() {
    // Обробка форм
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.textContent = 'Обробка...';
                
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = submitBtn.dataset.originalText || 'Відправити';
                }, 1000);
            }
        });
    });
    
    // Збереження оригінального тексту кнопок
    const submitBtns = document.querySelectorAll('button[type="submit"]');
    submitBtns.forEach(btn => {
        btn.dataset.originalText = btn.textContent;
    });
}); 