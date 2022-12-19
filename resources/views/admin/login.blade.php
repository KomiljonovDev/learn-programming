<x-layout>
	<div class="container" style="min-height: 100vh;">
		<h1>Login</h1>
		<form action="login" method="POST">
			@csrf

			<div class="mb-3">
				<label for="username" class="form-label">Foydalanuvchi nomi</label>
				<input type="username" class="form-control mode" id="username" placeholder="Foydalanuvchi nomi" required name="username">
				@error('username')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
			</div>
			<div class="mb-3">
				<label for="username" class="form-label">Parol</label>
				<input type="password" class="form-control mode" id="username" placeholder="Parol" required name="password">
				@error('password')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
				@error('failed')
				    <p class="text-danger">{{ $message }}</p>
				@enderror
				<button class="btn my-2" style="background-color: #007bff;" type="submit">Tizimga kirish</button>
			</div>
		</form>
	</div>
</x-layout>