<!-- <div class="row">
	<div class="col s12">
		<p style="background-color: red">asdsadasdsa</p>
	</div>
</div> -->
<!-- Jquery -->
	<!-- <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/css/materialize/js/materialize.min.js"></script> -->
	<!-- End of Jquery -->
<script type="text/javascript">
	$(document).ready(function(){
  		$('.collapsible').collapsible();
  		$('select').material_select();
  		$('select[required]').css({
	      	display: 'inline',
		    position: 'absolute',
		    float: 'left',
		    padding: 0,
		    margin: 0,
	        border: '1px solid rgba(255,255,255,0)',
	        height: 0, 
	        width: 0,
	        top: '2em',
	        left: '1em',
	    });
	});
</script>

</body>
</html>