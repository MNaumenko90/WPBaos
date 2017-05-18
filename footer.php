<footer class="row">
		<div class="column medium-12 small-12 text-center">
				<address class="">
						<span class="phone">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						+49 (0)1781866696</span>
						<span class="addres">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Lieberweg 4  / München 80937</span>
						<span class="email">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						info@baosholz.de</span>
				</address>
		</div>
	</footer>

<div class="reveal-overlay">
<div class="reveal">
	  <h3>Individuelles Angebot</h3>
	  <p>"Für Ihr individuelles Angebot kontaktieren Sie uns bitte unter …Tel….  oder per E-Mail an: info@baosholz.de</p>
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
</div>
</div>
</body>
<?php wp_footer(); ?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
	$(document).scroll(function(){
		if ($(window).width() > 640) {
			if ($(document).scrollTop() > 0) {
				$('body').addClass('small-header');
			} else {
				$('body').removeClass('small-header');
			}
		}
	});
	$(document).ready(function(){
		$('.openModal').on('click', function(event) {
			event.preventDefault();
			$('.reveal-overlay, .reveal').show();
		});
		$('.close-button').on('click', function(event) {
			event.preventDefault();
			$('.reveal-overlay, .reveal').hide();
		});
	});
</script>
</html>