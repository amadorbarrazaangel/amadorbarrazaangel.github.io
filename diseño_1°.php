<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Magical Navigation</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
 <div class="navigation">
 	<ul>
 		<li class="list active">
 			<a href="#">
 				<span class="icon"><ion-icon name="home-outline"></ion-icon></span>
 				<span class="text ">home</span>
 			</a>
 		</li>
 		<li class="list">
 			<a href="#">
 				<span class="icon"><ion-icon name="person-outline"></ion-icon></span>
 				<span class="text">Profile</span>
 			</a>
 		</li>
 		<li class="list">
 			<a href="#">
 				<span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
 				<span class="text">Messages</span>
 			</a>
 		</li>
 		<li class="list">
 			<a href="#">
 				<span class="icon"><ion-icon name="image-outline"></ion-icon></span>
 				<span class="text">Photos</span>
 			</a>
 		</li>
 		<li class="list">
 			<a href="#">
 				<span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
 				<span class="text">Setting</span>
 			</a>
 		</li>
 		<div class="indicator"></div>
 	</ul>
 </div>
 <script type="text/javascript">
 	const list = document.querySelectorAll('.list');
 	function activelink(){
     list.forEach((item)=> 
     	item.classList.remove('active'));
     this.classList.add('active');
 	}
    list.forEach((item)=> 
    	item.addEventListener('click', activelink));
 </script>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
