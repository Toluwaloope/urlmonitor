<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<script src="js/jquery-2.0.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/navigation.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="js/simplePagination.css">
	<script src="js/jquery.simplePagination.js"></script>
	<title>Home</title>

	
</head>
<body>
<div class="topnav" >
	<img src="images/logo2.jpg" width="128" height="128">
	<a href="http://10.12.100.116/dashboard/Home/">Dashboard</a>
    <!--<a href="connection.php">Test Connections</a>
    <a href="index.php">Generate Reports</a> -->

</div>


<table>
		<thead>
				<tr>
					<td><h1>APP</h1></td>
					<td><h1>STATUS</h1></td>
					<td><h1>MESSAGE</h1></td>					
				</tr>
		</thead>

		<tbody>
<!-- TEST FOR ecoalert -->
<tr>
		<td><label for="fep">FACEBOOK</label></td>
		<td>
			<?PHP
			
			echo testUrl('www.facebook.com');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('www.facebook.com');
			
			?> 
		</td>  
<tr>
<!-- TEST FOR SHIFT REPORT -->
<tr>

		<td><label for="fep">GOOGLE</label></td>
		<td>
			<?PHP
			
			echo testUrl('www.google.com');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('www.google.com');
			
			?> 
		</td> 

 </tr>
 <!-- TEST FOR DMM -->
<tr>

		<td><label for="fep">DMM 70</label></td>
		<td>
			<?PHP
			
			echo testUrl('http://10.12.14.70:8080/DMM/faces/Login.jsp');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('http://10.12.14.70:8080/DMM/faces/Login.jsp');
			
			?> 
		</td> 
		  
 </tr>
  <!-- TEST FOR DMM -->
<tr>

		<td><label for="fep">DMM 56</label></td>
		<td>
			<?PHP
			
			echo testUrl('http://10.12.14.56:8080/DMM/faces/Login.jsp');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('http://10.12.14.56:8080/DMM/faces/Login.jsp');
			
			?> 
		</td> 
		  
 </tr>
 <!-- TEST FOR ONE APP -->
<tr>

		<td><label for="fep">ONE APP</label></td>
		<td>
			<?PHP
			
			echo testUrl('http://10.4.174.126:8090/');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('http://10.4.174.126:8090/');
			
			?> 
		</td> 
		  
 </tr>
 <!-- TEST FOR SHIFT REPORT -->
<tr>

		<td><label for="fep">CREDIT PLUS</label></td>
		<td>
			<?PHP
			
			echo testUrl('http://10.2.55.249:9080/processmanager/login/loginapp.faces');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('http://10.2.55.249:9080/processmanager/login/loginapp.faces');
			
			?> 
		</td> 
		  
 </tr>

  <!-- TEST FOR SHIFT REPORT -->
<tr>

		<td><label for="fep">S-TRACK</label></td>
		<td>
			<?PHP
			
			echo testUrl('https://eng-sla-01.ecobank.group/srlogin.php');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('https://eng-sla-01.ecobank.group/srlogin.php');
			
			?> 
		</td> 
		  
 </tr>
   <!-- TEST FOR LEGAL SEARCH -->
<tr>

		<td><label for="fep">LEGAL SEARCH</label></td>
		<td>
			<?PHP
			
			echo testUrl('http://192.168.31.151/legalsearch/Default.aspx');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('http://192.168.31.151/legalsearch/Default.aspx');
			
			?> 
		</td> 
		  
 </tr> 
    <!-- TEST FOR DASHBOARD -->
<tr>

		<td><label for="fep">DASHBOARD</label></td>
		<td>
			<?PHP
			
			echo testUrl('https://10.4.130.22/dashboard/home');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('https://10.4.130.22/dashboard/home');
			
			?> 
		</td> 
		  
 </tr> 
     <!-- TEST FOR ECOSAYS -->
<tr>

		<td><label for="fep">ECOSAYS</label></td>
		<td>
			<?PHP
			
			echo testUrl('https://ecosays.ecobank.group/ecosays/login.jsf');
			
			?> 
		</td> 
		<td>
			<?PHP
			
			echo headCode('https://ecosays.ecobank.group/ecosays/login.jsf');
			
			?> 
		</td> 
		  
 </tr> 
 
</tbody>
</table>
</body>
  </html>
  


<?php


function testUrl($url){
	$ch = curl_init($url);
 
//Disable CURLOPT_SSL_VERIFYHOST and CURLOPT_SSL_VERIFYPEER by
//setting them to false.
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//Execute the request.
curl_exec($ch);

//$headers = get_headers($url, 1);
$stat = curl_getinfo($ch, CURLINFO_HTTP_CODE) ;

	if ($stat == '200') {

	$output = '<button class="btn-success">URL IS OK</button>';
	}

	else  {
	$output ='<button class="btn-danger">URL IS DOWN</button>';
	}
	
	return $output;
	curl_close($ch);
}

function headCode($url){

$ch = curl_init($url);
 
//Disable CURLOPT_SSL_VERIFYHOST and CURLOPT_SSL_VERIFYPEER by
//setting them to false.
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//Execute the request.
curl_exec($ch);

//$headers = get_headers($url, 1);
$stat = curl_getinfo($ch, CURLINFO_HTTP_CODE) ;

	return $stat;
	curl_close($ch);
}


?>
<script type="text/javascript">
        function refresh() {
            setTimeout(function () {
                location.reload();
            }, 30000);
        }
        refresh();
    </script>
  


