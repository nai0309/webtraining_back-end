<!-- <h1>這是1_show.php</h1> -->
<?php



// $db=new PDO("mysql:host=127.0.0.1;dbname=php_10804;charset=utf8","root","");

//layout switch
// if(!empty($_POST['mdy'])) $layout="mdy"; //如果GET的mdy有東西，代表被觸發了修改按鈕，那我的畫面應該是mdy模式
// else $layout="list"; //否則為list模式
$layout=(!empty($_GET['mdy']))?'mdy':'list';
switch ($layout){
    case 'mdy':
        include_once('2_mdy.php');
    break;
    case 'list':
        include_once('2_list.php');
    break;
}


