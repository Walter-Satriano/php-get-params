<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Volume Parallelepipedo</title>

    <?php
      $lunghezza = intval($_GET["lunghezza"]);
      $larghezza = intval($_GET["larghezza"]);
      $altezza = intval($_GET["altezza"]);
      $volume = ($lunghezza * $larghezza) * $altezza;
    ?>

  </head>
  <body>

    <!-- per poter vedere di che tipo è la mia variabile:
    echo "\$lunghezza==$lunghezza; type is " . gettype ($lunghezza) . "<br />\n"; -->

    <h2>Lunghezza:
      <?php echo $lunghezza; ?> m
    </h2>

    <h2>Larghezza:
      <?php echo $larghezza; ?> m
    </h2>

    <h2>Altezza:
      <?php echo $altezza; ?> m
    </h2>

    <h2>Volume:
      <?php echo $volume; ?> m3
    </h2>

  </body>

  <!-- creare una pagina in PHP che legga in ingresso
  3 parametri numerici (in GET) che rappresentano le 3 dimensioni
  di un parallelepipedo: lunghezza, larghezza, altezza;
  stampare le 3 dimensioni e calcolare il volume della figura (lun x lar x alt) -->
</html>
