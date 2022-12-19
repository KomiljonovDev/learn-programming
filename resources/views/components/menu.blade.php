<div class="col-md-2">
	<h6>Havolalar:</h6>
	<ul>
		<li><a href="/admin/create-lesson" class="{{ request()->is('admin/create-lesson') ? 'text-primary' : 'mode' }}">Yangi dars yozish.</a></li>
		<li><a href="/admin/create-category" class="{{ request()->is('admin/create-category') ? 'text-primary' : 'mode' }}">Yangi kategoriya yozish.</a></li>
		<li><a href="/admin" class="{{ request()->is('admin') ? 'text-primary' : 'mode' }}">Darslar ro'yxati.</a></li>
	</ul>
</div>