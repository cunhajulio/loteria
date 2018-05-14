<form action ="">

    <input type="file" name="arquivo">
    <input type="submit" value="cadastrar">
</form>

<?php
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $destino = './uploads/';
    $arquivo = $_FILES['arquivo'];
    $tipo = $arquivo['type'];

    if ($tipo == 'image/jpeg' or $tipo == 'image/gif'){
    $tempo = time();
    $arquivoFinal = $destino . $arquivo('name');


    $enviado = move_uploaded_file($arquivo['tmp_name'], $arquivoFinal);
        if ($enviado == true){
            echo "o arquivo".$arquivo['nome']." foi enviado";
        }else{
            echo "Tipo $tipo não é suportado";
        }
        ?>