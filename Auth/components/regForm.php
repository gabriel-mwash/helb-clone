<form class="register-form" method="post" action="/Auth/components/script.php">
   <div class="group1">
      <img src="/Assets/images/GOK_logo.png" alt="">
      <p id="p">Sign in to your Account</p>
   </div>
   <ol>
      <li>
         <label for="first_name">First Name</label>
         <input id="first_name" type="text" autofocus name="first_name" placeholder="first name here">
      </li>
      <li>
         <label for="last_name">Last Name</label>
         <input id="last_name" type="text" name="last_name" placeholder="last name here">
      </li>
      <li>
         <label for="email">Email </label>
         <input id="email" type="email" name="email" placeholder="user@gmail.com">
      </li>
      <li>
         <label for="password">Password </label>
         <input id="regPassword" type="password" name="password" placeholder="8-10 characters"
            pattern="^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[\W]).*$"
            title="password must be 8 or more characters with at least one number, an
               uppercase letter, and one special character">
      </li>
      <li>
         <label for="password_confirmation">Password Confirmation </label>
         <input id="password_confirmation" type="password" autocomplete="off" 
            name="password_confirmation" placeholder="type your password again"
            pattern="^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[\W]).*$"
            title="password must be 8 or more characters with at least one number, an 
               uppercase letter, and one special character">
      </li>
      <li><input id="signUp" type="submit" name="register_user" value="sign up"></li>
   </ol>
   <script src="/scripts/validatepassword.js"></script>
</form>
