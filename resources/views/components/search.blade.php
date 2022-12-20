<x-layout>
	<div class="container">
		<div class="row py-3">
			<div class="col">
				<div class="">
					<h3>Qidiruv bo'yicha natijalar</h3>
				</div>
			</div>
		</div>
		<div class="row py-2">
			<div class="col">
				<form>
					<div class="mb-3">
						<input type="search" class="form-control d-inline w-50 my-2 mode" id="name" placeholder="Foydalanuvchi nomi" required name="query" value="{{ request('query') ? request('query') : '' }}">
						<button class="btn btn-success my-2" type="submit">Qidirish</button>
						<x-form.error name="name"/>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<ol class="mx-2">
					<li class="mx-2">
						<div class="mx-3">
							<h5>
								<a href="" class="links">PHP ga kirish</a>
							</h5>
							<div class="w-75">
								<p>PHP dasturlash tili bilan tanishish. php o'zi nima va qaysi yo'nalishlarda ishlatiladi,kabi savollarga javob topishingiz mumkin.</p>
								<a href="" class="font-size-13 links">sdcsd</a>
								<span class="text-gray"> / </span>
								<a href="" class="font-size-13 links">sdcsd</a>
							</div>
						</div>
					</li>
					@foreach($lessons as $lesson)
					<li class="mx-2">
						<div class="mx-3">
							<h5>
								<a href="" class="links">PHP ga kirish</a>
							</h5>
							<div class="w-75">
								<p>{{ $lesson }}</p>
								<a href="" class="font-size-13 links">sdcsd</a>
								<span class="text-gray"> / </span>
								<a href="" class="font-size-13 links">sdcsd</a>
							</div>
						</div>
					</li>
					@endforeach
				</ol>
			</div>
		</div>
	</div>
</x-layout>