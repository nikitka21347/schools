<?php 
header("Content-type: text/html; charset=utf-8");
$search = $_POST['search'];
//две строчки закоментировать $search чтобы нормально искалось!
//$search = addslashes($search);
//$search = htmlspecialchars($search);
$search = stripslashes($search);
$db = mysql_connect("localhost", "root", "");
mysql_select_db("my_site", $db);
mysql_query("SET NAMES UTF-8");

$query = mysql_query("SELECT * FROM `1` WHERE head LIKE '$search%'") or die('echo"Ошибка";');

	if($search == '') {

		if (mysql_num_rows($query) > 0) {
			$sql = mysql_fetch_array($query);
			do {
				echo "<div>".$sql['head']."</div>";
			} while ($sql = mysql_fetch_array($query));
		} else {
			echo "Нет результатов";
		}

		//	exit("Начните вводить запрос");
	}

if (mysql_num_rows($query) > 0) {
	$sql = mysql_fetch_array($query);
	do {
		echo "<div>".$sql['head']."</div>";
	}while($sql = mysql_fetch_array($query));
 } else {
 	echo "Нет результатов";
 }
?>
<script type="text/javascript">
	$vale = document.getElementById("search").value;
	console.log($vale);
</script>