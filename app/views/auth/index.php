<div class="form-group">
     <h1>SPRK</h1>
     <?php Session::flash(); ?>
     <form action="<?= BASE_URL; ?>/auth/login" method="post">

          <div class="form-control">
               <input class="form-input" type="text" name="username" id="username" placeholder="Username">
          </div>

          <div class="form-control">
               <input class="form-input" type="password" name="password" id="password" placeholder="Password">
          </div>

          <div class="form-control">
               <input class="btn" type="submit" value="Login" id="login">
          </div>
     </form>

     <a href="<?= BASE_URL; ?>/auth/register" class="link">Not registered ? Sign Up here</a>
</div>