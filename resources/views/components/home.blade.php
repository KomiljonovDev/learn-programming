<x-layout>
	<div class="container py-5">
		<div class="row py-2">
			<div class="col">
				<div class="py-2 text-capitalize">
					<h2>php dasturlash tilini o'zbek tilida o'rganing</h2>
					<p>php dasturlash tiliga oid bilimlar,kerakli ma'lumot va dokumentatsiyalar. Barchasi bepul!</p>
					<form class="py-2" action="/search">
						<input class="mode border-mode py-2 px-2" type="" name="query" placeholder="Ushbu saytdan qidiring" required>
						<input class="mode border-mode py-2 px-2 bg-green" type="submit" value="Qidirish">
					</form>
				</div>
			</div>
			<div class="col">
				<div class="py-2 text-capitalize">
					<h5 class="d-flex justify-content-center">ishlab chiquvchi bilan aloqa</h5>
					<div class="text-center">
						<a href="https://github.com/komiljonovdev" class="btn btn-success" target="_blank" ><i class="fa-brands fa-github "></i> Github</a>
						<a href="https://t.me/komiljonovdev" class="btn btn-success" target="_blank" ><i class="fa-brands fa-telegram"></i> Telegram</a>
						<a href="https://komiljonovdev.uz" class="btn btn-success" target="_blank"><i class="fas fa-globe"></i> komiljonovdev.uz</a>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<h2>PHP dasturlash tilini o'rganishni boshlang.</h2>
				<p>Ushbu saytimiz orqali siz php dasturlash tilini fundamental darajada o'rganasishingizga umid qilaman!</p>
			</div>
		</div>
		{{ $slot }}
	</div>
</x-layout>