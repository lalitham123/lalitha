<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web",$conn);
$sql='select registration11.*,marks.* from registration11 inner join marks on registration11.id=marks.customerid';
$query=mysql_query($sql);
 ?>
 
<style>
body {background-color:green}
table{
	 border: 2px solid orange;
	 border-collapse:collapse;
	 width:100%;
	 height:100%;
     }
table th{
	border:2px solid blue;
	padding:5px;

}
table td{
	border:1px solid red;
	padding:10px;
	text-align:center;

}
table tr{
	border:1px #99FF33;
	
        }
</style>
<table>
<tr>
<th style="color:#0000FF">S.No</th>
<th style="color:#0000FF">Name</th>
<th style="color:#0000FF">subject1</th>
<th style="color:#0000FF">subject2</th>
<th style="color:#0000FF">subject3</th>
<th style="color:#0000FF">subject4 </th>
<th style="color:#0000FF">subject5</th>
<th style="color:#0000FF">subject6</th>
<th style="color:#0000FF">Total</th>
<th style="color:#0000FF">Avg</th>
<th style="color:#0000FF">Grade</th>
</tr>
<?php
$a=1;
while($fetch=mysql_fetch_array($query)){
?>
<tr>
<td style="color:#F0F"><?php echo $a++;?></td>
<td style="color:red"><?php echo $fetch['First_Name'];?></td>
<td style="color:yellow"><?php echo $fetch['subject1'];?></td>
<td style="color:purple"><?php echo $fetch['subject2'];?></td>
<td style="color:orange"><?php echo $fetch['subject3'];?></td>
<td style="color:violet"><?php echo $fetch['subject4'];?></td>
<td style="color:white"><?php echo $fetch['subject5'];?></td>
<td style="color:pink"><?php echo $fetch['subject6'];?></td>
<?php $total=$fetch['subject1']+$fetch['subject2']+$fetch['subject3']+$fetch['subject4']+$fetch['subject5']+$fetch['subject6'];?>
<td style="color:blue"><b><?php echo $total;?></b></td>
<td style="color:#F0C"><?php echo $total/6;?></td>
<td style="color:#FF0000"><?php 
	if($total==0){
		echo "Fail";
}
else{
if($total>500){
	echo "A";
}
else if($total>350){
	echo "B";
}
else {
	echo "C";
}
}
?></td>
</tr>
<?php
}
?>
</table>
</body>








