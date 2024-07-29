<?php
error_reporting(0);
header('Content-Type: application/json');
/*
نویسنده : @DevMrHo3ein
اپن شده در : N̲e̲x̲ ̲C̲o̲d̲e̲

کپی بدون ذکر منبع پیگرد ناموسی دارد 🥴
*/
if($_GET['q'] != null)
{
function Get()
{
    $g = urlencode($_GET['q']);
    $url = "https://www.freepik.com/search";
    $all = $url . "?format=search&query=" . $g;
    $get = file_get_contents($all);
    return $get;
}
/*
نویسنده : @DevMrHo3ein
اپن شده در : N̲e̲x̲ ̲C̲o̲d̲e̲

کپی بدون ذکر منبع پیگرد ناموسی دارد 🥴
*/
function image(){
    preg_match_all('#<img class="(.*)" src="(.*)" alt="(.*)" data-src="(.*)" data-orientation="(.*)" />#',Get(),$echo);
$data = [];
for ($numm = 1; $numm <= 49; $numm++) {
  $num = 49 - $numm;
  $data['image '.$numm] = $echo[4][$num];
}
  return $data;

}
/*
نویسنده : @DevMrHo3ein
اپن شده در : N̲e̲x̲ ̲C̲o̲d̲e̲

کپی بدون ذکر منبع پیگرد ناموسی دارد 🥴
*/
if(image() != null)
{
    echo json_encode([
        'ok'=>true,
        'Channel'=>"@Nex_Code",
        'Developed by'=>"@DevMrHo3ein",
        'Results'=>image(),
    ],448);
}
else
{
    echo json_encode([
        'ok'=>false,
        'Channel'=>"@Nex_Code",
        'Developed by'=>"@DevMrHo3ein",
        'Results'=>"لوگویی یافت نشد",
    ],448);
}
}
/*
نویسنده : @DevMrHo3ein
اپن شده در : N̲e̲x̲ ̲C̲o̲d̲e̲

کپی بدون ذکر منبع پیگرد ناموسی دارد 🥴
*/
else
{
    echo json_encode([
        'ok'=>false,
        'Channel'=>"@Nex_Code",
        'Developed by'=>"@DevMrHo3ein",
        'Results'=>[
            'error'=>"ورودی یافت نشد",
            ]
        ],448);
}

/*
نویسنده : @DevMrHo3ein
اپن شده در : N̲e̲x̲ ̲C̲o̲d̲e̲

کپی بدون ذکر منبع پیگرد ناموسی دارد 🥴
*/
