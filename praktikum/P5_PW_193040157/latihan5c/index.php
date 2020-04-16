<?php
    require 'php/functions.php';

    $result = query("SELECT * FROM makanan")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>latihan5c</title>
</head>
<body>
  <div class="container">
            <?php $i=1 ?>
          <?php foreach ($result as $values) :?>
          <p class = "nama">
            <a href = "php/detail.php?id=<?= $values['id'] ?>">
                <?= $values["nama"] ?>
            </a>
          </p>
          <?php endforeach; ?>
      </table>
  </div>
</body>
</html>