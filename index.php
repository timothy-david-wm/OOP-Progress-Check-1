<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>OOP in PHP</title>

      <?php include("class_lib.php") ?>
  </head>
  <body>

    <?php

      $Jim = new Warrior("Jim", "English Army");
      echo "The warrior ".$Jim->Name." Has Joined the great and nobal ".$Jim->Army;
      echo "<br>";
      print_r ($Jim->get_equiptment());
      echo "<br>";
      $Jim->set_health(50);
      echo "Jim has ".$Jim->get_health()." Health points";
      echo "<br>";
      $Jim->adjust_health(-10);
      echo "Jim took 10 damage and now has ".$Jim->get_health()." health points";
      echo "<br>";
      $Jim->set_mana(0);
      echo "Jim has ".$Jim->get_mana()." mana points";
      echo "<br>";
      $Jim->adjust_mana(5);
      echo "Jim found a magic potion now has ".$Jim->get_mana()." mana points";
      echo "<br>";
      $Jim->set_energy(100);
      echo "Jim has ".$Jim->get_energy()." energy points";
      echo "<br>";
      $Jim->adjust_energy(-80);
      echo "Jim hasn't slept in 16 hours and is reduced to ".$Jim->get_energy()." energy points";
      echo "<br>";
      $Jim->learn_ability("Get irritable");
      echo "Jim has gained the ability to ".$Jim->do_action(0);

      $Pheonix = new Pheonix("Pheonix");
      $Pheonix->anylizeMonster($Jim);
    ?>
  </body>
</html>
