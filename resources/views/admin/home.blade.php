<x-layout>
	<div class="container" style="min-height: 100vh;">
		<div class="row py-4">
			<x-menu />
			<div class="col py-2">
				<table class="table mode">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Sarlavha</th>
							<th scope="col">Ko'rilganlar</th>
							<th scope="col">Harakat</th>
						</tr>
					</thead>
					<tbody>
						@foreach($lessons as $lesson)
							<tr>
								<td scope="row">{{ $loop->index+=1 }}</td>
								<td scope="row">
									<a href="/lesson/{{ $lesson->lesson_slug }}">{{ $lesson->title }}</a>
								</td>
								<td scope="row">
									{{ $lesson->view_count }}
								</td>
								<td scope="row">
									<a class="btn btn-danger py-1" href="/admin/delete/{{ $lesson->id }}">O'chirish</a>
								</td>
							</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</x-layout>