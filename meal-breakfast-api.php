<?php
    //DB RESULTS
    
    $arr = [];
    
    $scrambledEggs = [];
    $scrambledEggs['name'] = "Scrambled Eggs";
    $scrambledEggs['level'] = "Easy";
    $scrambledEggs['kcals'] = "490";
    $scrambledEggs['time'] = "5";
    $scrambledEggs['link'] = "scrambledEggs";
    $scrambledEggs['img'] = "https://unsplash.com/photos/teuvnOXOGVo/download?force=true&w=1920";
    
    $scrambledEggsBacon['name'] = "Scrambled Eggs & Bacon";
    $scrambledEggsBacon['level'] = "Normal";
    $scrambledEggsBacon['kcals'] ="600";
    $scrambledEggsBacon['time'] = "15";
    $scrambledEggsBacon['kcals'] ="scrambledEggsBacon";
    $scrambledEggsBacon['img'] = "https://unsplash.com/photos/teuvnOXOGVo/download?force=true&w=1920";

    $arr['parent'] = "Breakfast";
    $arr['meal'] = [$scrambledEggs,$scrambledEggsBacon];

    header('Content-Type: application/json');
    echo json_encode($arr);
?>