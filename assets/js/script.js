// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', () => {
    console.log('Secured Data Hub: Script loaded.');

    // Form validation
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', event => {
            const inputs = form.querySelectorAll('input[required]');
            let valid = true;

            inputs.forEach(input => {
                if (!input.value.trim()) {
                    valid = false;
                    input.classList.add('error');
                    alert(`Please fill in the ${input.placeholder} field.`);
                } else {
                    input.classList.remove('error');
                }
            });

            if (!valid) {
                event.preventDefault();
            }
        });
    });

    // File upload size restriction
    const fileInputs = document.querySelectorAll('input[type="file"]');
    fileInputs.forEach(fileInput => {
        fileInput.addEventListener('change', () => {
            const maxFileSize = 5 * 1024 * 1024; // 5MB
            const file = fileInput.files[0];

            if (file && file.size > maxFileSize) {
                alert('The selected file exceeds the 5MB size limit.');
                fileInput.value = ''; // Reset file input
            }
        });
    });

    // Theme toggler example (optional)
    const themeToggleBtn = document.getElementById('theme-toggle');
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
            alert('Theme toggled!');
        });
    }
});
