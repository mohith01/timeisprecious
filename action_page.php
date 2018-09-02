<?php
$host="localhost";
$user="root";
$password="";
$con=mysql_connect($host,$user,$password)
if(!$con){
echo'<h1>connected to mysql</h1>';
$db=myselect_select_db("test",$con);
$query=mysql_query($emailaddress,$phonenumber,$date,$time,$db);
}
else{

    echo'<h1>mysql server is not connectinf
}


}
</html>