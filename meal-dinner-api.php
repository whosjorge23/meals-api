<?php
    //DB RESULTS
    
    $arr = [];
    
    $carbonaraPasta = [];
    $carbonaraPasta['name'] = "Carbonara's Pasta";
    $carbonaraPasta['level'] = "Normal";
    $carbonaraPasta['kcals'] = "700";
    $carbonaraPasta['time'] = "45";
    $carbonaraPasta['link'] = "carbonaraPasta";
    $carbonaraPasta['img'] = "https://unsplash.com/photos/teuvnOXOGVo/download?force=true&w=1920";
    
    $pizzaMargherita['name'] = "Pizza Margherita";
    $pizzaMargherita['level'] = "Normal";
    $pizzaMargherita['kcals'] ="400";
    $pizzaMargherita['time'] = "120";
    $pizzaMargherita['kcals'] ="pizzaMargherita";
    $pizzaMargherita['img'] = "https://unsplash.com/photos/YUzSjKG9QmU/download?force=true&w=1920";

    $arr['parent'] = "Dinner";
    $arr['meal'] = [$carbonaraPasta,$pizzaMargherita];

    header('Content-Type: application/json');
    echo json_encode($arr);
?>