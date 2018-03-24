<?php

$lang_en = array(
   'activ' => true,
   'name' => "English",
   'id' => "en",
   'index_CommingSoon' => 'RubiconWeb Comming Soon',
   'main_copyright' => 'Copyright (c) 2018 lucsoft All Rights Reserved.',
   '404_title' => 'Unknown file Error: 404',
   '404_description' => 'The Monkeys couldn\'t help with youre quest: '
);
$lang_de = array(
   'activ' => true,
   'name' => "Deutsch",
   'id' => "de",

   'main_HelloWorld' => 'Hallo Welt, I bims',
   'index_CommingSoon' => 'RubiconWeb wird demnächst erscheinen',
   'main_copyright' => 'Copyright (c) 2018 lucsoft Alle Rechte vorbehalten.',
   '404_title' => 'Unbekannte Detei Error: 404',
   '404_description' => 'Unsere Affen können nichts mit Diesen Abfrage   tun: ',

);

$lang = array(
   'de' => $lang_de,
   'en' => $lang_en,
   'defaultLang' => "de",
   'setDefaultLang' => function($langlist)
      {
         $langlist = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
         $config = include 'config.php';
         $lang = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
         for ($langitem=0; $langitem < count($lang); $langitem++) {
            if ($config["language"][$lang[$langitem]]["activ"]) {
               $lang = $config["language"][$lang[$langitem]]["id"];
               break;
               }
         }
         return $config["language"][$lang];
      }
);
return $lang;
 ?>
