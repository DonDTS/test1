<?php
  sleep(1);
  if ($_POST['name'] == 'Дмитрий') {
    echo "Имя: ".$_POST['name']." Возраст: 26";
  } else   echo "Имя: ".$_POST['name']." Возраст: ".$_POST['age'];
 ?>
