<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <!-- Snack 7
  Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
  
  <?php
    
    $students = [
      [
        'name' => "Giuseppe",
        'lastname' => 'Verdi',
        'votes' => [5,7,6,5,6]
      ],
      [
        'name' => "Federico",
        'lastname' => 'De Simone',
        'votes' => [6,8,7,7,6]
      ],
      [
        'name' => "Luca",
        'lastname' => 'Nervi',
        'votes' => [5,7,6,5,5]
      ],
      [
        'name' => "Paolo",
        'lastname' => 'Bitta',
        'votes' => [5,4,3,5,6]
      ],
    ];

    

  ?>

  
  <ul>
      <?php foreach($students as $student) { ?>

        <li> 
        <?php echo $student['name'] . ' ' . $student['lastname'] ?> 
        
        <?php echo number_format(array_sum($student['votes']) / count($student['votes']), 2, ',', '.') ?>
        </li>

      <?php } ?>
  </ul>
</body>
</html>