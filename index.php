<body>
<html>

<title>太陽字詞總匯</title> // 字典網站名稱
<link rel="shortcut icon" href="http://dict.zz.mu/favicon.ico"> // 字典網站圖示

<form name="form1" method="post" action="index.php"><input type="text" name="text" maxlength="100" size"2" style="width: 376px" />
<input name="搜尋" type="Submit" value="搜尋" /></form> 
<hr>

<?
$text2=$_POST["text"]; // 用POST可以不改網址。
switch ($text2)

{ // 起始端

case "":
echo "Enter words 請輸入字元";
break; 

case "第一條字詞":
echo "<font size='5'>第一條字詞</font><hr>第一條字詞的解釋。";
break; // 若與搜尋字條一樣，斷開，不要出下面的資訊，只顯示第一條字詞的結果。

case "第二個字詞":
case "第三個字詞": // 若第三條字詞的解釋和第二條字詞一樣，
echo "<font size='5'>第二個字詞，第三個字詞</font><hr>第二條字詞的解釋。";
break;

default: // 查無此字詞
echo "Not found 查無此字詞";

} // 終端
?>

</body>
</html>
