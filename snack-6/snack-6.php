<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Snack 6</title>
</head>
<body>
  <!-- Snack 6
  Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.     -->
  
  <?php

    $db = [
      'teachers' => [
          [
              'name' => 'Michele',
              'lastname' => 'Papagni'
          ],
          [
              'name' => 'Fabio',
              'lastname' => 'Forghieri'
          ]
      ],
      'pm' => [
          [
              'name' => 'Roberto',
              'lastname' => 'Marazzini'
          ],
          [
              'name' => 'Federico',
              'lastname' => 'Pellegrini'
          ]
      ]
  ];

  ?>


  <ul class="grey-border">
    <?php foreach ($db['teachers'] as $teacher) {?>
      <li>
        <?php echo $teacher['name'] . " " . $teacher['lastname'];?>
      </li>
    <?php }?>
  </ul>

  <ul class="green-border">
    <?php foreach ($db['pm'] as $pm_value) {?>
      <li>
        <?php echo 0$pm_value['name'] . " " . $pm_value['lastname'];?>
      </li>
    <?php }?>
  </ul>

<?php ?>
<?php ?>
  
</body>
</html>