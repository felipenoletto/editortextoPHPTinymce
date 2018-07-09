<!DOCTYPE html>
<html>
<head>
  	<script src="tinymce/js/tinymce/tinymce.min.js"></script>
  	<script>
		tinymce.init({
		  	selector: 'textarea',
		  	width: 700,
		  	height: 250,
		  	menubar: false,
		  	plugins: [
		    	'advlist autolink lists link image charmap print preview anchor textcolor',
		    	'searchreplace visualblocks code fullscreen',
		    	'insertdatetime media table contextmenu paste code help wordcount'
		  	],
		  	toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat',
		});
  	</script>
</head>

<body>
  <textarea></textarea>
</body>
</html>