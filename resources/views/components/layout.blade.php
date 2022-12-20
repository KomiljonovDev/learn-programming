<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP - komiljonovdev.uz</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script type="text/javascript" src="../js/prism.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/prism.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.mode{
			/*background-color: #232529;
			color: white;*/
		}
		.modeDark{
			background-color: #232529;
			color: white;
		}
		.modeLight{
			background-color: white;
			color: black;
		}
		.navbar-home{
			font-size: 27px;
			text-transform: uppercase;
			border-bottom: 3px solid #35383f;
		}
		a{
			text-decoration: none;
		}
		.lesson-category{
			color: inherit;
		}
		.lesson-category:hover{
			color: #e3796a;
		}
		.brand{
			text-decoration: none;
		}
		.brand:hover{
			text-decoration: none;
		}
		.links{
			margin-left: 3px;
		}
		.links:hover{
			text-decoration: underline;
			color: #e3796a;
		}
		.li-style-none{
			list-style: none;
		}
		.bg-gray-11{
			background-color: rgba(247, 244, 243, 0.9);
		}
		.bg-gray-11:hover{
			transition: all 0.2s;
			background-color: rgba(247, 244, 243, 1);
			text-decoration: none;
		}
		.contact-link-color{
			color: #e3796a;
			text-decoration: none;
		}
		.color-46{
			color: #e3796a;;
		}
		.text-gray{
			color: #868d9a;
		}
		.border-mode{
			border: 1px solid #35383f;
		}
		input{
			outline: none;
		}
		.bg-green{
			background-color: #448460;
			opacity: 0.9;
			font-weight: 900;
		}
		.bg-green:hover{
			opacity: 1;
		}
		.footer{
			font-size: 13px;
			border-top: 3px solid #35383f;
		}
		.border-gray{
			border: 1px solid rgba(247, 244, 243, 0.9);
			border-radius: 5px;
		}
		.border-bottom-gray{
			border-bottom: 1px solid gray;
			border-radius: 3px;
		}
		.font-size-13{
			font-size: 13px;
		}
	</style>
</head>
<body>
	<div class="mode">
		<div>
			<nav class="navbar-home">
				<ul class="d-flex py-2">
					<li class="col text-left li-style-none">
						<a href="/" class="brand mode">php - komiljonovdev.uz</a>
					</li>
					<!-- <li class="li-style-none mx-5">
						<a href="#" class="mode">
							<i class="fas fa-user"></i>
						</a>
					</li> -->
					<li class="li-style-none mx-5">
						<a href="#" class="mode" id="mode">
							<i class="fa-regular fa-moon"></i>
						</a>
					</li>
					<!-- <li class="li-style-none mx-5">
						<a href="#" class="mode">
							<i class="fas fa-search"></i>
						</a>
					</li> -->
				</ul>
			</nav>
		</div>
		{{ $slot }}
		<div>
			<footer class="footer">
				<div class="px-5 py-2">
					<ul class="d-flex">
						<li class="li-style-none px-2 mode">&copy; 2022 &nbsp; Komiljonov Obidjon <span class="text-gray"> | </span></li>
						<li class="li-style-none px-2"><a href="">Ushbu loyiha haqida</a> <span class="text-gray"> | </span></li>
						<li class="li-style-none px-2"><a href="">Aloqa</a> <span class="text-gray"> | </span></li>
						<li class="li-style-none px-2"><a href="">Maxviylik va Xavfsizlik</a></li>
					</ul>
				</div>
			</footer>
		</div>
	</div>
	<script type="text/javascript">
		let getMode = localStorage.getItem('mode'),
			modeIcon = document.querySelector('.fa-moon') ?? document.querySelector('.fa-sun'),
			changeMode = document.getElementById('mode'),
			mode = document.querySelectorAll('.mode');
		if (getMode == 'dark') {
			modeIcon.classList.remove('fa-moon');
			modeIcon.classList.add('fa-sun');
			mode.forEach(function (item) {
				item.classList.add('modeDark')
			});
		}
		changeMode.addEventListener('click',function () {
			getMode = localStorage.getItem('mode');
			modeIcon = document.querySelector('.fa-moon') ?? document.querySelector('.fa-sun');
			if (getMode == 'dark') {
				mode.forEach(function (item) {
					item.classList.remove('modeDark')
				});
				modeIcon.classList.remove('fa-sun');
				modeIcon.classList.add('fa-moon');
				localStorage.setItem('mode', 'light');
			}else{
				mode.forEach(function (item) {
					item.classList.add('modeDark')
				});
				modeIcon.classList.remove('fa-moon');
				modeIcon.classList.add('fa-sun');
				localStorage.setItem('mode', 'dark');
			}
		});
	</script>
</body>
</html>