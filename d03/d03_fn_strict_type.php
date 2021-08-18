<?php 
declare(strict_types=1);

echo "<h2>Demo declaration scalar type </h2>";
echo "<p>(strict type = 1)</p>";
echo "<hr>";

fn_type(123.456);   // tham so la so thuc 
fn_type(123);       // tham so la so nguyen
fn_type(true);      // tham so la boolean
fn_type(false);     // tham so la boolean
fn_type("123.456"); // tham so la chuoi ky tu
fn_type("123 USD"); // tham so la chuoi ky tu



function fn_type(float $x){
    echo " x =  [$x] <br>";
}