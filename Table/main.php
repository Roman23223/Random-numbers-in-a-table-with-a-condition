<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random numbers in a table with a condition</title>
</head>
<body style="margin: 0 auto;">

  <?php
    for($i=0; $i<100; $i++){
      $arr[$i] = rand(0,100);
    }
    $arr = array_chunk($arr, 10)
  ?>

  <table style="width: 60%; margin: 0 auto; margin-top: 100px;">
    <?php foreach ($arr as $items):?>
    <tr>
      <?php foreach ($items as $row): ?>
        <?php if ($row > 50):?>
        <td style="background: red; border: 1px solid black; padding: 7px 10px; text-align: center; height: 50px; width: 50px;"><?php echo($row)?></td>
        <?php else:?>
        <td style="background: green; border: 1px solid black; padding: 7px 10px; text-align: center; height: 50px; width: 50px;"><?php echo($row)?></td>
        <?php endif;?>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>


