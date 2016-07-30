    <?php include( 'inc/header.php'); ?>
    <div class="container">
        <section id="ty-slider" class="hidden-xs">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/slide02.jpg" alt="">
                </div>
            </div>
        </section>
        <div class="row">
            <div id="thank-you" class="privacy-terms col-md-8 col-md-offset-2">
            	<p>
            		<h3>Sorry! Your Request Couldn't Be Processed</h3><br />
					The problem was: <error><?php echo $_GET['error']; ?></error>
				</p>
				<p>
					<button onclick="goBack()">Please go back and check your information</button><br />
					or Call Us Toll-Free at <a id="error-phone" class="phone-link" href=""></a>
				</p>
        	</div>
        </div>
    </div>
    <?php include('inc/footer.php'); ?>
    
    <script>
        function goBack() {
            window.history.go(-1);
        }
    </script>
    
  </body>

</html>