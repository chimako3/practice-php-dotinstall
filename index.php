<?php

//定数:変更されない値につけるラベル
//定数名は慣習で"大文字"で名付ける
//変数と違って $ は付かない

define("MY_EMAIL","free-mail@gmail.com");

echo MY_EMAIL;
//MY_EMAIL = "hogehoge";  //定数は変更できないため

var_dump(__LINE__);//12
var_dump(__LINE__);
var_dump(__LINE__);

var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__DIR__);
 ?>
