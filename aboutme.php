<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>曾子宇簡介</title>
	<style type="text/css">
        * { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
        h1 {color:blue; font-size:45px;}
        h2 {color:#FA7B1E; font-size:35px;}
        h3 {color:white; font-size:30px;}
    </style>
    <script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "LSP";
		}
	</script>
</head>
<body>
	<table width="70%">
        <tr>
            <td>
				<img src="cliff.jpg" width="118%" id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>
	
			<td>
				<h1>曾子宇</h1>
				<h2 id="h2text">資管三B</h2>
				<h3>人生以搞事為目的</h3>
			</td>
		</tr>
    </table>

	<table width="70%" border="1">
        <tr>
            <td>
				個人網頁：還沒有😢<br>
				FB：不告訴你😎<br>
				my github：<a href="https://github.com/et0305" target="_blank">https://github.com/et0305</a><br>
				Tel: <a href="tel:0426328001,18110">04-26328001#18110</a><br>
				E-Mail：<a href="mailto:s1105401@gm.pu.edu.tw">e-mail</a><br>
			</td>

			<td>
				<img src="https://c.tenor.com/x8v1oNUOmg4AAAAC/rickroll-roll.gif" width="90%"></img>
			</td>
			
			<td>
				按下去就知道啦！<br>
			    <audio controls>
			        <source src="Rick Astley - Never Gonna Give You Up.wav" type="audio/wav">
			    </audio><br>
			</td>

			<td>
			    統神端火鍋<br>
			    <iframe src="https://www.youtube.com/embed/saNzVNhMSn0" allowfullscreen></iframe>
		    </td>
		</tr>
    </table>
    <?php echo date("Y-m-d") ?>
</body>
</html>