<?php
  $message = $_GET["paragrafo"];
  $censured = $_GET["word"];
  $new_message = str_replace($censured, "***", $message, $count);
  var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <!-- Paragfrafo -->
  <p> <?php echo $message; ?> </p>
  <!-- Lunghezza paragrafo -->
  <p> Lunghezza del paragrafo: <?php echo strlen($message); ?> caratteri.</p>

  <!-- Nuovo paragrafo e ricalcolo lunghezza -->
  <div>
    <p>
      Nuovo messaggio :
      <?php echo $new_message; ?>
    </p>
    <p>
      Lunghezza nuovo paragrafo :
      <?php echo strlen($new_message); ?>
    </p>
    <p>
      La parola è stata sostituita 
      <?php
      echo $count
      ?>
      volta/e.
    </p>
  </div>

</body>
</html>