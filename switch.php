<?php
$notu = 4;
switch ($notu):
    case 0: echo "Başarısız"; break;
    case 1: echo "Zayıf"; break;
    case 2: echo "Geçer"; break;
    case 3: echo "Orta"; break;
    case 4: echo "İyi"; break;
    case 5: echo "Pekiyi"; break;
    default: echo "Girilen değer 0-5 arası değere sahip değil.";
endswitch;
?>