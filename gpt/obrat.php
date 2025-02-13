<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrat</title>
</head>
<body>

<?php
// Funkcia na vytvorenie zoznamu položiek
function vypis() {
    $polozky = [
        'telefon' => [
            'cena' => 500,
            'mnozstvo' => 1,
        ],

        'smart_hodinky' => [
            'cena' => 120,
            'mnozstvo' => 8,
        ],

        'airpods' => [
            'cena' => 120,
            'mnozstvo' => 8,
        ],

        'notebook' => [
            'cena' => 900,
            'mnozstvo' => 2,
        ],

        'tablet' => [
            'cena' => 450,
            'mnozstvo' => 1,
        ],
    ];
    return $polozky;
}

// Funkcia na nájdenie najpredávanejšieho produktu
function najpredavanejsi($polozky) {
    $suma = [];
    foreach ($polozky as $produkt => $detail) {
        $suma[$produkt] = $detail['mnozstvo'];
    }
    arsort($suma); // Zoradenie od najväčšieho po najmenší
    return array_key_first($suma) . " (" . reset($suma) . " ks)";
}

// Funkcia na výpočet priemernej ceny produktov
function priemer($polozky) {
    $ceny = [];
    foreach ($polozky as $produkt => $detaily) {
        $ceny[] = $detaily['cena'];
    }
    if (count($ceny) === 0) {
        return 0;
    }
    return array_sum($ceny) / count($ceny);
}

// Funkcia na výpočet celkového obratu
function obrat($polozky) {
    $spolu = 0;
    foreach ($polozky as $produkt => $detaily) {
        $spolu += $detaily['cena'] * $detaily['mnozstvo'];
    }
    return $spolu;
}

// Výpis reportu
echo '<h2>Report o predaji</h2>';
echo '<p><strong>Celkový obrat:</strong> ' . obrat(vypis()) . ' €</p>';
echo '<p><strong>Najpredávanejší produkt je:</strong> ' . najpredavanejsi(vypis()) . '</p>';
echo '<p><strong>Priemerná cena produktov:</strong> ' . priemer(vypis()) . ' €</p>';
?>

</body>
</html>