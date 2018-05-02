<?php

echo "MegaSena  - digite 1\n";
echo "Quina     - digite 2\n";
echo "LotoMania - digite 3\n";
echo "LotoFacil - digite 4\n";

echo "Digite o número de correspondente ao tipo de jogo: \n";
$escolha = trim(fgets(STDIN));

function loteria($numMin, $numMax, $dezenasMin, $dezenasMax){
    echo "Digite o número de dezenas entre $dezenasMin e $dezenasMax: \n";
    $dezenas = trim(fgets(STDIN));

    if($dezenas <$dezenasMin or $dezenas > $dezenasMax){
        echo "$dezenas como dezena não é um número aceitável \n";
        exit();
    }

    echo "Digite o número de apostas: \n";
    $apostas = trim(fgets(STDIN));
    

    for ($a = 0; $a < $apostas; $a++){
        $sorteados = [];

        for ($d = 0; $d < $dezenas; $d++){
            $numero = rand($numMin, $numMax);

            if(!in_array($numero, $sorteados)){
                $sorteados[$d] = $numero;
            }else{
                $d--;
            }
        }

        echo "O resultado da aposta " .($a+1). ": ";

        sort($sorteados);

        foreach ($sorteados as $dezena) {
            echo "$dezena / ";
        }
        echo "\n";
    }
    echo "\n";

    return [$dezenas, $apostas];
}


switch ($escolha) {
    case '1':
        echo "MegaSena \n";
        $numMin = 1;
        $numMax = 60;
        $dezenasMin = 6;
        $dezenasMax = 15;
        $result = loteria($numMin, $numMax, $dezenasMin, $dezenasMax);
        $numMega = array(3.5, 24.5, 98, 294, 735, 1617, 3234, 6006, 10510.5, 17517.5);
        $pagar = $result[1] * $numMega[$result[0] - 6];
            echo "Total gasto foi de $pagar reais. \n";

        break;

    case '2':
        echo "Quina \n";
        $numMin = 1;
        $numMax = 80;
        $dezenasMin = 5;
        $dezenasMax = 15;
        $result = loteria($numMin, $numMax, $dezenasMin, $dezenasMax);
        $numQuina = array(1.50, 9, 31.5, 84, 189, 378, 693, 1188, 1930.5, 3003, 4504.5);
        $pagar = $result[1] * $numQuina[$result[0] - 5];
        echo "Total gasto foi de $pagar reais. \n";

        break;

    case '3':
        echo "LotoMania \n";
        $numMin = 1;
        $numMax = 100;
        $dezenasMin = 50;
        $dezenasMax = 50;
        $result = loteria($numMin, $numMax, $dezenasMin, $dezenasMax);
        $numLM = 1.50;
        $pagar = $result[1] * $numLM;
        echo "Total gasto foi de $pagar reais. \n";

        break;

    case '4':
        echo "LotoFacil \n";
        $numMin = 1;
        $numMax = 25;
        $dezenasMin = 15;
        $dezenasMax = 18;
        $result = loteria($numMin, $numMax, $dezenasMin, $dezenasMax);
        $numLF = array(2, 32, 272, 1632);
        $pagar = $result[1] * $numLF[$result[0] - 15];
        echo "Total gasto foi de $pagar reais. \n";

        break;

    default:
        echo "$escolha não é válido \n";
        exit();
        break;
}

?>