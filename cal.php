<div class="container">
    <!-- Nazwy dni tygodnia -->
    <div class="day-box">Pn</div>
    <div class="day-box">Wt</div>
    <div class="day-box">Śr</div>
    <div class="day-box">Cz</div>
    <div class="day-box">Pt</div>
    <div class="day-box">So</div>
    <div class="day-box niedziela">Nd</div>

    <?php
    function liczbaNaDate($liczba) {
        return date('d-m-Y', strtotime("{$liczba} days"));
    }

    function dniDoPoprzPon() {
        $dzisiaj = date('N'); // Numer dnia tygodnia (1 = poniedziałek, 7 = niedziela)
        return $dzisiaj - 1; // Liczba dni do poprzedniego poniedziałku
    }

    $highlightedDate = "20-11-2024"; // Data do wyróżnienia

    for ($i = -dniDoPoprzPon(); $i < 30 - dniDoPoprzPon(); $i++) {
        $currentDate = liczbaNaDate($i);
        $isSunday = date('N', strtotime("{$i} days")) == 7;
        $dodatkowe_klasy = $isSunday ? ' niedziela' : '';

        // Sprawdzenie, czy dzień jest dzisiejszy
        if ($currentDate == date("d-m-Y")) {
            $dodatkowe_klasy .= ' dzis';
        }

        // Sprawdzenie, czy dzień to 20-11-2024
        if ($currentDate == $highlightedDate) {
            $dodatkowe_klasy .= ' wyrozniony';
        }

        // Wyświetlanie pojedynczego dnia z odpowiednimi klasami
        echo '<div class="day-box' . $dodatkowe_klasy . '">' . $currentDate . '</div>';
    }
    ?>
</div>
