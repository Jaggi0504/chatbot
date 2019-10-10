<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body {
    
    background:url('c.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-position: bottom;
}
h1 {
    background-color:blue;
    padding:20px;
    margin:20px;
}
.color {
    background-color:lightblue;
    padding:10px;
}
</style>
<title>Chat Application</title>
<link type="text/css" rel="stylesheet" href="public/css/main.css"/>
</head>
<body>
<h1 style="text-align:center"> ChatBot Page </h1>
<?php
require('includes/core.inc.php');
?>
<div id="input">
<div id="feedback"></div>

<form action="#" method="post" id="form_input">
<div class="color">
<label><b> Name: </b></label>
<input type="text" name="sender" placeholder ="Enter the name" id="sender"> <br>  <br>

<label> <b> Message: </b> </label>
<input type="text" name="message" placeholder="Enter the Message" id="message"> <br> <br>

<input type="submit" name="submit" class="btn btn-primary" value="Send" id="send"/>
</div>
</form>
</div>
<div id="messages">
</div><!--messages-->
<!--Javascripts-->
<script type="text/javascript" src="scripts/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="scripts/js/auto_chat.js"></script>
<script type="text/javascript" src="scripts/js/send.js"></script>

</body>
</html>