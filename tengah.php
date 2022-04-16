<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<canvas id="myCanvas" width="200" height="100" ></canvas>
	<script>
         var c = document.getElementById("myCanvas");
         var ctx = c.getContext("2d");
         ctx.font = "30px Arial";
         ctx.fillText("Hello Wega", 10, 50);
</script>
</body>
</html>