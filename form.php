<body>
   <form >
      <div class="group1">
         <img src="images/GOK_logo.png" alt="">
         <p id="p">Sign in to your Account</p>
         <button id="reg_info" disabled>Register if you do not have a login account</button>
         <i class="fa-regular fa-user" id="user-icon"></i>
         <input type="mail" name="" id="mail" placeholder="enter email here">
         <i class="fa-solid fa-lock " id="lock-icon"></i>
         <input type="password" name="" id="password" placeholder="enter password here">
      </div>
      <div class="group2">
         <input type="checkbox">
         <p>Remember me</p>
         <a href="">Forgot Password?</a>
      </div>
      <div class="group3">
         <button id="login">Login</button>
         <p>Don't Have An Account ?</p>
         <button id="Register" onclick="registerForm()" type="button">Register</button>
      </div>
   </form>
   <script>
      function registerForm() {
         document.location.href="register.php";
         
      }
   </script>
</body>
