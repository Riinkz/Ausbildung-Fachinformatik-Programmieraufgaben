<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Kundenliste</title>
    <style>
        body {
            /* Standard-Schriftart und Zeilenhöhe für die Seite */
            font-family: "Times New Roman", Times, serif;
            line-height: 1.4;
        }
        .datensatz {
            /* Container für einen einzelnen Kundendatensatz */
            margin-bottom: 20px; /* Abstand zum nächsten Datensatz */
            padding: 10px;       /* Innenabstand des Containers */
            /* border: 1px solid #eee; /* Heller Rahmen um den Datensatz */
        }
        .datensatz h2 {
            /* Styling für die Datensatz-Überschrift (z.B. "Datensatz :0") */
            margin-top: 0;        /* Kein Abstand nach oben */
            margin-bottom: 5px; /* Kleiner Abstand unter der Überschrift */
            font-size: 1.1em;   /* Etwas größere Schrift als normal */
            font-weight: normal;/* Normale Schriftstärke (nicht fett) */
        }
        .details {
            /* Container für die Detailangaben eines Kunden */
            padding-left: 30px; /* Linker Innenabstand zur Einrückung der Details */
        }
    </style>
</head>
<body>
<?php
// Definition des mehrdimensionalen Arrays '$kundenDaten'.
// Enthält Kundendatensätze, wobei jeder Datensatz ein assoziatives Array ist.
$kundenDaten = [
    // Erster Kundendatensatz (Index 0)
    [
        "Nr" => 1,
        "Name" => "Huber",
        "Vorname" => "Wilhelm",
        "Tel" => "07654-321089",
        "E-Mail" => "Wilhelm@mail.com"
    ],
    // Zweiter Kundendatensatz (Index 1)
    [
        "Nr" => 2,
        "Name" => "Maier",
        "Vorname" => "Gerda",
        "Tel" => "07654-326789",
        "E-Mail" => "GMaier@mail.com"
    ]
];

// Verarbeitung und Ausgabe der Kundendaten.
// Die äußere Schleife iteriert durch jeden Kundendatensatz im '$kundenDaten'-Array.
foreach ($kundenDaten as $index => $kunde) {
    // Startet den HTML-Container für einen einzelnen Datensatz.
    echo '<div class="datensatz">';

    // Gibt die Überschrift für den aktuellen Datensatz aus.
    echo '<h2>Datensatz :' . $index . '</h2>';

    // Startet einen inneren Container für die Detailangaben, um Einrückung zu ermöglichen.
    echo '<div class="details">';

    // Die innere Schleife iteriert durch die Schlüssel-Wert-Paare des aktuellen Kunden-Arrays.
    foreach ($kunde as $key => $element) {
        // Gibt eine Zeile mit "Schlüssel: Wert" aus.
        // htmlspecialchars() wandelt spezielle HTML-Zeichen um (Sicherheitsmaßnahme).
        echo htmlspecialchars($key) . ': ' . htmlspecialchars($element) . '<br>';
    }

    // Schließt den inneren Detail-Container.
    echo '</div>';

    // Schließt den Container für den einzelnen Datensatz.
    echo '</div>';
}
?>
</body>
</html>