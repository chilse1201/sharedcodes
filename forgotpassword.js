document.querySelector('form').addEventListener('submit', function (event) {
    const adminusername = this.querySelector('input[name="AdminUsername"]');
    const errorContainer = document.createElement('div'); 
    errorContainer.classList.add('error'); // 
    
    // Clear any previous error messages
    const existingError = adminusername.parentElement.querySelector('.error');
    if (existingError) {
        existingError.remove();
    }

    let isValid = true;

    // Check if the email field is empty
    if (adminusername.value.trim() === '') {
        errorContainer.textContent = 'Username is required.';
        adminusername.parentElement.appendChild(errorContainer); 
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(adminusername.value)) {
        errorContainer.textContent = 'Enter a valid username.';
        adminusername.parentElement.appendChild(errorContainer); 
        isValid = false;
    }

    // Prevent form submission if email is invalid
    if (!isValid) {
        event.preventDefault();
    }
});
