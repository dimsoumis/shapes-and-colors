<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<title>Mani-Hab - Hand Rehabilitation Platform</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" href="/styles/main.css">
	<link rel="stylesheet" href="/styles/responsive.css">
	
		<script src="/scripts/main.js" type="text/javascript"></script> 
		<script src="/scripts/sweetalert2.all.min.js" type="text/javascript"></script> 
</head>
	<body>
		
		<header>
	<div id="logo"><img src="/images/logo-hor.png" /></div>


</header>

<main>
	
	<h1 id="pageTitle">Shapes & Colors</h1>
	
<p style="text-align: center;">Choose the level you want to exercise at, see instructions about how to perform the exercise or see previous scores.</p>
	
	<div class="row" style="justify-content: space-around;">
		<div class="column2">
			<img id="level1img" style="width: 200px;" src="/images/shapes-and-colors.png" />
			<h3 id="level1txt" style="text-align: center;">Level 1<br>(match 3 shapes)</h3>
	</div>
		<div class="column2">
			<img id="level2img" style="width: 200px;" src="/images/shapes-and-colors.png" />
				<h3 id="level2txt" style="text-align: center;">Level 2<br>(match 3 colors)</h3>
	</div>

	
		

	</div>
	
	
		<div class="row" style="justify-content: space-around;">
			
				<div class="column3">
			<img id="level3img" style="width: 200px;" src="/images/shapes-and-colors.png" />
				<h3 id="level3txt" style="text-align: center;">Level 3<br>(match 5 shapes)</h3>
	</div>
			
	<div class="column3">
			<img id="level4img" style="width: 200px;" src="/images/shapes-and-colors.png" />
				<h3 id="level4txt" style="text-align: center;">Level 4<br>(match 5 colors)</h3>
	</div>


		<div class="column3">
			<img id="level5img" style="width: 200px;" src="/images/shapes-and-colors.png" />
				<h3 id="level5txt" style="text-align: center;">Level 5<br>(match 10 shapes/colors)</h3>
	</div>
	</div>
	




	
</main>

<script>
	
	document.getElementById("level1img").addEventListener("click", chooseHand1);
		document.getElementById("level1txt").addEventListener("click", chooseHand1); 
	
	function chooseHand1() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level1-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level1-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
	
		document.getElementById("level2img").addEventListener("click", chooseHand2);
		document.getElementById("level2txt").addEventListener("click", chooseHand2); 
	
	function chooseHand2() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level2-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level2-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
			document.getElementById("level3img").addEventListener("click", chooseHand3);
		document.getElementById("level3txt").addEventListener("click", chooseHand3); 
	
	function chooseHand3() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level3-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level3-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
				document.getElementById("level4img").addEventListener("click", chooseHand4);
		document.getElementById("level4txt").addEventListener("click", chooseHand4); 
	
	function chooseHand4() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level4-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level4-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
	
	
	
	
					document.getElementById("level5img").addEventListener("click", chooseHand5);
		document.getElementById("level5txt").addEventListener("click", chooseHand5); 
	
	function chooseHand5() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level5-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level5-right/index.php";
  } 
});	
	}
</script>

<footer>
	<p>© Mani-Hab Space / All Rights Reserved.</p>
</footer>	

</body>
</html>
