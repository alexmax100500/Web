<?PHP
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> LAB 1</title>

		<style>
		@media screen and (min-width: 700px) {
			body {
				font-size: 28px;
			}
		}

		@media screen and (min-width: 600px) and (max-width: 699px) {
			body {
				font-size: 25px;
			}
		}

		@media screen and (min-width: 500px) and (max-width: 599px) {
			body {
				font-size: 21px;
			}
		}



			header{
				background-image: url("bg.svg");
				text-align:center;
				margin:1em;
				font-size:100%;
				font-family:monospace;
				color:#d4d0F8;
			}
			header h1{
				font-size:150%;

				color:#d8e3e8;
			}
			.addinfo{
				font-size:70%;
			}
			img{
				margin:2%;
				display:inline-block;
				float:right;
				background-color:white;

			}
			div{
				color:#d4d0F8;
				margin:20px;
				background-color:#0022ff;
			}
			div[align=left]{
				background-color:#1752c2;
				margin:1em;
				min-height:74vh;
			}
			form{
				margin:
				padding-left:50px;
			}

			form>div{
				padding-left:10%;
				margin:10px;
				margin-left:0;
				width:12em;
			}
			.checkX{

				margin-top:0;
				height:140px;
				font-size:1em;
			}
			.checkY{
				height:100px;
			}
			.chekR{
				height:100px;
			}
			.button{
				height:50px;
				}
			.response{
				width:20em;
				height:40%;
				vertical-align:top;
				padding:2%;
				margin-right:0;

			}
			.stacked{
				margin:2%;
				display:inline-block;
			}
			table{
				border:5px solid #fff;
			}
			table *{
				margin:5px;
				border:1px solid #aaa;
			}
			.history{
				border:1px solid #AAA;
				margin:26px;
			}
			.historytable{
				margin: 5px;
				border: 1px solid #aaa;
				cellspacing: 3em;
				cellpadding: 3em;
				width:20wh;
				cols:3;
			}
			.historytable *{
				height:30px;
				width:400px;
			}
			@media screen and (min-width: 300px) and (max-width: 499px) {
			body {
				font-size: 14px;
				.response{
				top:700px;
				left:350px;
				margin:1em;
				float:left;
				width:300px;
				height:300px;
			}
			}
		}

		</style>
	</head>
	</body>
		<header>
			<h1>Проверка попадания точки на график</h1>
			Максимов Александр Владимирович
			<p class="addinfo">
				P3212
				<br>
				вариант 212015
			</p>
		</header>

		<div align="left" >

			<img
				src="area.png"
				height="420em"
				width="420em"

			>

			<div align="left">
			<form method="POST" class="stacked validatedform">
				<div class="checkX form field">
					X координата<br>
					<input type="radio" name="x" value="-0.5">-0.5
					<input type="radio" name="x" value="-1">-1
					<input type="radio" name="x" value="-1.5">-1.5
					<input type="radio" name="x" value="-2">-2<br>
					<input type="radio" name="x" value="0">0<br>
					<input type="radio" name="x" value="0.5">0.5
					<input type="radio" name="x" value="1">1
					<input type="radio" name="x" value="1.5">1.5
					<input type="radio" name="x" value="2">2
					<br>
				</div>
				<div class="checkY form field">
					Y координата <br>
					<input type="text" name="y" size="30">
				</div>

				<div class="checkR form field">
					R радиус <br>
					<select name="r">
					<option value="1">1</option>
					<option value="1.5">1.5</option>
					<option value="2">2</option>
					<option value="2.5">2.5</option>
					<option value="3">3</option>
					</select>
				</div>
				<div class="button validateBtn">
					<input type="submit" value="рассчитать">
				</div>
			</form>
			<div class="response stacked">
			<?PHP
				include "1.php";
			?>
			</div>
			</div>

		</div>
		<div class="history">
			<table class="historytable">
				<?PHP
				include "2.php";
				?>
			</table>
		</div>
		<div>

		</div>






	<script src="Script.js"></script>
	</body>
</html>
