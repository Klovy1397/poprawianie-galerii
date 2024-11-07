<?php
$socials = [
    ['link' => 'https://www.youtube.com', 'foto' => 'https://cdn.iconscout.com/icon/free/png-256/free-youtube-logo-icon-download-in-svg-png-gif-file-formats--social-media-70-flat-icons-color-pack-logos-432560.png?f=webp&w=256'],
    ['link' => 'https://www.discord.com', 'foto' => 'https://darkanddarker.wiki.spellsandguns.com/images/thumb/1/15/Discord_logo.webp/213px-Discord_logo.webp.png'],
    ['link' => 'https://telegram.org', 'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/1024px-Telegram_logo.svg.png']
];

function social_links() {
    global $socials;
    foreach ($socials as $soc) {
        echo '<a href="'. $soc['link'] .'" target="_blank"><img src="'. $soc['foto'] .'" alt="Social Icon" style="width: 50px; height: 50px; margin: 5px;"></a>';
    }
}
?>
