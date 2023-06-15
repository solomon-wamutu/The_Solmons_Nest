<script>
function checkUser(user)
{
if (user.value == '')
{
$('#used').html('&nbsp;')
return
}
$.post
(
'checkuser.php',
{ user : user.value },
function(data)
{
$('#used').html(data)   
}
)
}
</script>
<script src="js/swal.js"></script>
<?php
// session_start();
include('functions.php');
if (isset($SESSION['user'])){ destroySession();}
if (isset($_POST['create_account'])) {

$user = $_POST['user'];
//double encryption
$pass = sha1(md5($_POST['pass']));
$user_number = $_POST['user_number'];
$address = $_POST['address'];

// $result = "INSERT INTO members (user,pass) VALUES (?,?)";
// $stmt = $connection->prepare($result);
// $stmt->bind_param ('ss', $user, $pass);
// $stmt->execute();
                      
                    
// if ($stmt) {
  $result = "SELECT * FROM members WHERE user= ? ";
  $stmt = $connection-> prepare($result);
  $stmt ->bind_param("s", $user);
  $stmt->execute();
  $res = $stmt -> get_result();

  if($res->num_rows > 0){

    // $result = "DELETE FROM members WHERE userid > $res";
    // $stmt = $connection-> prepare($result);
    // $stmt->execute();
    $err = "Dublicate username";
  }
        else {
      $sel = "INSERT INTO members (user,pass,user_number,address) VALUES (?,?,?,?)";
      $stmt = $connection->prepare($sel);
      $stmt->bind_param("ssii",$user,$pass,$user_number,$address);
      $stmt->execute();

      $success = "Account Created";
        }
        // $err = 'That username already exists' ;
      }
    // }

require_once 'functions.php';
$sel = "SELECT * FROM `systemsetting`";
$stmt = $connection->prepare($sel);
$stmt -> execute();
$res = $stmt->get_result();
while($auth = $res->fetch_object()) {
?>
<!DOCTYPE html>
  <html><!-- Log on to codeastro.com for more projects! -->
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <?php include("part/head.php"); ?>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <p><?php echo $auth->sysname; ?> - Sign Up</p>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">Sign Up To Use Our Social System</p>
          <form method="post">
            <div class="input-group mb-3">
              <input type="text" name="user" required class="form-control" placeholder="Full Name">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <!-- <div class="input-group mb-3">
              <input type="text" required name="national_id" class="form-control" placeholder="National ID Number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-tag"></span>
                </div>
              </div>
            </div> -->
            <div class="input-group mb-3">
              <?php
              //PHP function to generate random
              $length = 4;
              $_Number =  substr(str_shuffle('0123456789'), 1, $length); ?>
              <input type="text" name="user_number" value="iBank-CLIENT-<?php echo $_Number; ?>" class="form-control" placeholder="Client Number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="phone" required class="form-control" placeholder="Phone Number">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-phone"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="address" required class="form-control" placeholder="Client Address">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-map-marker"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="pass" required class="form-control" placeholder="Password">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" name="create_account" class="btn btn-success btn-block">Sign Up</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

<!-- <!-- <form method='post'><?php #$error; ?> -->
<!-- action='signup.php' -->
<!-- <div data-role='fieldcontain'>
<label></label>
Please enter your details to sign up
</div> -->
<!-- <div data-role='fieldcontain'>
<label>Username</label>
<input type='text' maxlength='16' name='user' value='$user'onBlur='checkUser(this)'>
<label></label><div id='used'>&nbsp;</div>
</div>
<div data-role='fieldcontain'>
<label>Password</label>
<input type='text' maxlength='16' name='pass' value='$pass'>
</div>
<div data-role='fieldcontain'>
<label></label>
<input data-transition='slide' type='submit' value='Sign Up'>
</div>
</form> -->
</div>
</body>
</html>
<?php
}
?>

