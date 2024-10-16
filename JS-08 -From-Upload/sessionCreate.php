<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $SESSION ["favcolor"] = "green";
            $SESSION ["favanimal"] = "cat";
            echo "Session variables are set.";
        ?>
    </body>
</html>