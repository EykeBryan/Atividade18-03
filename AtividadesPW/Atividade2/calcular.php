<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Pedido</title>
</head>
<body>
    <h1>Resultado do Pedido</h1>
    <?php
        $nome = $_POST['nome'];
        $roupa = $_POST['roupa'];
        $quantidadeRoupas = $_POST['quantidadeRoupas'];
        $acessorio = $_POST['acessorio'];

        switch ($roupa) {
            case 1:
                $precoRoupa = 70.00;
                $nomeRoupa = "Camisa";
                break;
            case 2:
                $precoRoupa = 120.00;
                $nomeRoupa = "Calça";
                break;
            case 3:
                $precoRoupa = 50.00;
                $nomeRoupa = "Bermuda";
                break;
            case 4:
                $precoRoupa = 20.00;
                $nomeRoupa = "Meia";
                break;
            case 5:
                $precoRoupa = 30.00;
                $nomeRoupa = "Cueca";
                break;
            default:
                $precoRoupa = 0;
                $nomeRoupa = "Roupa inválido";
                break;
        }

        switch ($acessorio) {
            case 1:
                $precoAcessorio = 150.00;
                $nomeAcessorio = "Relógio";
                break;
            case 2:
                $precoAcessorio = 90.00;
                $nomeAcessorio = "Colar";
                break;
            case 3:
                $precoAcessorio = 50.00;
                $nomeAcessorio = "Brecelete";
                break;
            case 4:
                $precoAcessorio = 80.00;
                $nomeAcessorio = "Anel";
                 break;
            case 5:
                $precoAcessorio = 60.00;
                $nomeAcessorio = "Testeira";
                break;
            default:
                $precoAcessorio = 0;
                $nomeAcessorio = "Acessório inválida";
                break;
            }
    
            $totalRoupas = $precoRoupa * $quantidadeRoupas;
            $totalAcessorio = $precoAcessorio;
            $total = $totalRoupas + $totalAcessorio;
    
            echo "$nome, você escolheu:<br>";
            echo "$quantidadeRoupas x $nomeRoupa - R$ " . number_format($totalRoupas, 2, ',', '.') . "<br>";
            echo "1 x $nomeAcessorio - R$ " . number_format($totalAcessorio, 2, ',', '.') . "<br>";
            echo "Total consumido: R$ " . number_format($total, 2, ',', '.') . ".";
            
        ?>
        <br><br>
        <a href="index.php">Voltar</a>
    </body>
    </html>