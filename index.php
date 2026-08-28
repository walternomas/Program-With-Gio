<?php
  // Define a variable to hold the name
  $name = "Gio";

  # This is a simple PHP program that demonstrates how to use variables and output them in HTML.
  /*
    The program defines a variable called $name and assigns it the value "Gio".
    It then outputs an HTML page that includes the value of the $name variable in the title and body.
  */
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program With <?php echo $name; ?>!</title>
  </head>

  <body>
    <h1>
      Welcome to Program With <?= $name ?>!
    </h1>
    <p>
      This is a simple PHP program that greets the user.
    </p>
  </body>

</html>