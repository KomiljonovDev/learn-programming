<x-layout>
	<div class="container" style="min-height: 100vh;">
		<div class="row py-4">
			<div class="col-md-2">
				<h6>Havolalar:</h6>
				<ul>
					<li><a href="admin/create" class="{{ request()->is('admin/create') ? 'text-primary' : 'mode' }}">Yangi dars yozish.</a></li>
					<li><a href="admin" class="{{ request()->is('admin') ? 'text-primary' : 'mode' }}">Darslar ro'yxati.</a></li>
				</ul>
			</div>
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