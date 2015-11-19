<?php
$email = $_POST["email1"];
$text = $_POST["text1"];

        $mysqli = mysqli_connect("localhost", "root", "", "newsletter");
        if ($mysqli->connect_error)
            printf ($this->errno().": ". $this->error());

        $text = mysqli_real_escape_string($mysqli , $text);
        $email = mysqli_real_escape_string($mysqli , $email);

        $sql = "INSERT INTO poruka (email, text) VALUES (('$email'), ('$text'))";

        if (mysqli_query($mysqli, $sql)) {
            echo "Success";
        } else {
            echo "Error";
        }
mysqli_close($mysqli);
