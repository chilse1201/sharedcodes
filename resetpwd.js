function validateForm() {
    const newPassword = document.getElementById('newpwd').value;
    const confirmPassword = document.getElementById('confirmpwd').value;
  
    // Error message elements
    const newPasswordError = document.getElementById('newpwd-error');
    const confirmPasswordError = document.getElementById('confirmpwd-error');
  
    // Reset error messages
    newPasswordError.textContent = '';
    confirmPasswordError.textContent = '';
  
    let isValid = true;
  
    // Check if passwords are at least 8 characters
    if (newPassword.length < 8) {
      newPasswordError.textContent = 'Password must be at least 8 characters long.';
      isValid = false;
    }
  
    // Check if passwords match
    if (newPassword !== confirmPassword) {
      confirmPasswordError.textContent = 'Passwords do not match.';
      isValid = false;
    }
  
    return isValid;
  }
  