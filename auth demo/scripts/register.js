(function() {
    /**
     * Get the register button
     */
    var register = document.getElementById('register');
  
    /**
     * Listen for click event on the register button
     */
    register.addEventListener('click', sendForm);
  })();
  
  /**
  * Handle the click event by sending an asynchronous request to the server
  * @param {*} event
  */
  function sendForm(event) {
    /**
     * Prevent the default behavior of the clicking the form submit button
     */
    event.preventDefault();
  
    /**
     * Get the values of the input fields
     */
    var userName = document.getElementById('user-name').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirm-password').value;
    var email = document.getElementById('email').value;
  
    /**
     * Create an object with the user's data
     */
    var user = {
      userName: userName,
      password: password,
      confirmPassword: confirmPassword,
      email: email
    };
  
    /**
     * Send POST request with user's data to registration.php
     */
    sendRequest('./src/register.php', { method: 'POST', data: `data=${JSON.stringify(user)}` }, load, handleError);
  }
  
  /**
  * Handle the received response from the server
  * If there were no errors found on validation, the login.html is loaded.
  * Else the errors are displayed to the user.
  * @param {*} response
  */
  function load(response) {
    var errors = document.getElementById('errors');
    errors.innerHTML = '';
    errors.style.display = 'none';

    window.location = './login.html';
  }

  function handleError(error) {
    var errors = document.getElementById('errors');

    errors.style.display = 'block';
    errors.style.color = 'red';

    errors.innerHTML = error['message'];
  }