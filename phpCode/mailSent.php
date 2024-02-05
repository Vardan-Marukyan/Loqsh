<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if($_POST['email'] !== ""){
            $message = $_POST['email'];
            $to = "harut@loqsh.net";
            $subject = "New User - " . $message;
            mail($to, $subject, $message);
        }
    }
?>