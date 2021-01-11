<div class="form-user">
     <h1>SPRK</h1>
     <?php Session::flash(); ?>
     <form action="<?= BASE_URL; ?>/auth/login" method="post">
          <div class="form-input">
               <input type="text" name="username" id="username" placeholder="Username">

          </div>
          <div class="form-input">
               <input type="password" name="password" id="password" placeholder="Password">
          </div>
          <div class="form-input">
               <input class="btn" type="submit" value="Login" id="login">
          </div>
     </form>

     <a href="<?= BASE_URL; ?>/auth/register" class="link">Not registered ? Sign Up here</a>
</div>