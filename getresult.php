<html>
<head>

<script type="text/javascript">

var timeout = setTimeout("location.reload(true);",5000);
  
</script>

<style type="text/css">
	

       .t{  text-align: center;
		width:100%; 
border-bottom: 1px solid #ddd;
		border-collapse:collapse; 
	}
       .t th { 
         background-color: #AE6707;
         color: white;
        }
	.t td{ 
		padding:7px; /*border:#4e95f4 1px solid;*/
	}
	/* provide some minimal visual accomodation for IE8 and below */
	.t tr{
		background: #b8d1f3;
	}
	/*  Define the background color for all the ODD background rows  */
	.t tr:nth-child(odd){ 
		//background: #977305;
background: #A67C05;
color:#ffffff;
font-size: 10px;
font-family: Lucida Sans;
 font-weight: bold;

        
	}
	/*  Define the background color for all the EVEN background rows  */
	.t tr:nth-child(even){
		background: #C58F05;
 font-weight: bold;
color:#ffffff;
font-size: 10px;
font-family: Lucida Sans;

	}
</style>

</head>

<body>

<?php

 include 'connection.php';

 
 
 global $connect;
 

$query = "Select * FROM tab;";

$result = mysqli_query($connect,$query);


if($result){
	 
	echo '<center><table style="text-align:center;" class="t" align="left"
	cellspacing="5" cellpadding="8">
	 
    <tr style="text-align:center;"><th align="left"><b>ID</b></th>
        <th align="left"><b>Area</b></th>
	<th align="left" ><b>Name</b></th>
	<th align="left" ><b>Mobile Number</b></th>
	<th align="left" ><b>Description</b></th>
        <th align="left"><b>Timestamp</b></th>
	</tr>';
	 
	
	while($row = mysqli_fetch_array($result))
        {
        echo '<tr > <td align="left" >' .$row['id'] .'</td>
                   <td align="left" >' .$row['area'] .'</td> 
                   <td align="left">' .$row['name'] . '</td>
                   <td align="left">' .$row['mno'] . '</td>
                   <td align="left" >' .$row['des'] . '</td>
                   <td align="left">' .$row['time'] . '</td>';
	 
	echo '</tr>';
	}
	 
	echo '</table></center>';
	 
	}
else {
	 
	echo "Couldn't issue database query<br />";
	 
	echo mysqli_error($connect);
	 
	} 
?>
</body>
</html>
