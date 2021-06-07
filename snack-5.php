<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>
<body>
  <!-- ## Snack 5
  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.     -->
  
  <?php
    $chapter = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem nisi ut explicabo vero culpa! Harum autem dignissimos quidem officiis fuga cumque? Alias atque a provident eveniet maiores numquam, nam eum et nemo nobis expedita blanditiis doloribus nesciunt, odio nulla delectus optio dolore incidunt esse? Quia nisi explicabo dolore sed sequi consequatur, tempore cupiditate dolorem architecto dolores saepe ut id illum ex aut velit amet doloremque? Ratione distinctio ea facere doloribus qui velit nam sit ipsum maiores reprehenderit aliquid cumque soluta laboriosam necessitatibus consectetur impedit cum, sed, quas blanditiis saepe corporis assumenda sint. Ex, facilis iure nobis iusto laborum eligendi dolores ab, officia magnam error quam placeat nam tempore, velit cupiditate quaerat maxime autem exercitationem debitis possimus consequuntur optio. Pariatur impedit voluptatem dolores quibusdam error alias possimus facilis nisi fugit quia consectetur praesentium quo eaque fugiat non amet laudantium maxime, perspiciatis officia soluta in. Adipisci aliquid enim iusto in, consectetur voluptatem fugiat amet incidunt explicabo similique maxime excepturi itaque, neque laboriosam suscipit. Ipsum ad iste blanditiis quaerat aspernatur sit praesentium animi sequi velit in fuga illo, autem atque sunt ea eos laudantium sapiente vel similique quidem? Velit mollitia fugiat iusto eveniet officiis repellendus similique suscipit excepturi, sit, qui labore asperiores atque.'

    $elenco = explode('.' $chapter)
  ?>

    <ul>

    <?php
    foreach ($elenco as  $paragraph) {
      if(!empty($paragraph)){
     ?>
        <li>
         <?php echo  $paragraph . '.' ?>
        </li>
    <?php }} ?>
    
    <?php ?>
    </ul>
 
</body>
</html>