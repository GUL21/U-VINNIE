<?php
	defined('myeshop');

	$result1 = mysql_query("SELECT * FROM orders WHERE order_confirmed='no'",$link);
    $count1 = mysql_num_rows($result1);
    
    if ($count1 > 0) { $count_str1 = '<p>+'.$count1.'</p>'; } else { $count_str1 = ''; }
?>
<div id="block-header">
	<div id="block-header1">
		<h3>У ВИННИ. Панель Управления</h3>
		<p id="link-nav"><?php echo $_SESSION['urlpage'] ?></p>	
	</div>
	<div id="block-header2" >
		<p align="right">Здравствуйте!</p>
		<p align="right"><a href="?logout">Выход</a></p>
		
	</div>
</div>
<div id="left-nav">
	<ul>
		<li><a href="orders.php">Заказы</a><?php echo $count_str1; ?></li>
		<li><a href="tovar.php">Товары</a></li>
		<li><a href="props.php">Настройка свойств</a></li>
	</ul>
	<a href="../index.php"><img src="../images/magaz.png" id="magaz"></a>	
</div>