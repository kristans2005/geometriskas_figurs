<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

include "Circle.php";
include "Rectangle.php";


$data = [
    "message" => "message from php"
];

//echo json_encode($data);

$rectangle = new Rectangle("red", 10, 20);
$circle = new Circle("blue", 10);
$shape = [
    [
        'color'=>$rectangle->color,
        'width'=>$rectangle->width,
        'height'=>$rectangle->height,
        'area'=>$rectangle->calculateArea()
    ],
    [
        'color'=>$circle->color,
        'radius'=>$circle->radius,
        'area'=>$circle->calculateArea()
    ]
];
echo json_encode($shape);

// echo "omor";