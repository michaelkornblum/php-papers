<? $title = "Includes, Requires, and Comments"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Includes, Requires and Comments</title>
</head>
<body>
  <?php
    /* Includes brings a files content into another PHP
     * document. If the file cannot be retrieved,
     * it will issue a warning.
    */

    // Include file
    //include 'content.html';

    // This will issue a warning
    //include 'contents.html';

    /* Requires work like includes but if the file
     * cannot be retrived, PHP will issue an error.
    */

    // Require file
    require 'content.html';

    // This will issue an error
    //require('contents.html');
  ?>
</body>
</html>
