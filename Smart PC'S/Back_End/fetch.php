<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "smartpcs");
$columns = array('order_id', 'customer_id', 'due_amount', 'invoice_no', 'product_id', 'qty','order_date','order_status'


);

$query = "SELECT * FROM customer_orders WHERE ";

if($_POST["is_date_search"] == "yes")
{
 $query .= 'order_date BETWEEN "'.$_POST["start_date"].'" AND "'.$_POST["end_date"].'" AND ';
}

if(isset($_POST["search"]["value"]))
{
 $query .= '
  (order_id LIKE "%'.$_POST["search"]["value"].'%" 
  OR customer_id LIKE "%'.$_POST["search"]["value"].'%" 
  OR due_amount LIKE "%'.$_POST["search"]["value"].'%" 
  OR invoice_no LIKE "%'.$_POST["search"]["value"].'%"
  OR product_id LIKE "%'.$_POST["search"]["value"].'%"
  OR qty LIKE "%'.$_POST["search"]["value"].'%" 
  OR order_date LIKE "%'.$_POST["search"]["value"].'%"
  OR order_status LIKE "%'.$_POST["search"]["value"].'%" )
 
 ';


 
}




if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}


$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = $row["order_id"];
 $sub_array[] = $row["customer_id"];
 $sub_array[] = $row["due_amount"];
 $sub_array[] = $row["invoice_no"];
 $sub_array[] = $row["product_id"];
 $sub_array[] = $row["qty"];
 $sub_array[] = $row["order_date"];
 $sub_array[] = $row["order_status"];
 $data[] = $sub_array;


}

function get_all_data($connect)
{
 $query = "SELECT * FROM customer_orders";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
