<?php
function get_msg()
{
include 'connection.php';
$qry="SELECT * FROM `chat` order by `msg_id` desc";
$run=mysqli_query($con,$qry);
$messages=array();
while($message=mysqli_fetch_assoc($run))
{
$messages[]=array('sender'=>$message['sender'], 'message'=>$message['message']);
}
return $messages;
}


function send_msg($sender,$message)
{
if(!empty ($sender) && !empty($message))
{
    include "connection.php";
    $sender=mysqli_real_escape_string($con,$sender);
    $message=mysqli_real_escape_string($con,$message);
    $qery="INSERT INTO `chat`( `sender`, `message`) VALUES ('$sender','$message')";
    if($run=mysqli_query($con,$qery))
    {
        return true;
    }
    else
    {
        return false;
    }
}
else 
{
    return false;
}
}
?>