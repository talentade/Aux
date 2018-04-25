<?php require "header.php";
// http://flairhairacademy.com/
// https://anneeliserealhair.com
// http://localhost/Fireworks/2018/Web/$$/FashionShop/
?>

<div class="tsection homepage-section--rich-text-wrapper wow fadeIn homepage-collections-blocks">
    <div class="row heading">
      <div class="col-md-8 col-md-offset-2 text-center">
          <h3>Get in touch with us</h3>
        <hr>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div id="contact-form">
          <form name="form1" method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                <input class="form-control input-lg" name="name" id="name" placeholder="Enter name (required)" required="required" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control input-lg" name="email" id="email" placeholder="Enter email (required)" required="required" type="email">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control input-lg" name="phone" id="phone" placeholder="Phone" required="" type="text">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required" placeholder="Message (required)"></textarea>
                </div>            
                <button type="submit" class="btn btn-large btn-custom" name="btnContactUs" id="btnContact" style="background: gold; border: 1px solid #DDD;">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <br />
    <div class="row heading">
      <div class="col-md-8 col-md-offset-2 text-center">
          <h3>Meet Our Happy Custommers</h3>
        <hr>
      </div>
    </div>
    <div class="row review-row">

	    <div class="col-md-10 col-md-offset-1 text-center">
	    <?php
	    	$reviews = array(
	    		"Ghana Student", "Lagos Student", "Mrs Renata, PH", "Maureen, PH", "Irene Botswana", "Mrs Chinelo, PH",
	    		"Mrs Joyce Markurdi", "Ruth, PH", "Ese's mum, PH", "Sis Michigan"
	    	);
	    	foreach ($reviews as $rk => $rv) {
          $rd = rand(1, 5);
          $rt = str_repeat('<i class="fa fa-star"></i>', $rd).str_repeat('<i class="fa fa-star no-star"></i>', (5-$rd));
	    		print('<div class="form-check col-md-3">');
	    		print('<input type="checkbox" class="form-check-input" id="review_'.$rk.'" checked>');
	    		print('<label class="form-check-label" for="review_'.$rk.'">'.$rt.'<br />'.$rv.'</label>');
	    		print('</div>');
	    	}
	    ?>
	    </div>

    </div>

    <div class="col-md-8 col-md-offset-2 text-center"><hr></div>
</div>

<?php require "footer.php"; ?>