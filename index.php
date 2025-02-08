<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<style>

img {

float: right;

margin-left: 50px; 

}

</style>
<img src="uploads/Frame98699.png" alt="Background" width="350" height="250"">
<div class="login-page">
    <div class="text-center">
       <h1>SIMS Web APP</h1>
       <h4>Masuk Untuk Membuat Akun Atau Memulai</h4>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Email</label>
              <input type="name" class="form-control" name="username" placeholder="Masukan Email Anda">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="Masukan Password Anda">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-danger" style="border-radius:0%">Masuk</button>
        </div>
    </form>
</div>

<?php include_once('layouts/footer.php'); ?>
