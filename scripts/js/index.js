
  document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('.login-box form');
    form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission
      
      var password1 = document.querySelector('input[type="password"]');
      var password2 = document.querySelectorAll('input[type="password"]')[1];

      if (password1.value === password2.value) {
        alert('Account successfully created! Please login.');
        window.location.href = '../../index.html'; // Change 'login.html' to your actual login page URL
      } else {
        alert('Passwords do not match. Please try again.');
      }
    });
  });

