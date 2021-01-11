<div class="form-user">
     <h1>SPRK</h1>
     <form action="<?= BASE_URL; ?>/auth/register" method="post"></form>
     <input type="text" name="username" id="username" placeholder="Username">
     <input type="text" name="fullname" id="fullname" placeholder="Full Name">
     <input type="password" name="password" id="password" placeholder="Password">
     <input type="submit" value="Login" class="login">

     <a href="<?= BASE_URL; ?>/">Login</a>
</div>