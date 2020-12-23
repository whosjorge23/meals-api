<?php
    //DB RESULTS
    
    $arr = [];
    
    $pancackes = [];
    $pancackes['name'] = "Pancakes";
    $pancackes['level'] = "Easy";
    $pancackes['kcals'] = "200";
    $pancackes['time'] = "15";
    $pancackes['link'] = "pancackes";
    $pancackes['img'] = "https://unsplash.com/photos/teuvnOXOGVo/download?force=true&w=1920";
    
    $muffins['name'] = "Muffin";
    $muffins['level'] = "Normal";
    $muffins['kcals'] ="340";
    $muffins['time'] = "30";
    $muffins['kcals'] ="muffins";
    $muffins['img'] = "https://unsplash.com/photos/YUzSjKG9QmU/download?force=true&w=1920";

    $arr['parent'] = "Snack";
    $arr['meal'] = [$pancackes,$muffins];

    header('Content-Type: application/json');
    echo json_encode($arr);
?>