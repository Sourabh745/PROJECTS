<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    date_default_timezone_set("Asia/Calcutta");
    $text_message = "<div class='msgln'><span class='chat-time'>".date("h:i:a")."</span> <b class='user-name'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>
