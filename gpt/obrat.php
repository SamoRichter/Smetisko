<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obrat</title>
</head>
<body>

<?php

// Funkcia na formátovanie čísla s medzerami za tisíckami
function formatuj_cislo($cislo) {
    return number_format($cislo, 0, '.', ' ');
}

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
        'telka' => [
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

// Funkcia na aplikovanie zľavy 7 % ku každej položke
function aplikuj_zlavu($polozky) {
    foreach ($polozky as $produkt => &$detaily) {
        $povodna_cena = $detaily['cena'];
        $zlava = $povodna_cena * 0.07; // Výpočet zľavy 7 %
        $detaily['zlava'] = $zlava;
        $detaily['zlava_cena'] = $povodna_cena - $zlava; // Zľavnená cena
    }
    return $polozky;
}

// Funkcia na uloženie reportu do textového súboru
function uloz_report_do_suboru($obsah) {
    $cesta_k_suboru = getcwd() . '/report.txt'; // Uloží súbor na aktuálnu plochu
    file_put_contents($cesta_k_suboru, $obsah);
    echo "<p><strong>Report bol uložený do súboru:</strong> $cesta_k_suboru</p>";
}

// Výpis reportu
$report = "<h2>Report o predaji</h2>\n";
$report .= "<p><strong>Celkový obrat:</strong> " . formatuj_cislo(obrat(vypis())) . " €</p>\n";
$report .= "<p><strong>Najpredávanejší produkt je:</strong> " . najpredavanejsi(vypis()) . "</p>\n";
$report .= "<p><strong>Priemerná cena produktov:</strong> " . formatuj_cislo(priemer(vypis())) . " €</p>\n";

// Aplikovanie zľavy a výpis
$polozky = aplikuj_zlavu(vypis());
$report .= "<h3>Položky so zľavou 7 %</h3>\n";
$report .= "<table border='1'>\n";
$report .= "<tr><th>Produkt</th><th>Pôvodná cena</th><th>Zľava (7 %)</th><th>Zľavnená cena</th></tr>\n";
foreach ($polozky as $produkt => $detaily) {
    $report .= "<tr>\n";
    $report .= "<td>" . $produkt . "</td>\n";
    $report .= "<td>" . formatuj_cislo($detaily['cena']) . " €</td>\n";
    $report .= "<td>" . formatuj_cislo($detaily['zlava']) . " €</td>\n";
    $report .= "<td>" . formatuj_cislo($detaily['zlava_cena']) . " €</td>\n";
    $report .= "</tr>\n";
}
$report .= "</table>\n";

// Zobrazenie reportu v prehliadači
echo $report;

// Uloženie reportu do textového súboru
uloz_report_do_suboru(strip_tags($report)); // strip_tags() odstráni HTML tagy pre textový súbor

?>

</body>
</html>