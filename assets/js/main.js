document.addEventListener('DOMContentLoaded', function () {
    // Simple form validation and enhancements if needed
    const contactForm = document.getElementById('contactForm');

    if(contactForm) {
        contactForm.addEventListener('submit', function (e) {
            const name = contactForm.name.value.trim();
            const email = contactForm.email.value.trim();
            const subject = contactForm.subject.value.trim();
            const message = contactForm.message.value.trim();
            let errors = [];

            if(name.length === 0) {
                errors.push("Name is required.");
            }
            if(email.length === 0) {
                errors.push("Email is required.");
            } else {
                const emailPattern = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
                if(!emailPattern.test(email)) {
                    errors.push("Invalid email address.");
                }
            }
            if(subject.length === 0) {
                errors.push("Subject is required.");
            }
            if(message.length === 0) {
                errors.push("Message is required.");
            }

            if(errors.length > 0) {
                e.preventDefault();
                alert(errors.join('\n'));
            }
        });
    }
});
