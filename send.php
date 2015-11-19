<?php
$mysqli = mysqli_connect("localhost","root","","newsletter");
// Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL";
    }
    $result = mysqli_query($mysqli, "SELECT * FROM poruka");

    while($row = mysqli_fetch_array($result))
    {
   echo '  <div id="wrap">
            <form method="post">
                <div id="email-wrap">
                    <label for="email"> e-mail: </label><br>
                    <input id="email" name="email" type="text" value='. $row["email"] .'><br>
                </div>
                    <label for="poruka"> text poruke: </label><br>
                    <textarea id="poruka" name="text">' . $row["text"] . '</textarea><br>
                <div id="wrap_btn">
                </div>
            </form>
        </div>';
    }

mysqli_close($mysqli);