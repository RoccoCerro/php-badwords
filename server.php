<?php
  $message = $_GET["paragrafo"];
  $censured = $_GET["word"];
  $new_message = str_replace($censured, "***", $message);
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
  <p> Lunghezza del paragrafo: <?php echo strlen($message); ?> caratteri.</p>
  <div>
    <p>
      Nuovo messaggio :
      <?php echo $new_message; ?>
    </p>
    <p>
      Lunghezza nuovo paragrafo :
      <?php echo strlen($new_message); ?>
    </p>
  </div>
</body>
</html>