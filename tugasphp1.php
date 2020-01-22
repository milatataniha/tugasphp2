<!DOCTYPE html>
<html>
<head>
	<!--untuk CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--untuk CSS-->
	<title>Assignment</title>
</head>
<body background="1.jpg">
	<?php
	$ANI1=78;
	$ANI2=87;
	$ANI3=80;
	$BUDI1=80;
	$BUDI2=65;
	$BUDI3=75;
	$FARIZ1=45;
	$FARIZ2=60;
	$FARIZ3=60;
	$SIGIT1=50;
	$SIGIT2=60;
	$SIGIT3=76;
	// $Jumlah;
	// $Rerata;
	// $Rerataani;
	// $Reratabudi;
	// $Reratafariz;
	// $Reratasigit;
	?>
	<font color="black">
		<h1><center>Diketahui data suatu</center></h1>
		<h1><center>nilai siswa dengan</center></h1>
		<h1><center>daftar berikut :</center></h1>
		<center><table class="table">
  			<thead class="thead-dark">
		    <tr>
		      <th scope="col">No</th>
		      <th scope="col">Nama</th>
		      <th scope="col">Matematika</th>
		      <th scope="col">BHS.Inggris</th>
		      <th scope="col">BHS.Indonesia</th>
		      <th scope="col">Jumlah</th>
		      <th scope="col">Rerata</th>
		      <th scope="col">Predikat</th>
		    </tr>
		  </thead>
		  <tbody class="tbody-light">
		    <tr class="table-primary">
		      <th scope="row">1</th>
		      <td>ANI</td>
		      <td>78</td>
		      <td>87</td>
		      <td>80</td>
		      <td>
		      	<?php
		      	echo $Jumlah=$ANI1+$ANI2+$ANI3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo number_format($Rerataani=($ANI1+$ANI2+$ANI3)/3,2);
		      	?>
		      </td>
		      <td>
		      	<?php
		      	if ($Rerataani >= 75) 
		      	{
		      		echo "A";
		      	}
		      	else if ($Rerataani > 80)
		      	{
		      		echo "B";
		      	}
		      	else
		      	{
		      		echo "C";
		      	}
		      	?>
		      </td>
		    </tr>
		    <tr class="table-primary">
		      <th scope="row">2</th>
		      <td>BUDI</td>
		      <td>80</td>
		      <td>65</td>
		      <td>75</td>
		      <td>
		      	<?php
		      	echo $Jumlah=$BUDI1+$BUDI2+$BUDI3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo number_format($Reratabudi=($BUDI1+$BUDI2+$BUDI3)/3,2);
		      	?>
		      </td>
		      <td>
		      	<?php
		      	if ($Reratabudi >= 75) 
		      	{
		      		echo "B";
		      	}
		      	else if ($Reratabudi > 80)
		      	{
		      		echo "A";
		      	}
		      	else
		      	{
		      		echo "C";
		      	}
		      	?>
		      </td>
		    </tr>
		    <tr class="table-primary">
		      <th scope="row">3</th>
		      <td>FARIZ</td>
		      <td>45</td>
		      <td>60</td>
		      <td>60</td>
		      <td>
		      	<?php
		      	echo $Jumlah=$FARIZ1+$FARIZ2+$FARIZ3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Reratafariz=($FARIZ1+$FARIZ2+$FARIZ3)/3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	if ($Reratafariz >= 75) 
		      	{
		      		echo "B";
		      	}
		      	else if ($Reratafariz > 80)
		      	{
		      		echo "A";
		      	}
		      	else
		      	{
		      		echo "C";
		      	}
		      	?>
		      </td>
		    </tr>
		    <tr class="table-primary">
		      <th scope="row">4</th>
		      <td>SIGIT</td>
		      <td>50</td>
		      <td>60</td>
		      <td>76</td>
		      <td>
		      	<?php
		      	echo $Jumlah=$SIGIT1+$SIGIT2+$SIGIT3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Reratasigit=($SIGIT1+$SIGIT2+$SIGIT3)/3;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	if ($Reratasigit >= 75) 
		      	{
		      		echo "B";
		      	}
		      	else if ($Reratasigit > 80)
		      	{
		      		echo "A";
		      	}
		      	else
		      	{
		      		echo "C";
		      	}
		      	?>
		      </td>
		    </tr>
		    <tr class="table-success">
		      <th></th>
		      <td>Jumlah</td>
		      <td>
		      	<?php
		      	echo $Jumlah=$BUDI1+$ANI1+$FARIZ1+$SIGIT1;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Jumlah=$BUDI2+$ANI2+$FARIZ2+$SIGIT2;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Jumlah=$BUDI3+$ANI3+$FARIZ3+$SIGIT3;
		      	?>
		      </td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		    <tr class="table-danger">
		      <th></th>
		      <td>Rerata</td>
		      <td>
		      	<?php
		      	echo $Rerata=($ANI1+$BUDI1+$FARIZ1+$SIGIT1)/4;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Rerata=($ANI2+$BUDI2+$FARIZ2+$SIGIT2)/4;
		      	?>
		      </td>
		      <td>
		      	<?php
		      	echo $Rerata=($ANI3+$BUDI3+$FARIZ3+$SIGIT3)/4;
		      	?>
		      </td>
		      <td></td>
		      <td></td>
		      <td></td>
		    </tr>
		  </tbody>
		</table></center>
		
	</font>
	<!--untuk javascript-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--untuk javascript-->
</body>
</html>