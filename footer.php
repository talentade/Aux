	</div>
	<div id="temp-section-footer" class="temp-section">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 content-footer">
						<h4>Contact us</h4>
						<div class="rte footer-article"><p><b>Email :</b> &nbsp; &nbsp;info@auxanoroyale.com</p>
				          <p><b>Telephone :</b> +234 7014486000</p>
				          <p>Or better yet, come see us in person!</p>
				          <p><b>Visit Us :</b></p>
				          <p>We are located off Peter Odili Road,</p>
				          <p>TransAmadi Industrial Layout, Port Harcourt City, Rivers State, Nigeria.</p>
				          <p></p>
				          <p></p>
				          <p></p>
				        </div>
					</div>
				    <div class="col-md-4 col-sm-4 links-footer">
						<h4>Quick Links</h4>
						<ul>
						  	<li><a href="#">HOME</a></li>
						  	<li><a href="#">HAIR ACADEMY</a></li>
						  	<li><a href="#">HAIR</a></li>
						  	<li><a href="#">WIGS</a></li>
						  	<li><a href="#">SHOP</a></li>
						  	<li><a href="#">OFFERS</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="#">Order Status</a></li>
						</ul>
					</div>
					<div class="col-md-4 col-sm-4 mailing-list-footer">
						<h4>AUXANO ROYALE HAIR ACADEMY</h4>
		          		<div class="rte">
			          		<p>
			          			At Auxano Royale Hair Academy, we build your skill set for wealth.
			          			Our Alumuni often testify to the quality of unique coaching methods deployed in each practical and interactive session: Each one was able to make a variety of wig styles.
			          		</p>
		          		</div>
		    		</div>
	    		</div>
				<div class="bottom-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
							</div>
							<div class="col-md-6">
								<div id="footer-payment-methods">
									<img src="//cdn.shopify.com/s/assets/global/payment_types/creditcards_paypal-dd71910a20fd73f78b4eed60e89331d4f4ceb38d55ef42e1e9935d78070ba3e2.svg" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="design-brand">
                <p>All Rights Reserved | Auxano Royale Hair | Designed By:<a href="https://clemzcorp.com.ng" target="_blank"> ClemzCorp - Media Redefined!</a></p>
            </div>
		</footer>
	</div>

</div>
</div>

</div>
<script type="text/javascript" charset="utf-8">
//<![CDATA[
jQuery(function() {
  jQuery('nav a').each(function() {
    if (jQuery(this).attr('href')  ===  window.location.pathname) {
      jQuery(this).addClass('current');
    }
  });
});  
//]]>
</script>


<script type="text/javascript">
	window.addEventListener('load', function() {
		var show_popup = false;
		var pop_up_time = $('#pop-up-time').val();
		var popup_enabled = pop_up_time !== undefined;
		var has_popup_cookie = $.cookie('popup-cookie') === 'true';

		if (!popup_enabled) {
			// popup is disabled
			return;
		} else if (pop_up_time === '0') {
			// popup is shown every time
			show_popup = true;
		} else if (!has_popup_cookie) {
			// popup cookie is not set, show popup this time
			show_popup = true;
			$.cookie('popup-cookie', 'true', {expires: parseInt(pop_up_time)});
		}
		if (show_popup) {
			document.querySelector('#popup').classList.add('visible');
		}

		$('.popup--close-btn').on('click', function () {
			document.querySelector('#popup').classList.remove('visible');
		});
	});
</script>
</body>
</html>