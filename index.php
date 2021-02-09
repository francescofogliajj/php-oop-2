<?php
  require_once __DIR__ . "/classes/Computer.php";
  require_once __DIR__ . "/classes/Phone.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-oop-2</title>
  </head>
  <body>

    <header>
      <h1>Shop</h1>
    </header>

    <main>
      <?php
        $notebook = new Computer("Microsoft", "Surface 3", "Laptop", "949,00 €", "256 GB", "2 years");
        $smartphone = new Phone("Google", "Pixel 4a", "Smartphone", "389,00 €", "Android 10", "Wind");
      ?>

      <section>
        <h2>Notebook</h2>
        <ul>
          <li><em>Product:</em> <?php echo $notebook->getInfo(); ?></li>
          <li><em>SSD:</em> <?php echo $notebook->getSsd(); ?></li>
          <li><em>Guarantee:</em> <?php echo $notebook->getGuarantee(); ?></li>
          <li><em>Price:</em> <?php echo $notebook->getPrice(); ?></li>
        </ul>
      </section>

      <section>
        <h2>Smartphone</h2>
        <ul>
          <li><em>Product:</em> <?php echo $smartphone->getInfo(); ?></li>
          <li><em>OS:</em> <?php echo $smartphone->getOs(); ?></li>
          <li><em>Operator:</em> <?php echo $smartphone->getOperator(); ?></li>
          <li><em>Price:</em> <?php echo $smartphone->getPrice(); ?></li>
        </ul>
      </section>
    </main>

  </body>
</html>
