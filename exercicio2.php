<!DOCTYPE html>
<html>
<head>
    <title>Dados dos Alunos</title>
</head>
<body>

<h2>Dados dos Alunos</h2>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Curso</th>
    <th>Média</th>
    <th>Situação</th>
  </tr>
  <?php
  $alunos = array(
      array("nome" => "Maria", "curso" => "ADS", "media" => 7.0),
      array("nome" => "João", "curso" => "CD", "media" => 5),
      array("nome" => "José", "curso" => "CD", "media" => 8.0),
      array("nome" => "Pedro", "curso" => "ADS", "media" => 1.5),
      array("nome" => "Paulo", "curso" => "ADS", "media" => 6.0)
  );

  foreach($alunos as &$linha){
      if ($linha["media"] < 2) {
          $linha["situacao"] = "Reprovado";
      } elseif ($linha["media"] < 6) {
          $linha["situacao"] = "Exame Final";
      } else {
          $linha["situacao"] = "Aprovado";
      }
      echo "<tr>";
      echo "<td>".$linha["nome"]."</td>";
      echo "<td>".$linha["curso"]."</td>";
      echo "<td>".$linha["media"]."</td>";
      echo "<td>".$linha["situacao"]."</td>";
      echo "</tr>";
  }
  ?>
</table>

</body>
</html>