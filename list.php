<?php
include('conn.php');
$sql="select customer_name, depositor.account_number, balance from depositor
inner join account on depositor.account_number= account.account_number" ;
$res=mysqli_query($conn, $sql);
//replace code for table in html page with the following code:
echo '<table border="1"><tr><th>Name</th><th>A/C No.</th><th>
Balance</th><th>Details</th></tr>';
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['customer_name'] . '</td><td>'.
$result['account_number'] . '</td><td>' . $result['balance'] . '</td><td><a
href="depositor_detail.php?uname='. $result['customer_name'] . ' ">View
Details</a></td></tr>';
}
echo '</table>';
?>