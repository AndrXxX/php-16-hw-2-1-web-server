<?php
    $homeWorkNum = '2.1';
    $homeWorkCaption = 'Установка и настройка веб-сервера';
    $contacts=json_decode(file_get_contents(__DIR__.'/contacts.json'),true);
    $counter=1;
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>Домашнее задание по теме <?= $homeWorkNum ?> <?= $homeWorkCaption ?></title>
    <meta charset="utf-8">
    <style>
      table {
        border-collapse: collapse;
      }
      th,
      td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <h1>Здравствуйте!</h1>
    <p>Таблица с контактными данными:</p>
    <table>
      <tr>
        <th>№ п/п</th>
        <th>Название</th>
        <th>Адрес</th>
        <th>Телефоны</th>
      </tr>
      <?php foreach ($contacts as $contact): ?>
      <tr>
        <td><?= $counter++ ?></td>
        <td><?= implode(' ', array($contact['lastName'], $contact['firstName'])) ?></td>
        <td><?= implode(', ', array($contact['address']['postalCode'], $contact['address']['city'], $contact['address']['street'], $contact['address']['house'])) ?></td>
        <td><?= implode(', ', $contact['phoneNumber']) ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <hr>
    <p>Содержимое json-файла "<?= __DIR__.'/contacts.json' ?>": </p>
    <pre><?php print_r($contacts) ?></pre>
  </body>
</html>
