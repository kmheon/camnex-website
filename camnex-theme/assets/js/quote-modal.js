/**
 * CamneX Bangladesh — Quote Modal & AJAX Lead Submission Script
 *
 * Provides:
 * 1. Accessible open/close handlers with Escape key and focus trap
 * 2. Form submission via fetch() with camnexTheme.ajaxUrl and nonce
 * 3. Loading state and accessible feedback announcements
 *
 * @package CamneX
 * @version 1.0.0
 */

(() => {
    "use strict";

    document.addEventListener("DOMContentLoaded", () => {
        const modal = document.getElementById("cx-quote-modal");
        const closeBtn = document.getElementById("cxQuoteModalClose");
        const form = document.getElementById("cxQuoteForm");
        const feedback = document.getElementById("cxQuoteFeedback");
        const submitBtn = document.getElementById("cxQuoteSubmitBtn");

        if (!modal) {
            return;
        }

        /**
         * Open Modal
         */
        const openModal = () => {
            modal.classList.add("cx-modal-active");
            modal.setAttribute("aria-hidden", "false");
            document.body.style.overflow = "hidden";

            // Focus on first input
            const firstInput = modal.querySelector("#cx_quote_name");
            if (firstInput) {
                firstInput.focus();
            }

            if (window.lucide && typeof window.lucide.createIcons === "function") {
                window.lucide.createIcons();
            }
        };

        /**
         * Close Modal
         */
        const closeModal = () => {
            modal.classList.remove("cx-modal-active");
            modal.setAttribute("aria-hidden", "true");
            document.body.style.overflow = "";
        };

        // Attach to all elements with [data-open-quote-modal] or href="#quote-modal"
        document.querySelectorAll("[data-open-quote-modal], a[href='#quote-modal']").forEach((trigger) => {
            trigger.addEventListener("click", (e) => {
                e.preventDefault();
                openModal();
            });
        });

        if (closeBtn) {
            closeBtn.addEventListener("click", closeModal);
        }

        // Close when clicking outside dialog content
        modal.addEventListener("click", (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Close on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && modal.classList.contains("cx-modal-active")) {
                closeModal();
            }
        });

        // Handle AJAX Form Submission
        if (form) {
            form.addEventListener("submit", async (e) => {
                e.preventDefault();

                if (!submitBtn) return;

                const nameInput = form.querySelector("#cx_quote_name");
                const phoneInput = form.querySelector("#cx_quote_phone");

                if (!nameInput.value.trim() || !phoneInput.value.trim()) {
                    showFeedback("Please provide both your name and contact phone number.", "error");
                    return;
                }

                submitBtn.disabled = true;
                const originalBtnText = submitBtn.innerHTML;
                submitBtn.innerHTML = `<span>Submitting...</span>`;

                const formData = new FormData(form);
                formData.append("action", "camnex_submit_quote");
                
                // Add localized security nonce if available
                if (window.camnexTheme && window.camnexTheme.nonce) {
                    formData.append("nonce", window.camnexTheme.nonce);
                }

                const endpoint = (window.camnexTheme && window.camnexTheme.ajaxUrl) ? window.camnexTheme.ajaxUrl : "/wp-admin/admin-ajax.php";

                try {
                    const response = await fetch(endpoint, {
                        method: "POST",
                        body: formData
                    });

                    const result = await response.json();

                    if (result.success) {
                        showFeedback(result.data.message || "Thank you! Your inquiry has been sent.", "success");
                        form.reset();
                        setTimeout(() => {
                            closeModal();
                            feedback.style.display = "none";
                        }, 3000);
                    } else {
                        showFeedback(result.data.message || "An error occurred. Please call +880 1540-535150.", "error");
                    }
                } catch (error) {
                    showFeedback("Connection issue. Please call our hotline directly at +880 1540-535150.", "error");
                } finally {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                    if (window.lucide) {
                        window.lucide.createIcons();
                    }
                }
            });
        }

        function showFeedback(msg, type) {
            if (!feedback) return;
            feedback.style.display = "block";
            feedback.className = `cx-form-feedback cx-feedback-${type}`;
            feedback.textContent = msg;
        }
    });
})();
