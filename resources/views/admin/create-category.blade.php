<x-layout>
	<div class="container" style="min-height: 100vh;">
		<div class="row py-4">
			<x-menu />
			<div class="col">
				<form action="create-category" method="POST">
					@csrf

					<div class="mb-3">
						<label for="name" class="form-label">Kategoriya nomi</label>
						<input type="name" class="form-control mode" id="name" placeholder="Foydalanuvchi nomi" required name="name" value="{{ old('name') }}">
						<x-form.error name="name"/>
					</div>
					<div class="mb-3">
						<label for="slug" class="form-label">Kategoriya slug</label>
						<input type="slug" class="form-control mode" id="slug" placeholder="Foydalanuvchi nomi" required name="category_slug"  value="{{ old('category_slug') }}">
						<x-form.error name="category_slug"/>
					</div>
					<div class="mb-3">
						<label for="description" class="form-label">Kategoriya ta'rifi</label>
						<textarea type="text" class="form-control mode" id="description" placeholder="Kategoriya ta'rifi" name="description"></textarea>
						<x-form.error name="description"/>
						<button class="btn btn-success my-2" type="submit">Kategoriyani yuklash</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<x-auto-slug-editor />
</x-layout>