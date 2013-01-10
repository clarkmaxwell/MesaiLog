<?php
$bolumSyntax = "/([\=]{40})(\s*)(\w+)(\s*)([\=]{40})/";
$zamanSyntax = "/([\-]{2})(\s+)(\w+\:\w+)/";
$konuSyntax  = "/([\[])([a-zA-Z0-9\s]*)([\]])/";
$ifadeSyntax = "/[\@\w+\:]\-\>\s*(\w*)\s*\<\-/";
$data = file_get_contents("syntax.txt");
preg_match_all($bolumSyntax, $data,$bolumler);
preg_match_all($zamanSyntax, $data,$zamanlar);
preg_match_all($konuSyntax, $data,$konular);
preg_match_all($ifadeSyntax, $data, $ifadeler);


var_dump($ifadeler);