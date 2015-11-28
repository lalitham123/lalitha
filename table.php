<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("Sai",$con);
$select=" select * from marks";
$query=mysql_query($select);
 if(isset($_POST['submit'])){
	 $c=0;
	 while
		 ($fetch=mysql_fetch_array($query)){
			 if($_POST['users']==$fetch['id']){
		 $c++;
	 }
 }
 if($c!=0){
	 echo "For this user marks already entered";
	header("refresh:2;url=form.php");
 }
 else{
 $insert= 'insert into marks(sub1,sub2,sub3,sub4,sub5,sub6,customerid)
 values("'.$_POST['sub1'].'","'.$_POST['sub2'].'","'.$_POST['sub3'].'","'.$_POST['sub4'].'","'.$_POST['sub5'].'","'.$_POST['sub6'].'","'.$_POST['users'].'")';

 if($query=mysql_query($insert)){
	  echo "Success";
 }
 else{
	 echo "not success";
 }
 }
 }
 ?>