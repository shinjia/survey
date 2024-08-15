<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

//  extract($_POST);   // 不安全


// 顯示網頁
$html = <<< HEREDOC
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survey</title> 
</head> 

<body> 
<h2>xxx 已收到你的資料如下</h2>

<p>姓名：xxx</p>
<p>密碼：xxx</p>
<p>性別：xxx</p>
<p>血型：xxx</p>
<p>生日：xxx 年 xxx 月 xxx 日</p>
<p>已婚：xxx</p>
<p>興趣：xxx, xxx, xxx, xxx</p>
<p>介紹：xxx</p>

</body> 
</html> 
HEREDOC;

echo $html; 
?>