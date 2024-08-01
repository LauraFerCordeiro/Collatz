<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collatz</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        tr {text-align: center}
    </style>
</head>
<body>
    <section>
        <div class="has-text-centered my-6">
            <h1 class="title"> Conjectura de Collatz </h1>
            <h2 class="subtitle has-text-primary-dark"> 3x+1 </h2>
        </div>
        <div class="section column is-6 is-offset-3">
            <table class="table is-fullwidth is-bordered is-striped is-narrow is-hoverable">
                <thead>
                    <tr>
                        <th class="is-dark"> Número </th>
                        <th class="is-dark"> Passos </th>
                        <th class="is-dark"> Maior Número </th>
                    </tr>
                </thead>
            
                <?php

                    $lista = [];
                    echo "<tbody>";
                    for($i = 1; $i < 1000; $i++) {
                        array_push($lista, $i);

                        while($lista[count($lista)-1] != 1) {

                            $valor = $lista[count($lista)-1];

                            if($valor%2 == 0) {
                                $lista[] = $valor/2;
                            } else {
                                $lista[] = $valor*3 + 1;
                            }
                        }
                        //print_r($lista);
                        $num = $i;
                        $passos = count($lista);
                        $maior = $i;
                        foreach ($lista as $now) {
                            if ($now > $maior) {
                                $maior = $now;
                            }
                        }
                        echo "<tr>";
                        echo "<td>" . $num . "</td>";
                        echo "<td>" . $passos . "</td>";
                        echo "<td>" . $maior . "</td>";
                        echo "</tr>";
                        $lista = [];
                    }
                    echo "</tbody>";

                ?>
            </table>
        </div>
    </section>
</body>
</html>