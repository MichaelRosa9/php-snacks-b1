<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  
  <?php 

    $partite = [
      
      [
        'home' => 'Roma',
        'guest' => 'Milano',
        'scoreHome' => '60',
        'scoreGuest' => '55',
      ],
      [
        'home' => 'Napoli',
        'guest' => 'Torino',
        'scoreHome' => '45',
        'scoreGuest' => '65',
      ],
      [
        'home' => 'Bari',
        'guest' => 'Genova',
        'scoreHome' => '60',
        'scoreGuest' => '75',
      ],
    ]

  ?>

  <ul>
    <?php foreach ($partite as $partita) { ?>

      <li> <?php echo $partita['home'] ?> - <?php echo $partita['guest'] ?> | <?php echo $partita['scoreHome'] ?> - <?php echo $partita['scoreGuest'] ?> </li> 
      
    <?php }?>

    
  </ul>

</body>
</html>