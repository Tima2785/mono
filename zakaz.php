<? 
// ----------------------------конфигурация-------------------------- // 
 
$adminemail="hstar2601@gmail.com";  // e-mail админа 

$backurl="form-ok.html";  // На какую страничку переходим после отправки письма 

$name="Велюровий жіночий костюм";  // Заголовок письма

$headers .= "From: КЛИЕНТ <mail@example.com>\r\n"; // Заголовок письма и адресат от кого

$headers .= "Content-type: text/html; charset=\"utf-8\""; // Кодировка

$headers .= "Reply-To: hstar2601@gmail.com\r\n"; // e-mail админа 
 
$ip = $_SERVER['REMOTE_ADDR']; // Узнаем IP покупателя
//---------------------------------------------------------------------- // 
 
  
 
#Принимаем данные с формы 
 
//$_POST[''] - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались

$msg1 = substr(htmlspecialchars(trim($_POST['name'])), 0, 100); 
 
$msg2 = substr(htmlspecialchars(trim($_POST['phone'])), 0, 100);

$msg3 = substr(htmlspecialchars(trim($_POST['s2'])), 0, 100);

$msg4 = substr(htmlspecialchars(trim($_POST['s3'])), 0, 100);






#Проверяем валидность  
if( $msg2 == '' )
{

 } 
else{

#Создаем текст письма
$msg=" 
 
Велюровий костюм <br><br>

ПІБ: $msg1<br>

Телефон: $msg2<br>

Колір: $msg3<br>

Розмір: $msg4<br>

IP покупателя: $ip

"; 
 
  
 
#Отправляем письмо
mail("$adminemail", "$name", "$msg", "$headers");
 
  
 
#Переадресовываем на страницу благодарности
 print "<script language='Javascript'><!-- 
function reload() {location = \"$backurl\"}; setTimeout('reload()', 0000); 
//--></script> 
 ";  
exit; 
 

 } 


?>