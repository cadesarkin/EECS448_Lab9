<?php

function multiply($x, $y) {
  $z = $x*$y;
  return $z;
}

echo "<table>";
echo "<tr>  <tn></tn> <tn>1</tn> <tn>2</tn> <tn>3</tn> <tn>4</tn> <tn>5</tn> <tn>6</tn> <tn>7</tn> <tn>8</tn> <tn>9</tn> <tn>10</tn><tr>";

for($i=1; $i<=10; $i++)
{
  echo "<tr>";
  for($j=1; $j<=10; $j++)
  {
    if($j==1)
    {
      echo "<tc><b>" . $i ."</b></tc>";
    }
    echo "<tc>" . multiply($i, $j) . "</tc>";
  }
  echo "</tr>";
}
echo "</table>";

 ?>
