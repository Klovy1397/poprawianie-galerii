<?php
// Tablica zdjęć
$photos = [
    ['img_id'=>1, 'img'=>'img/img1.jpg', 'opis'=>'A beautiful sunset.', 'category_id'=>1],
    ['img_id'=>2, 'img'=>'img/img2.jpg', 'opis'=>'A serene beach.', 'category_id' => 2],
    ['img_id'=>3, 'img'=>'img/img3.jpg', 'opis'=>'A blooming flower.', 'category_id' => 3],
    ['img_id'=>4, 'img'=>'img/img4.jpg', 'opis'=>'Snow-covered mountains.', 'category_id' => 1],
    ['img_id'=>5, 'img'=>'img/img5.jpg', 'opis'=>'A forest in autumn.', 'category_id' => 3],
    ['img_id'=>6, 'img'=>'img/img6.jpg', 'opis'=>'City skyline at night.', 'category_id' => 2],
    ['img_id'=>7, 'img'=>'img/img7.jpg', 'opis'=>'A waterfall flowing.', 'category_id' => 3],
    ['img_id'=>8, 'img'=>'img/img8.jpg', 'opis'=>'A boat on a calm lake.', 'category_id' => 1],
    ['img_id'=>9, 'img'=>'img/img9.jpg', 'opis'=>'A field of lavender.', 'category_id' => 2],
    ['img_id'=>10, 'img'=>'img/img10.jpg', 'opis'=>'A snowy forest.', 'category_id'=>1],
    ['img_id'=>11, 'img'=>'img/img11.jpg', 'opis'=>'Aerial view of coral.', 'category_id'=>3],
    ['img_id'=>12, 'img'=>'img/img12.jpg', 'opis'=>'Market square.', 'category_id' => 3],
];

$comments_table = [
    ['photo_id' => 1, 'rating' => 5, 'content' => 'Świetne zdjęcie, polecam!'],
    ['photo_id' => 1, 'rating' => 4, 'content' => 'Bardzo ładne ujęcie, dobrze uchwycone.'],
    ['photo_id' => 2, 'rating' => 3, 'content' => 'Całkiem ok, ale mogło być lepsze oświetlenie.'],
    ['photo_id' => 2, 'rating' => 5, 'content' => 'Przepiękne, nie mogę się napatrzeć!'],
    ['photo_id' => 3, 'rating' => 2, 'content' => 'Niestety, nie moje klimaty.'],
    ['photo_id' => 3, 'rating' => 4, 'content' => 'Dobre, ale coś mi tu brakuje.'],
    ['photo_id' => 4, 'rating' => 5, 'content' => 'Wspaniałe! Uwielbiam ten styl.'],
    ['photo_id' => 4, 'rating' => 3, 'content' => 'Poprawne, choć mogłoby być lepiej.'],
    ['photo_id' => 1, 'rating' => 1, 'content' => 'Niestety, nie podoba mi się.'],
    ['photo_id' => 2, 'rating' => 5, 'content' => 'Arcydzieło!'],
    ['photo_id' => 3, 'rating' => 4, 'content' => 'Całkiem dobre, jestem zadowolony.'],
    ['photo_id' => 4, 'rating' => 2, 'content' => 'Mogło być bardziej dopracowane.']
];

// Funkcja wyświetlająca komentarze do wybranego zdjęcia wraz z oceną w postaci gwiazdek
function photo_comment($photo_id, $comments_table) {
    foreach ($comments_table as $comment) {
        if ($comment['photo_id'] === $photo_id) {
            // Wyświetlanie oceny za pomocą gwiazdek
            $stars = str_repeat('★', $comment['rating']) . str_repeat('☆', 5 - $comment['rating']);
            echo "<p><strong>Komentarz:</strong> {$comment['content']}<br><strong>Ocena:</strong> $stars</p><br>";
        }
    }
}

// Przykładowe wywołanie funkcji dla zdjęcia o ID 1
photo_comment(1, $comments_table);
?>
