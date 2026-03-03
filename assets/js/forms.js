/**
 * Forms JS - Handles custom form elements and interactions
 */

document.addEventListener('DOMContentLoaded', function () {

    // 1. Custom Multi-select Logic (Handles multiple instances)
    const multiselectWrappers = document.querySelectorAll('.custom-multiselect-wrapper');

    multiselectWrappers.forEach(wrapper => {
        const toggle = wrapper.querySelector('.multiselect-header');
        const checkboxes = wrapper.querySelectorAll('.multiselect-options input[type="checkbox"]');
        const selectedText = wrapper.querySelector('.selected-text');

        if (toggle) {
            // Toggle Dropdown
            toggle.addEventListener('click', function (e) {
                e.stopPropagation();
                // Close other open multi-selects first
                multiselectWrappers.forEach(otherWrapper => {
                    if (otherWrapper !== wrapper) {
                        otherWrapper.classList.remove('active');
                    }
                });
                wrapper.classList.toggle('active');
            });

            // Update display text when checkboxes are changed
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    const selected = Array.from(checkboxes)
                        .filter(cb => cb.checked)
                        .map(cb => cb.parentElement.querySelector('span').textContent);

                    if (selected.length === 0) {
                        selectedText.textContent = 'Select a Service';
                        selectedText.style.color = '#64748b'; // placeholder color
                    } else if (selected.length <= 2) {
                        selectedText.textContent = selected.join(', ');
                        selectedText.style.color = '#002868'; // brand blue color
                    } else {
                        selectedText.textContent = `${selected.length} Services Selected`;
                        selectedText.style.color = '#002868';
                    }
                });
            });
        }
    });

    // Close all dropdowns when clicking outside
    document.addEventListener('click', function (e) {
        multiselectWrappers.forEach(wrapper => {
            if (!wrapper.contains(e.target)) {
                wrapper.classList.remove('active');
            }
        });
    });

    // 2. AJAX Form Submission (Handles multiple instances)
    const heroForms = document.querySelectorAll('.hero-form');

    heroForms.forEach(form => {
        const formMessage = form.closest('.hero-contact-card').querySelector('.form-message');
        const nonceInput = form.querySelector('input[name="hero_nonce"]');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.textContent;

            // Loading state
            submitBtn.disabled = true;
            submitBtn.textContent = 'Sending...';
            if (formMessage) {
                formMessage.style.display = 'none';
            }

            const formData = new FormData(form);
            formData.append('action', 'handle_hero_form');
            if (nonceInput) {
                formData.append('nonce', nonceInput.value);
            }

            fetch(seoFormVars.ajax_url, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (formMessage) {
                        formMessage.style.display = 'block';
                        formMessage.textContent = data.data.message;
                        formMessage.className = data.success ? 'alert alert-success' : 'alert alert-danger';
                    }

                    if (data.success) {
                        form.reset();
                        // Reset selected text if multiselect is present
                        const selectedText = form.querySelector('.selected-text');
                        if (selectedText) {
                            selectedText.textContent = 'Select a Service';
                            selectedText.style.color = '#64748b';
                        }
                        submitBtn.textContent = 'Msg Sent!';
                    } else {
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalBtnText;
                    }
                })
                .catch(error => {
                    if (formMessage) {
                        formMessage.style.display = 'block';
                        formMessage.className = 'alert alert-danger';
                        formMessage.textContent = 'Error occurred. Please try again.';
                    }
                    submitBtn.disabled = false;
                    submitBtn.textContent = originalBtnText;
                });
        });
    });

});
