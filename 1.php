<?PHP
	if(isset($_SESSION['arx']) or isset($_SESSION['ary']) or isset($_SESSION['arr'])){
		$arx=$_SESSION['arx'];
		$ary=$_SESSION['ary'];
		$arr=$_SESSION['arr'];
		$art=$_SESSION['art'];
	}
	$x=$_POST['x'];
	$y=$_POST['y'];
	$r=$_POST['r'];

	?>
	<table>
		<tr>
		<th>X</th>
		<th>Y</th>
		<th>R</th>
		</tr>
		<tr>
		<th>
		<?PHP echo $x, '</th>';
			  echo '<th>', $y, '</th>';
			  echo '<th>', $r, '</th>';
		?>
		</tr>
	</table>
	<?PHP
	$start = microtime(true);

	function checkpos($x, $y, $r)
	{
	if($x==0){
		if ($y>=-$r and $y*2<=$r)
			return true;
	}
	else{


	if ($x<0 and $x*-2<=$r)
	{
		if ($y>=$r*(-1) and 2*$y<=$x*2+$r)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	elseif ($x>0 and $x*2<=$r)
	{
		if ($y*$y*2+$x*$x<=$r and $y>=0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
	}
	}
	$regexp='/^\-?[0-9]+[.,]?[0-9]*$/';
	if (isset($x) and isset($y) and isset($r)){
		if (preg_match($regexp,$x) and preg_match($regexp,$y) and preg_match($regexp,$r)){


			$arx[]=$x;
			$ary[]=$y;
			$arr[]=$r;

		echo $arx[0]," ";
		echo $ary[0]," ";
		echo $arr[0]," ";
		echo count($arx);

		if (checkpos($x, $y, $r))
			{$art[]="true";
		?>

			<h1>
			Точка попадает на график
			</h1>

		<?PHP
			$time =microtime(true)-$start;
			echo 'Время выполнения скрипта:<br>', $time,' (c)';
			}
			else
			{
				$art[]="false";
				$time =microtime(true)-$start;
		?>
			<h1>
			Точка не попадает на график
			</h1>
		<?PHP
			echo 'Время выполнения скрипта:<br>', $time,' (c)';
			}
		}
		else{
			echo"Некорректные значения переменных";
		}

	}
		else{
			echo"введите значение";
		}
		$_SESSION['arx']=$arx;
		$_SESSION['ary']=$ary;
		$_SESSION['arr']=$arr;
		$_SESSION['art']=$art;

?>
