// Function to validate email address using regular expression
function isValidEmail(email) {
    // Regular expression pattern for email validation
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
  
  // Function to validate all form inputs
  function validateForm(event) {
    event.preventDefault(); // Prevent form submission by default
  
    var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
    var email = document.getElementById('email');
    var password = document.getElementById('password');
    var confirmPassword = document.getElementById('confirmPassword');
    var address1 = document.getElementById('address1');
    var address2 = document.getElementById('address2');
    var address3 = document.getElementById('address3');
    var postalCode = document.getElementById('postalCode');
    var country = document.getElementById('country');
  
    // Reset the error styles and messages
    var inputs = document.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
      inputs[i].style.borderColor = '';
      inputs[i].nextSibling.textContent = '';
    }
  
    var isValid = true; // Flag to track form validity
  
    // Check if first name is empty
    if (firstName.value.trim() === '') {
      firstName.style.borderColor = 'red';
      firstName.nextSibling.textContent = 'Please enter your first name';
      isValid = false;
    }
  
    // Check if last name is empty
    if (lastName.value.trim() === '') {
      lastName.style.borderColor = 'red';
      lastName.nextSibling.textContent = 'Please enter your last name';
      isValid = false;
    }
  
    // Check if email is empty and valid
    if (email.value.trim() === '') {
      email.style.borderColor = 'red';
      email.nextSibling.textContent = 'Please enter your email address';
      isValid = false;
    } else if (!isValidEmail(email.value)) {
      email.style.borderColor = 'red';
      email.nextSibling.textContent = 'Please enter a valid email address';
      isValid = false;
    }
  
    // Check if password is empty
    if (password.value.trim() === '') {
      password.style.borderColor = 'red';
      password.nextSibling.textContent = 'Please enter your password';
      isValid = false;
    }
  
    // Check if confirm password is empty and matches the password
    if (confirmPassword.value.trim() === '') {
      confirmPassword.style.borderColor = 'red';
      confirmPassword.nextSibling.textContent = 'Please confirm your password';
      isValid = false;
    } else if (confirmPassword.value !== password.value) {
      confirmPassword.style.borderColor = 'red';
      confirmPassword.nextSibling.textContent = 'Passwords do not match';
      isValid = false;
    }
  
    // Check if address line 1 is empty
    if (address1.value.trim() === '') {
      address1.style.borderColor = 'red';
      address1.nextSibling.textContent = 'Please enter your address line 1';
      isValid = false;
    }
  
    // Check if address line 2 is empty
    if (address2.value.trim() === '') {
      address2.style.borderColor = 'red';
      address2.nextSibling.textContent = 'Please enter your address line 2';
      isValid = false;
    }
  
    // Check if address line 3 is empty
    if (address3.value.trim() === '') {
      address3.style.borderColor = 'red';
      address3.nextSibling.textContent = 'Please enter your address line 3';
      isValid = false;
    }
  
     // Check if postal code is empty or if it not a four-digit number
  if (postalCode.value.trim() === '') {
    postalCode.style.borderColor = 'red';
    postalCode.nextSibling.textContent = 'Please enter your postal code';
    isValid = false;
  } else if (!/^\d{4}$/.test(postalCode.value)) {
    postalCode.style.borderColor = 'red';
    postalCode.nextSibling.textContent = 'Postal Code is not a 4-digit number';
    isValid = false;
  }
  
    // Check if country is empty
    if (country.value.trim() === '') {
      country.style.borderColor = 'red';
      country.nextSibling.textContent = 'Please enter your country';
      isValid = false;
    }
  
    // Submit the form if all inputs are valid
    if (isValid) {
      event.target.submit();
    }
  }
  
  // Attach the form validation function to the form's submit event
  document.querySelector('form').addEventListener('submit', validateForm);
  