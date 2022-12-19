<script type="text/javascript">
	let slug = document.getElementById('slug');
	slug.addEventListener('keyup',function () {
		slug.value = slug.value.replace(' ', '-');
	});
</script>