<x-layout>
	<div class="container">
		@auth
			<h1>Xush kelibsiz</h1>
		@else
			<h1>Qayta Xush kelibsiz.</h1>
		@endauth
	</div>
</x-layout>