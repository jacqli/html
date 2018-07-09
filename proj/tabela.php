<?php
echo "<style>
table{
text-decoration:blink;
}
table, th, td {
    border: 1px solid black;
}
body {
  background-image: url('https://vignette.wikia.nocookie.net/blazblue/images/d/db/Iron_Tager_%28Chibi%29.png/revision/latest?cb=20120117150550');
   background-size: 100%;
 }
</style>";
$escola ="Nome da Escola";
$data = "10/05/2018";
$cont = 0;

$curso = array("Curso A","Curso B","Curso C");
$preco = array(2000.00,1500.00,3000.00);

echo "<marquee>Escola </marquee>".$escola;
echo "<BR>";
echo "Data ".$data;

echo "<table>";
echo "<tr>
<th>Nome do Curso</th>
<th>Á vista</th>
</tr>";

foreach ($preco as $valor) {
echo "<tr> <td>" .$curso[$cont]."</td>
      <td> R$".number_format($valor, 2, ',', '.')."&nbsp;&nbsp;</td>";
$cont+=1;
}
echo "</table>";
?>
