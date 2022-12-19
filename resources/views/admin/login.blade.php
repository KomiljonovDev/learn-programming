<x-layout>
	<div class="container" style="min-height: 100vh;">
		<h1>Login</h1>
		<form action="login" method="POST">
			@csrf

			<div class="mb-3">
				<label for="username" class="form-label">Foydalanuvchi nomi</label>
				<input type="username" class="form-control mode" id="username" placeholder="Foydalanuvchi nomi" required name="username">
				<x-form.error name="username"/>
			</div>
			<div class="mb-3">
				<label for="password" class="form-label">Parol</label>
				<input type="password" class="form-control mode" id="password" placeholder="Parol" required name="password">
				<x-form.error name="password"/>
				<x-form.error name="failed"/>
				<button class="btn my-2" style="background-color: #007bff;" type="submit">Tizimga kirish</button>
			</div>
		</form>
	</div>
</x-layout>