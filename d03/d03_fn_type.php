<?php 
echo "<h2>Demo declaration scalar type</h2>";
echo "<hr>";

echo "<h3> In function without declare parameter type</h3>";
fn_untype(123.456);   // tham so la so thuc 
fn_untype(123);       // tham so la so nguyen
fn_untype(true);      // tham so la boolean
fn_untype(false);     // tham so la boolean
fn_untype("123.456"); // tham so la chuoi ky tu
fn_untype("123 USD"); // tham so la chuoi ky tu

echo "<hr>";
echo "<h3> In function with declare parameter type</h3>";
fn_type(123.456);   // tham so la so thuc 
fn_type(123);       // tham so la so nguyen
fn_type(true);      // tham so la boolean
fn_type(false);     // tham so la boolean
fn_type("123.456"); // tham so la chuoi ky tu
fn_type("123 USD"); // tham so la chuoi ky tu



function fn_untype($x){
    echo " x =  [$x] <br>";
}

function fn_type(float $x){
    echo " x =  [$x] <br>";
}