<?php
for ($id = 1; $id < 5; $id++)
{
  $sql = "SELECT * FROM buy_from_us WHERE Product_ID = $id";
  $result = $pdo->query($sql);
  // echo "Yes</br>";
  $results[$id] = $result;
}

?>
