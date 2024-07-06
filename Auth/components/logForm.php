<body>
   <form >
      <div class="group1">
         <img src="/Assets/images/GOK_logo.png" alt="">
         <p id="p">Sign in to your Account</p>
         <button id="reg_info" disabled>Register if you do not have a login account</button>
         <input type="mail" name="" id="mail" placeholder="enter email here">
         <input type="password" name="" id="password" placeholder="enter password here"
            pattern="^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[\W]).*$"
            title="password must be 8 or more characters with at least one number, an
                  uppercase letter, and one special character">
         <i class="fa-regular fa-user" id="user-icon"></i>
         <i class="fa-solid fa-lock " id="lock-icon"></i>
      </div>
      <div class="group2">
         <div class="remember-me">
            <input type="checkbox">
            <p>Remember me</p>
         </div>
         <a href="">Forgot Password?</a>
      </div>
      <div class="group3">
         <button id="login">Login</button>
         <p>Don't Have An Account ?</p>
         <button id="Register" onclick="registerPage()" type="button">Register</button>
      </div>
   </form>
   <script src="/scripts/redirect.js"></script>
</body>
