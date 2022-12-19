<x-layout>
	<div class="container">
		<div class="row py-3">
			<div class="col">
				<a href="/" class="links">
					<i class="fas fa-home"></i>
				</a> 
				<i class="fa-solid fa-arrow-right text-gray"></i> 
				<a href="/category/{{ $category->category_slug }}" class="links">
					<h6 class="d-inline">{{ $category->name }}</h6>
				</a> 
			</div>
		</div>
		<div class="row py-2">
			<div class="col">
				<div class="mx-2 py-2">
					<h5 class="py-2">{!! $category->description !!}</h5>
					<div class="border-gray">
						<ol class="mx-2 py-2">
							@foreach($lessons as $once_lesson)
								<p class="border-bottom-gray d-block w-100">{{ $loop->index+=1 }}. <a href="/lesson/{{ $once_lesson->lesson_slug }}" class="links">{{ $once_lesson->title }}</a></p>
							@endforeach
						</ol>
					</div>
				</div>
			</div>
		</div>		
	</div>
</x-layout>