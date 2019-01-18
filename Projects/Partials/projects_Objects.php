<?php
require 'classes.php';
$objects=[];


//template ::::______
// (
//    $name,
//    $mainTitle,
//    $secTitle,
//    $color,
//    $imgSrc,
//    $live,
//    $link,
//    $text,
//    $sliderArray
//   )
//////////////////////////////////
/////////////////////////////////



//Creating ArabianDevs Object

array_push($objects, new Project("arabiandevs",
                                  "Arabian Developers Website",
                                  "php - jquery - syntax highlighter - css - html",
                                  "#79c79c",
                                  "../assets/projects/ad.svg",
                                  true,
                                  "https://arabiandevs.com",
                                  "https://github.com/Ibrahimrahhal/ArabianDevs.com",
                                  "shit",
                                  null
                                ));



//Creating Arabic Name Generator Object

array_push($objects, new Project("arabicnamegenerator",
                                  "Arabic Fake Name Generator With API",
                                  "Node js - Express - Angular - Typescript - css - html",
                                  "#121212",
                                  "../assets/projects/ang.svg",
                                  true,
                                  "https://ibrahimrahhal.github.io/AANG_Deploy/",
                                  "https://github.com/Ibrahimrahhal/Arabic_name_Generator_Front_End",
                                  "shit",
                                  null
                                ));





//Creating Arabic Name Generator Object

array_push($objects, new Project("youtubesync",
                                  "Synchronous Realtime Youtube Player",
                                  "Node js - Express - Socket IO - Youtube Player API - css - html",
                                  "#da1f26",
                                  "../assets/projects/sync.svg",
                                  true,
                                  "https://syncyt.herokuapp.com/",
                                  "https://github.com/Ibrahimrahhal/Synchronous_Youtube_player",
                                  "shit",
                                  null
                                ));


//Creating BusinessHash Object


$bg_items = "

[  {
         src: 'gallery/bh/0.png',
         w: 1280,
         h: 1024
     },
     {
              src: 'gallery/bh/1.png',
              w: 1280,
              h: 1024
          },
          {
                   src: 'gallery/bh/2.png',
                   w: 1280,
                   h: 1024
               },
               {
                        src: 'gallery/bh/3.png',
                        w: 1280,
                        h: 1024
                    },
                    {
                             src: 'gallery/bh/4.png',
                             w: 1280,
                             h: 1024
                         },
                         {
                                  src: 'gallery/bh/5.png',
                                  w: 1280,
                                  h: 1024
                              }
 ]

";
array_push($objects, new Project("businesshash",
                                  "Business Hash Website",
                                  "php - jquery - typetype js - jquery ui - css - html",
                                  "#da1f26",
                                  "../assets/projects/bh.svg",
                                  false,
                                  "null",
                                  "https://github.com/Ibrahimrahhal/Businesshash.com",
                                  "shit",
                                  $bg_items
                                ));








// Creating Http Client Object


$hc_items = "

[  {
         src: 'gallery/hc/0.png',
         w: 1654,
         h: 1128
     }
 ]

";
array_push($objects, new Project("http",
                                  "Native Desktop http Client",
                                  "Electron - Node js - Angular - Typescript - css - html",
                                  "#FFD700",
                                  "../assets/projects/http.svg",
                                  false,
                                  "null",
                                  "https://github.com/Ibrahimrahhal/GUI_HTTP_C",
                                  "shit",
                                  $hc_items
                                ));

// $objects[0]->renderProject();







$GLOBALS["objectArray"]=$objects;
 ?>
