<div id="maincontent">
<?php 
	
	get_header();

if (is_home()) { 
?>

<section class="firstrow">
	<div class="container">
	<div class="row">	
		<div class="col-md-8">
			<h1> Meest recente nieuws</h1>



			<!-- HERE COMES THE RECENT NEWS-->
		


			<?php 

				if ( have_posts() ) {
						while ( have_posts() ) {
							the_post(); 
						echo "<h1>";
							the_title();
						echo "</h1>";
						echo "<p>";
							the_excerpt();
						echo "</p>";	
						} // end while
					} // end if

			?>
		</div>

		<div class="col-md-4"> 
			<h1> Opkomende evenementen </h1>



		<!-- HERE COMES THE AGENDA-->
		<?php 
		
		// your_widget_display();
			
		?>

		

		</div>
	</div>
</div>
</section>
<section class="whatwedo">
<div class="container">	
	<div class="row">
		<h1> Wat doen wij? </h1>
			
			<div class="col-md-4"> 
				<h2> Cursus Bierbrouwen </h2>
				<p> Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
				 </p>
			</div>
			
			<div class="col-md-4"> 
				<h2> Evenementen</h2>
				<p> Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
				 </p>
			</div>
			
			<div class="col-md-4"> 
				<h2> Lid worden</h2>
				<p> Lorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum
					Lorem ipsum lorem ipsum lorem ipsumLorem ipsum lorem ipsum lorem ipsum Lorem ipsum lorem ipsum lorem ipsum
				 </p>
			</div>
			
	</div>
</div>
</section>



<?php 
}
	get_footer();
?>

</div>