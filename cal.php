<div class="container">
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
        $dzisiaj = date('N'); 
        return $dzisiaj - 1; 
    }

    $highlightedDate = "20-11-2024"; 
    $currentWeekStart = date('d-m-Y', strtotime('monday this week'));
    $currentWeekEnd = date('d-m-Y', strtotime('sunday this week')); 


    for ($i = -dniDoPoprzPon(); $i < 30 - dniDoPoprzPon(); $i++) {
        $currentDate = liczbaNaDate($i);
        $isSunday = date('N', strtotime("{$i} days")) == 7;
        $dodatkowe_klasy = $isSunday ? ' niedziela' : '';


        if ($currentDate >= $currentWeekStart && $currentDate <= $currentWeekEnd) {
            $dodatkowe_klasy .= ' this_week';
        }


        if ($currentDate == date("d-m-Y")) {
            $dodatkowe_klasy .= ' dzis';
        }


        if ($currentDate == $highlightedDate) {
            $dodatkowe_klasy .= ' wyrozniony';
        }

        echo '<div class="day-box' . $dodatkowe_klasy . '">' . $currentDate . '</div>';
    }
    ?>
</div>
