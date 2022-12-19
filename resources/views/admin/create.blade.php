<x-layout>
	<script type="text/javascript" src="../js/prism.js"></script>
	<script type="text/javascript" src="../js/tinymce/tinymce.min.js"></script>
	<div class="container" style="min-height: 100vh;">
		<div class="row py-4">
			<x-menu />
			<div class="col">
				<form action="create" method="POST">
					@csrf

					<textarea name="body" id="content"></textarea>
					<button type="submit" class="btn btn-success my-2">Darsni yuklash</button>
				</form>
			</div>
		</div>
	</div>
	<script>
    	tinymce.init({ 
	        selector: '#content', 
	        image_class_list: [{ 
	            title: 'img-fluid', 
	            value: 'img-fluid' 
	        }, ], 
	        height: 500, 
	        setup: function(editor) { 
	            editor.on('init change', function() { 
	                editor.save(); 
	            }); 
	        }, 
	        codesample_languages: [ 
	            {text: 'HTML/XML', value: 'markup'}, 
	            {text: 'JavaScript', value: 'javascript'}, 
	            {text: 'CSS', value: 'css'}, 
	            {text: 'PHP', value: 'php'}, 
	            {text: 'Ruby', value: 'ruby'}, 
	            {text: 'Python', value: 'python'}, 
	            {text: 'Java', value: 'java'}, 
	            {text: 'C', value: 'c'}, 
	            {text: 'C#', value: 'csharp'}, 
	            {text: 'C++', value: 'cpp'}, 
	            {text: 'Bash', value: 'bash'} 
	          ], 
	        plugins: [ 
	            "codesample", 
	            "searchreplace visualblocks code codesample fullscreen", 
	            "insertdatetime media table contextmenu paste imagetools",
	            'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
          		'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
	        ], 
	        toolbar: "undo redo | styles | bold italic underline strikethrough | align | table link image media pageembed | bullist numlist outdent indent | spellcheckdialog a11ycheck code",
	        a11ychecker_level: 'aaa',
			style_formats: [

				{title: 'Heading 1', block: 'h1'},

				{title: 'Heading 2', block: 'h2'},

				{title: 'Paragraph', block: 'p'},

				{title: 'Blockquote', block: 'blockquote'},

				{title: 'Image formats'},

				{title: 'Medium', selector: 'img', classes: 'medium'},

			],
	        image_title: true, 
	        automatic_uploads: true, 
	        images_upload_url: '/upload', 
	        file_picker_types: 'image', 
	        file_picker_callback: function(cb, value, meta) { 
	            var input = document.createElement('input'); 
	            input.setAttribute('type', 'file'); 
	            input.setAttribute('accept', 'image/*'); 
	            input.onchange = function() { 
	                var file = this.files[0]; 
	  
	                var reader = new FileReader(); 
	                reader.readAsDataURL(file); 
	                reader.onload = function() { 
	                    var id = 'blobid' + (new Date()).getTime(); 
	                    var blobCache = tinymce.activeEditor.editorUpload.blobCache; 
	                    var base64 = reader.result.split(',')[1]; 
	                    var blobInfo = blobCache.create(id, file, base64); 
	                    blobCache.add(blobInfo); 
	                    cb(blobInfo.blobUri(), { 
	                        title: file.name 
	                    }); 
	                }; 
	            }; 
	            input.click(); 
	        } 
	     });
  	</script>
</x-layout>