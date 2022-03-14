<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo <<< TABLE

    <table>
      <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Miasto</th>
      </tr>

    </table>
TABLE;
for ($i=1; $i <= 5 ; $i++) {
  echo <<< ROW
  <table>
    <tr>
      <th>Imię$i</th>
      <th>Nazwisko$i</th>
      <th>Miasto$i</th>
    </tr>

  </table>
ROW;
}
     ?>


  </body>
</html>
