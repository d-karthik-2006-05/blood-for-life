document.querySelectorAll('.toggle-password').forEach(toggleButton => {
    toggleButton.addEventListener('click', function() {
        // Find the closest input with the class '.password-input' inside the same container
        const passwordInput = this.parentNode.querySelector('.password-input');
        const eyeIcon = this.querySelector('i'); // Assume the icon is inside <i> tag

        if (passwordInput.type === "password") {
            // Change the input type to text to show the password
            passwordInput.type = "text";
            // Change the icon to indicate the password is visible
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        } else {
            // Change the input type back to password to hide the password
            passwordInput.type = "password";
            // Change the icon to indicate the password is hidden
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
            
    }
});
});