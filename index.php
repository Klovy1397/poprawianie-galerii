<?php
$podstrony = [
    1 => [
        'nazwa' => 'Strona główna',
        'tresc' => 'Witamy na naszej stronie głównej! Znajdziesz tutaj najnowsze informacje i aktualności.'
    ],
    2 => [
        'nazwa' => 'O nas',
        'tresc' => 'Jesteśmy firmą zajmującą się tworzeniem innowacyjnych rozwiązań dla biznesu.'
    ],
    3 => [
        'nazwa' => 'Kontakt',
        'tresc' => 'Skontaktuj się z nami przez formularz lub telefonicznie. Czekamy na Twoje wiadomości!'
    ],
    4 => [
        'nazwa' => 'Galeria',
        'tresc' => '...'
    ]
];

$zdjecia = [
        'Losowe zdjęcie 1' => "https://picsum.photos/300/200?random=1",
        'Losowe zdjęcie 2' => "https://picsum.photos/300/200?random=2",
        'Losowe zdjęcie 3' => "https://picsum.photos/300/200?random=3", 
];

$media = [
    [
    'link' => "https://www.youtube.com" ,
    'foto' => "https://cdn.iconscout.com/icon/free/png-256/free-youtube-logo-icon-download-in-svg-png-gif-file-formats--social-media-70-flat-icons-color-pack-logos-432560.png?f=webp&w=256"
    ],
    [
    'link' => "https://www.discord.com", 
    'foto' => "https://darkanddarker.wiki.spellsandguns.com/images/thumb/1/15/Discord_logo.webp/213px-Discord_logo.webp.png"
    ],
    [
    'link' => "https://telegram.org",
    'foto' => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/1024px-Telegram_logo.svg.png"
    ],           
];

$reklama = [
        ['reklama' => "https://www.adidas.pl/",],
        ['reklama' => "https://www.nike.com/pl/",],
        ['reklama' => "https://www.flashscore.pl/",],
        ['reklama' => "https://www.zara.com",],
        ['reklama' => "https://www.asos.com",],
        ['reklama' => "https://www.hm.com",],
        ['reklama' => "https://us.shein.com",],
        ['reklama' => "https://www.express.com",],
        ['reklama' => "https://www.shopbop.com",]

];

$losowyKlucz = array_rand($reklama);
$wybranaReklama = $reklama[$losowyKlucz]['reklama'];


// Pobieranie id podstrony z URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1; // Domyślnie ustawiamy na 1

// Sprawdzanie, czy podstrona o danym ID istnieje
if (!isset($podstrony[$id])) {
    $id = 1; // Ustawienie domyślnej podstrony, jeśli ID jest nieprawidłowe
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Strona 1</title>
	<style type="text/css">
	@media only screen and (min-width: 900px) {
		#kontener { width: 850px; margin: 0 auto 0 auto; }
		main { float: left; width: 70%; }
		aside { float: right; width: 28%; }
		footer { clear: both; }
		}
	</style>
</head>
<body>
	<div id="kontener">
		<header>
			<h1>Witaj na mojej stronie!</h1>
		</header>
		<div>
			<main>
				<article>
					<?php 
                    if ($id!=4){
                        echo '<h2>'.$podstrony[$id]['nazwa'].'</h2>'; 
                        echo '<p>'.$podstrony[$id]['tresc'].'</p>';
                    }
                    else {
                        echo '<h2>'.$podstrony[$id]['nazwa'].'</h2>';
                        include ('gallery.php');  
                    }
                    ?>
					
				</article>
				<article>
				<h2>Stały artykuł</h2> 
                    <img src="<?php echo $zdjecia['Losowe zdjęcie 1']; ?>" alt="Losowe zdjęcie 1">
                    <img src="<?php echo $zdjecia['Losowe zdjęcie 2']; ?>" alt="Losowe zdjęcie 2">
                    <img src="<?php echo $zdjecia['Losowe zdjęcie 3']; ?>" alt="Losowe zdjęcie 3">
				</article>
			
			</main>
			<aside>
				<nav>
					<h3>Menu</h3>
					<ul>
                        <?php foreach ($podstrony as $key => $podstrona): ?>
                            <li><a href="?id=<?php echo $key; ?>"><?php echo $podstrona['nazwa']; ?></a></li>
                        <?php endforeach; ?>
                            <li><a href="http://zszwolsztyn.pl">ZSZ</a></li>
					</ul>
				</nav>
				<section>
					<h3>Reklamy</h3>
					<p>Pozdrowienia dla 4P...</p>
				</section>
				<section>
					<h3>Social media</h3>
					<?php             
                        foreach ($media as $item) {
                            echo '<a href="' . $item['link'] . '" target="_blank">';
                            echo '<img src="' . $item['foto'] . '" alt="Logo" style="width: 50px; height: 50px; margin-right: 10px;">';
                            echo '</a>';
                        }
                        ?>
				</section>
			</aside>
		</div>
		<footer>
			<div> pk.sth © 2024</div>
			<div>Strona o niczym by PK przygotowane specjalnie dla 4I. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
		</footer>
	</div>
</body>
</html>
