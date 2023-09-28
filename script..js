document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('signup-form');
    const requiredFields = form.querySelectorAll('[required]');

    form.addEventListener('submit', function (e) {
        for (const field of requiredFields) {
            if (!field.value.trim()) {
                e.preventDefault(); // Prevent form submission
                field.classList.add('highlight-error');
            }
        }
    });

    // Remove the error highlighting when a required field is edited
    for (const field of requiredFields) {
        field.addEventListener('input', function () {
            field.classList.remove('highlight-error');
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.querySelector('.container');
        container.style.animation = 'none'; // Disable initial animation
        container.offsetHeight; // Trigger reflow
        container.style.animation = null; // Re-enable animation
    
        
    });
    
});
