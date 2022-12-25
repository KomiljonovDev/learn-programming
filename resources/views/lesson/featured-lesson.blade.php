<x-home>
	@foreach($lessons as $lesson)
		<div class="row py-2" style="min-height: 60vh;">
		<div class="col">
			<h5><a href="/category/{{ $lesson[0]->category_slug }}" class="mode lesson-category">{{ $lesson[0]->name }}</a></h5>
			<div class="mx-2 py-2">
				<ol class="mx-2" style="width: 80%;">
					@php
						$i = $loop->index+=1;
					@endphp
					@foreach($lesson as $once_lesson)
						<li class="li-style-none mx-2 float-left">
							{{ $i }}.{{ $loop->index+=1 }} <a href="lesson/{{ $once_lesson->lesson_slug }}" class="links">{{ $once_lesson->title }}</a>
						</li>
					@endforeach
				</ol>
			</div>
		</div>
	</div>		
	@endforeach
</x-home>