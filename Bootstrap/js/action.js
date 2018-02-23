// find all the errors objects
      var username_error = document.getElementById('username_err');
      var email_error = document.getElementById('email_err');
      var number_err = document.getElementById('number_err');

      function checkPromptName(message, error_location, location, color, border) {
      document.getElementById(error_location).textContent = message;
      document.getElementById(error_location).style.color = color;
      document.getElementById(location).style.border = border;
    }
      
      function promptName() {
        var name = document.getElementById('name').value;

        if(name.length == 0) {
          checkPromptName('Name is required', 'username_err', 'name', 'red', '1px solid red');
          return false;
        }

        checkPromptName('Welcome ' + name, 'username_err', 'name', 'green', '1px solid green');

      }

      function promptEmail() {
        var email = document.getElementById('email').value;

        if(email.length == 0) {
          checkPromptName('Email is required', 'email_err', 'email', 'red', '1px solid red');
          return false;
        }

        checkPromptName(email,'email_err', 'email', 'green', '1px solid green');

      }