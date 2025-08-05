<?php
    $sujeitos = [
        "O sol",
        "A lua",
        "As estrelas",
        "O vento",
        "A chuva",
        "O mar",
        "A montanha",
        "O rio",
        "A floresta",
        "O deserto"
    ];

    $verbos = [
        "brilha",
        "canta",
        "sussurra",
        "dança",
        "corre",
        "flui",
        "abraça",
        "encanta",
        "desperta",
        "silencia"
    ];

    $objetos = [
        "a noite",
        "o dia",
        "as flores",
        "os pássaros",
        "as ondas",
        "as nuvens",
        "o horizonte",
        "a vida",
        "o amor",
        "a esperança"
    ];

    $adjetivos = [
        "linda",
        "serena",
        "misteriosa",
        "vibrante",
        "tranquila",
        "intensa",
        "suave",
        "radiante",
        "profunda",
        "eterna"
    ];

    $linhas_bonus = [
        "E assim, o universo canta.",
        "Cada verso é um suspiro.",
        "A beleza se revela em cada instante.",
        "A poesia flui como um rio sereno.",
        "O amor permeia cada palavra."

    ];
    //geração aleatória

    $sujeito_aleatorio = $sujeitos[array_rand(array: $sujeitos)];
    $verbo_aleatorio = $verbos[array_rand(array: $verbos)];
    $objeto_aleatorio = $objetos[array_rand(array: $objetos)];
    $adjetivo_aleatorio = $adjetivos[array_rand(array: $adjetivos)];

    //estrutura condicional

    $incluir_linha_bonus = rand(0, 1); // 50% de chance de incluir uma linha bônus
    $linhas_especial = "";
    if ($incluir_linha_bonus == 1){
        $linhas_especial = $linhas_bonus[array_rand(array: $linhas_bonus)];
    }


    //estrutura de repetição

    $poemas_linhas = [];
    for ($i = 0; $i < 5; $i++) {
        $linha_gerada = $sujeitos[array_rand(array: $sujeitos)] . " " . $verbos[array_rand(array: $verbos)] . " " . $objetos[array_rand(array: $objetos)] . " " . $adjetivos[array_rand(array: $adjetivos)] . ".";
        $poemas_linhas[] = $linha_gerada;
    }

    //Juntar linhas do poema
    $poema_final = implode("<br>", $poemas_linhas);
    
    if($linhas_especial != ""){
        $poema_final .= "<br><br>" . $linhas_especial;
    }

    ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Poemas Aletórios</title>
    <style>
        body{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(to right, #6a11cb 0%, #2575fc 100%); 
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Gerador de Poemas</h1>
        <div>
            <?php echo $poema_final; ?>
        </div>
        <button onclick="window.location.reload()">Gerar Poema</button>
    </div>
</body>
</html>