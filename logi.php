<?php
//session_start();
require_once 'header.php';
    $error = $user = $pass = "";
        if (isset($_POST['login']))
            {
                $user = sanitizeString($_POST['user']);
                $pass = sanitizeString(sha1(md5(($_POST['pass']))));
                      if ($user == "" || $pass == "")$err = 'Not all fields were entered';
                      else
                          {
                            $stmt = $connection->prepare("SELECT user,pass,userid FROM members WHERE user =? AND pass =?");   
                            $stmt->bind_param("ss",$user,$pass);
                            $stmt->execute();
                            $stmt->bind_result($user,$pass,$userid);      
                            $rs = $stmt->fetch();
                           $_SESSION['userid'] = $userid;   
                           if($rs){
                            if(!headers_sent()){
                              header("Location:dashboard.php");
                            }
                            else{
                              $success = "Successfully logged in";
                              echo "<script> alert('Welcome $user');window.setTimeout(function(){
                                window.location.href = 'http://localhost:8080/Solomons_nest/dashboard.php';
                                
                              }, 3000); </script>";
                            }
                           }    
                           else {
                           
                            $err = "Access Denied Please Check Your Credentials";
                          }    


}
}
?>


<div id="scaleUp" class="modal">
<form method="post" action="login.php" class="modal-content animate">
    <div class="imgcontainer">
      <span onclick="document.getElementById('scaleUp').style.display='none'" title='Close modal' class="close">&times;</span>
      <img src="./img/admin-icn.png" alt="" class="avatar">
    </div>
        <div class="container">

                <label for="user"><b>Username:</b></label>
                <input type="text" name="user" id="user" placeholder="Enter Username" required>

                <label for="pass"><b>Username:</b></label>
                <input type="password" name="pass" id="pass" placeholder="Enter Password" required>

                <button type="submit" name="login" class="btn btn-success btn-block">Log In</button>

        </div>
            
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="remember">
                  <label for="remember">
                    Remember Me
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                
              </div>
              <!-- /.col -->
            </div>
      </div>
 </form>

</div>
<script>
  var modal = document.getElementById('scaleUp');
  var mode = document.getElementsByClassName("close");
  window.onclick = function(event) {
    if(event.target == modal || event.target == mode)  {
      modal.style.display = "none";
      mode.style.display = "none";
    }
  }
</script>
</body>
</html>