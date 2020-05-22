<?php
include('..' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'conexao_bd.php');

$query = "SELECT a.id, a.nome as nome_obra,  a.descri, a.duracao, a.repetir, a.obra, b.nome FROM obras a LEFT JOIN usuarios b ON a.usuario_id = b.id where a.ativo = 'ativo' ";

$result = $conn->query($query);
      
if ($result->num_rows > 0) {
    $cont = 1;
    $direcao = "";
    while ($row = $result->fetch_assoc()) {
        if ($cont > 2){
            $animation = random_int(1, 4);
            switch ($animation){
               case 1: 
                $direcao = "left";
               break;
               case 2: 
                $direcao = "right";
               break;
               case 3: 
                $direcao = "up";
               break;
               case 4: 
                $direcao = "down";
               break;
            }
        }
        // echo 'cont =>' . $cont;
        // echo 'direção ' . $direcao;
        echo '<div class="mt-3 col-12" data-anime="' . $direcao . '">';
        echo "<div id='duracao' class='d-none'>" . $row["duracao"] . "</div>";
        echo "<div id='repetir' class='d-none'>" . $row["repetir"] . "</div>";
        echo "<div id='obra' class='d-none'>" . $row["obra"] . "</div>";

        echo '<div class="card">';
        echo '<div class="card-header">';
        echo '<h3 class="text-center h6">' . $row["nome_obra"] . "</h3>";
        echo '<div class="card-body">';
        echo '<blockquote class="blockquote mb-0">';
        // echo '<p class="text-center" >' . substr($row["descri"],0,10) . "...</p>";
        // echo '<footer class="blockquote-footer">Autor: <cite title="Source Title">' . $row["nome"] . '</cite></footer>';
        echo "<a href='obra.php?ID=" . $row["id"] . "' class='card-link float-center mt-3'> Visualizar </a>";
        echo '</blockquote>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $cont ++;
    }
} else {
    echo "Nenhum registro encontrado...";
}
$conn->close();
?>
