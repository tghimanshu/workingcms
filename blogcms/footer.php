<?php
/**
 * Footer Template
 *
 * This file contains the closing body and html tags, along with script includes
 * for jQuery, Bootstrap, and Summernote. It also initializes the Summernote editor.
 * It is included at the bottom of front-end pages.
 *
 * @package FrontEnd
 */
?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
	<!-- include summernote js -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		  $('#summernote').summernote({'height':'250'});
		});
	</script>
</body>
</html>