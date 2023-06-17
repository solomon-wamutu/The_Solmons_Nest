<?php
require_once 'header.php';
if (isset($_SESSION['user'])) {
    session_destroy();
    echo "<br><div class='center'>You have been logged out. Please<a href ='index.php' data-transition='slide' >click here</a> to refresh the screen.</div>";
} else echo "<div class='center'>You cannot log out because you are not logged in</div>";
?>
</div>
</body>

</html>