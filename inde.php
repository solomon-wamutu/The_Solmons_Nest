<?php
require_once 'header.php';
echo "<div class='center'>Welcome to Solomon's Nest,";
if ($loggedin) echo " $user, you are logged in";
else
echo ' please sign up or log in';
?>

</div><br>

</div>
<?php include("part/footer.php"); ?>
<!-- <div data-role="footer">
<h4>Web App from <i><a href='http://lpmj.net/5thedition'
target='blank'>Learning PHP MySQL & JavaScript Ed. 5</a></i></h4>
</div> -->
<script src="dist/js/bundle.js"></script>
<script src='javascript.js'></script>
<script src='jquery-2.2.4.min.js'></script>
<script src='jquery.mobile-1.4.5.min.js'></script>
</body>
</html>
