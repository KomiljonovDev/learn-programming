<x-layout>
	<div class="container"  style="min-height: 100vh;">
		<div class="row py-3">
			<div class="col min-height">
				<a href="/" class="links">
					<i class="fas fa-home"></i>
				</a> 
				<i class="fa-solid fa-arrow-right text-gray"></i> 
				<a href="/category/{{ $category->category_slug }}" class="links">
					<h6 class="d-inline">{{ $category->name }}</h6>
				</a> 
				<i class="fa-solid fa-arrow-right text-gray"></i> 
				<a href="/lesson/{{ $lesson->lesson_slug }}">
					<h6 class="d-inline">{{ $lesson->title }}</h6>
				</a> 
			</div>
			<div class="col">
				<div class="float-right color-46">
					<i class="fa-solid fa-calendar-days"></i> {{ $lesson->created_at->diffForHumans() }}
				</div>
			</div>
		</div>
		<div class="row py-2">
			<div class="col">
				<p>{!! $lesson->body !!}</p>
			</div>
		</div>
	</div>
</x-layout>