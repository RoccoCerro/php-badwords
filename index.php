<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BadWords</title>
</head>
<body>
  <form action="./server.php">
    <p>
      <label for="message">Paragrafo</label>
      <textarea type="text" id="message" name="paragrafo" placeholder="Inserisci un paragrafo"></textarea>
    </p>
    <p>
      <label for="word">Parola da censusare</label>
      <input type="text" id="word" name="word" placeholder="Parola da censurare">
    </p>

    <button>Invia</button>
  </form>
</body>
</html>