<?php
session_start();
require_once 'header.php';
echo "<div class='center'>Welcome to Solomon's Nest,";
if ($loggedin) echo " $user, you are logged in";
else
    echo ' please sign up or log in';
?>
echo </div><br>
</div>
<div data-role="footer">
    <h4>Web App from <i><a href='http://lpmj.net/5thedition' target='blank'>Learning PHP MySQL & JavaScript Ed. 5</a></i></h4>
</div>
</body>

</html>