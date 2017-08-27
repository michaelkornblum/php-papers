<?php
  $title = "Includes, Requires, and Comments";

  /* Includes brings a file's content into another PHP
   * document. If the file cannot be retrieved,
   * it will issue a warning.
  */

  // include file
  include 'partials/header.php';



  /* Requires work like includes, but if the file
   * cannot be retrived, PHP will issue an error.
  */

  // Require file
  require 'partials/content.html';
  include 'partials/footer.html';
?>
