<?php
//allow the config
define('__CONFIG__', true);
//require the config
require_once "tools/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA.Compatible" content="IE-edge" />
    <meta name="viewport"  content="width-device-width, initial-scale=1" />
    <meta name="robots" content="follow">

    <title>Bienvenido Softmatechers</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/uikits/3.0.0-beta.24/css/uikits.min.css">
  </head>

  <body>

    <div class="uk-section uk-container">
    <?php echo "Hello Softmatechers Today is : ";
    echo date("Y m d");
    ?>

    <p>
        <a href="/login.php">Login</a>
        <a href="/register.php">Register</a>
    </p>

    </div>
<?php require_once "tools/footer.php" ?>
<!--jQuerry is required  -->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit-icons.min.js"> </script>

  </body>
</html>
