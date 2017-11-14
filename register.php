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

      <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">

            <form class="uk-form-stacked js-register">
              <h2>Register Form</h2>
          <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">Email</label>
              <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" type="email" required='required' placeholder="Votre nom D'utilisateur ou email">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label" for="form-stacked-text">Password</label>
              <div class="uk-form-controls">
                  <input class="uk-input" id="form-stacked-text" type="password" required = 'required' placeholder="Votre PassPhrase!">
              </div>

              <div class="uk-margin">
                  <label class="uk-form-label" for="form-stacked-text">Password</label>
                  <div class="uk-form-controls">
                      <input class="uk-input" id="form-stacked-text" type="password" required = 'required' placeholder="Confirmer Votre PassPhrase!">
                  </div>

          </div>

          <div class="uk-margin">
              <button class="uk-button uk-button-default" type="submit">Register</button>
          </div>
      </form>

          </div>

    </div>
<?php require_once "tools/footer.php" ?>
<!--jQuerry is required  -->
<script src="https:cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.24/js/uikit-icons.min.js"> </script>

  </body>
</html>
