<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="hidden" name="section" value="<?= basename($_SERVER['PHP_SELF']) ?>">

    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" placeholder="Inserisci il nome"><br><br>

    <label for="cognome">Cognome:</label><br>
    <input type="text" id="cognome" name="cognome" placeholder="Inserisci il cognome"><br><br>

    <label for="action">Azione da compiere:</label><br>
    <select id="action" name="action">
      <option value="add">Aggiungi persona</option>
      <option value="delete">Rimuovi persona</option>
    </select><br><br>

    <input type="submit" value="Esegui">
  </form>
</body>
</html>