<?php
require('../../includes/functions/connection.php');
require('../../includes/functions/chat_func.php');
$messages = get_msg();
foreach($messages as $msg1)
{
	echo  '<strong>'.$msg1['sender'].'&nbsp;&nbsp;&nbsp;&nbsp;<i>sent</i></strong> <br>';
	echo $msg1['message'].'<br><br>';
}
?>