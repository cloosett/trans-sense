(function ($) {
    "use strict";

    const errorMessages = {
        required: "Це поле є обов'язковим",
        email: "Введіть коректну електронну адресу",
        phone: "Введіть коректний номер телефону",
        minlength: "Мінімальна довжина {0} символів",
        maxlength: "Максимальна довжина {0} символів",
        pattern: "Невірний формат даних"
    };

    function formatMessage(template, ...args) {
        return template.replace(/{(\d+)}/g, (match, number) => {
            return typeof args[number] !== 'undefined' ? args[number] : match;
        });
    }

    function validatePhone(value) {
        const phoneRegex = /^(\+?380|0)?[0-9]{9}$/;
        return phoneRegex.test(value.replace(/[\s\-\(\)]/g, ''));
    }

    function validateName(value) {
        const nameRegex = /^[а-яА-ЯїЇєЄіІa-zA-Z\s]+$/;
        return nameRegex.test(value);
    }

    function validateEmail(value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(value);
    }

    function showError(element, message) {
        const $element = $(element);
        const $inputBox = $element.closest('.input-box');
        
        $inputBox.find('.error-message').remove();
        $element.removeClass('error');
        
        $element.addClass('error');
        $inputBox.append(`<div class="error-message">${message}</div>`);
    }

    function hideError(element) {
        const $element = $(element);
        const $inputBox = $element.closest('.input-box');
        
        $inputBox.find('.error-message').remove();
        $element.removeClass('error');
    }

    function validateField(element) {
        const $element = $(element);
        const value = $element.val().trim();
        const name = $element.attr('name');
        const required = $element.attr('required') !== undefined;

        if (required && !value) {
            showError(element, errorMessages.required);
            return false;
        }

        if (!required && !value) {
            hideError(element);
            return true;
        }

        switch (name) {
            case 'name':
                if (!validateName(value)) {
                    showError(element, "Ім'я може містити тільки літери та пробіли");
                    return false;
                }
                if (value.length < 2) {
                    showError(element, formatMessage(errorMessages.minlength, 2));
                    return false;
                }
                break;

            case 'phone':
                if (!validatePhone(value)) {
                    showError(element, "Введіть коректний український номер телефону");
                    return false;
                }
                break;

            case 'email':
                if (!validateEmail(value)) {
                    showError(element, errorMessages.email);
                    return false;
                }
                break;

            case 'message':
                if (value.length < 10) {
                    showError(element, formatMessage(errorMessages.minlength, 10));
                    return false;
                }
                break;
        }

        hideError(element);
        return true;
    }

    function validateSelect(element) {
        const $element = $(element);
        const value = $element.val();
        const required = $element.attr('required') !== undefined;

        if (required && (!value || value === '')) {
            const $selectBox = $element.closest('.select-box');
            $selectBox.find('.error-message').remove();
            $selectBox.append(`<div class="error-message">${errorMessages.required}</div>`);
            return false;
        }

        const $selectBox = $element.closest('.select-box');
        $selectBox.find('.error-message').remove();
        return true;
    }

    function initFormValidation() {
        $(document).on('input blur', '.contact-form-validated input[type="text"], .contact-form-validated input[type="email"], .contact-form-validated textarea', function() {
            validateField(this);
        });

        $(document).on('change', '.contact-form-validated select', function() {
            validateSelect(this);
        });

        $(document).on('input', 'input[name="phone"]', function() {
            let value = $(this).val();
            value = value.replace(/[^0-9+\s\-\(\)]/g, '');
            $(this).val(value);
        });

        $(document).on('input', 'input[name="name"]', function() {
            let value = $(this).val();
            value = value.replace(/[^а-яА-ЯїЇєЄіІa-zA-Z\s]/g, '');
            $(this).val(value);
        });

        $(document).on('submit', '.contact-form-validated', function(e) {
            e.preventDefault();
            
            const $form = $(this);
            let isValid = true;

            $form.find('input[type="text"], input[type="email"], textarea').each(function() {
                if (!validateField(this)) {
                    isValid = false;
                }
            });

            $form.find('select').each(function() {
                if (!validateSelect(this)) {
                    isValid = false;
                }
            });

            if (isValid) {
                submitForm($form);
            } else {
                const $firstError = $form.find('.error').first();
                if ($firstError.length) {
                    $('html, body').animate({
                        scrollTop: $firstError.offset().top - 100
                    }, 500);
                }
            }
        });
    }

    function submitForm($form) {
        const formData = new FormData($form[0]);
        const submitButton = $form.find('button[type="submit"]');
        const originalText = submitButton.html();

        submitButton.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Відправка...');

        $.ajax({
            url: $form.attr('action'),
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: 'Успішно!',
                        text: response.message || 'Ваше повідомлення надіслано успішно!',
                        icon: 'success',
                        confirmButtonText: 'Добре',
                        confirmButtonColor: '#FD5523',
                        timer: 8000,
                        timerProgressBar: true,
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });

                    $form[0].reset();
                    $form.find('.nice-select .current').text($form.find('.nice-select .current').data('placeholder') || 'Оберіть варіант');
                } else {
                    Swal.fire({
                        title: 'Помилка!',
                        text: response.message || 'Виникла помилка при відправці. Спробуйте ще раз.',
                        icon: 'error',
                        confirmButtonText: 'Спробувати ще раз',
                        confirmButtonColor: '#FD5523',
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    });
                }
            },
            error: function() {
                Swal.fire({
                    title: 'Помилка!',
                    text: 'Виникла помилка при відправці. Перевірте підключення до інтернету та спробуйте ще раз.',
                    icon: 'error',
                    confirmButtonText: 'Спробувати ще раз',
                    confirmButtonColor: '#FD5523',
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
            },
            complete: function() {
                submitButton.prop('disabled', false).html(originalText);
            }
        });
    }

    $(document).ready(function() {
        initFormValidation();
    });

})(jQuery); 