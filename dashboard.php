<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php include("part/head.php"); ?>

<div data-role='page'>
        <div data-role='header'>
        <div id='logo' class='center'>S<img src="qw.jpg" alt="" id="robin">lomon's Nest</div>
        <div class='username'><?php $userstr ?></div>
        </div>
        <div data-role='content'>
        <div class='center'>
        <a data-role='button' data-inline='true' data-icon='home'
        data-transition="slide" href='members.php?view=$user'>Home</a>
        <a data-role='button' data-inline='true'
        data-transition="slide" href='members.php'>Members</a>
        <a data-role='button' data-inline='true'
        data-transition="slide" href='friends.php'>Friends</a>
        <a data-role='button' data-inline='true'
        data-transition="slide" href='messages.php'>Messages</a>
        <a data-role='button' data-inline='true'
        data-transition="slide" href='profile.php'>Edit Profile</a>
        <a data-role='button' data-inline='true'
        data-transition="slide" href='logout.php'>Log out</a>
        </div>
        </div>
    </div>
</html>