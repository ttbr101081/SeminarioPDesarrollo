<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM orders WHERE order_date >= '$start_date' AND order_date <= '$end_date' and order_status = 1";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Fecha</th>
			<th>Cliente </th>
			<th>Detalle </th>
		</tr>

		<tr>';
		$txt = "";
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['order_date'].'</center></td>
				<td><center>'.$result['client_name'].'</center></td>';
				
			$sql1 = "SELECT * FROM order_item WHERE order_id = " .$result['order_id']. " and order_item_status = 1";
			$query1 = $connect->query($sql1);
			while($re = $query1->fetch_assoc()){
				$sql2 = "SELECT * FROM product WHERE product_id = " .$re['product_id']. " and status = 1";
				$query2 = $connect->query($sql2);
				while($re2 = $query2->fetch_assoc()){
					$p = $re2['product_name'];
				}
				$txt .= $p." ".$re['quantity'].'</br>';
			}
			$table .= '<td><center>'.$txt.'</center></td>
			</tr>';
			$txt = "";
		}
		$table .= '
		</tr>
	</table>
	';	

	echo $table;

}

?>