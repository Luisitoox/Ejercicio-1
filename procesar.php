
<link href="assets/style.css" rel="stylesheet" type="text/css">
<?php

$totalFemenino = 0;
$totalHombresCasados = 0;
$totalMujeresViudas = 0;
$sumaEdadesMasculino = 0;
$contadorMasculino = 0;


$empleados = $_POST['empleados'];

foreach ($empleados as $empleado) {
    
    if ($empleado['sexo'] == 'Femenino') {
        $totalFemenino++;
    }

    
    if ($empleado['sexo'] == 'Masculino' && $empleado['estadoCivil'] == 'Casado(a)' && $empleado['sueldo'] > 2500) {
        $totalHombresCasados++;
    }

    
    if ($empleado['sexo'] == 'Femenino' && $empleado['estadoCivil'] == 'Viudo(a)' && $empleado['sueldo'] > 1000) {
        $totalMujeresViudas++;
    }

    
    if ($empleado['sexo'] == 'Masculino') {
        $sumaEdadesMasculino += $empleado['edad'];
        $contadorMasculino++;
    }
}


$promedioEdadMasculino = $contadorMasculino > 0 ? $sumaEdadesMasculino / $contadorMasculino : 0;


echo "Total de empleados del sexo femenino: " . $totalFemenino . "<br>";
echo "Total de hombres casados que ganan más de 2500 Bs.: " . $totalHombresCasados . "<br>";
echo "Total de mujeres viudas que ganan más de 1000 Bs.: " . $totalMujeresViudas . "<br>";
echo "Edad promedio del sexo masculino: " . $promedioEdadMasculino;
?>