<?php
// include "./api.php";
// $endereco = buscarCEP("69905232");

//echo "<pre>";
//print_r($endereco);
//echo "<pre>"

if(isset($_GET['cep'])) {
    $cep = $_GET['cep'];
    $endereco = buscarCEP($cep);
}

?>

<form method = "GET">
    <imput
    type="text"
    placeholder="buscar cep..."
    name = "cep"
    >
    <button>buscar</button>
</form>
<?php if (isset($endereco['cep'])): ?>
<div>
    <h2>CEP encontrado</h2>
    <ul>
        <?php
        foreach($enderecos as $data => $valor) {
            echo "$data: $valor <br>";
        }
        ?>
    </ul>
</div>
<?php endif;?>