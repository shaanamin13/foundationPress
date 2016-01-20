<div class="large-3 columns">
	<div class="row">
		<div class="social-media-side">
			<h4 class="subheader">Social Media</h4>
			<div class="side-content">
					<div class="twitter-follow">
						<a class="twitter-follow-button"
						href="https://twitter.com/ilmfinity"
						data-size="small">
						Follow @Ilmfinity</a>
					</div>


				<div class="fb-like" data-href="https://www.facebook.com/ilmfinity/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			</div>
			</div>

	</div>
	<?php  $field_values = simple_fields_value("contact_us_text, contact_button_text"); ?>
	<div class="row">
		<div class="contact-side">
			<h4 class="subheader">Contact Us</h4>
			<div class="side-content">
			<p>Have a question for us?</p>
			<a href="#" data-reveal-id="firstModal" class="radius small button">Send an Email!</a>

			<div id="firstModal" class="reveal-modal" data-reveal>
				<a class="close-reveal-modal" aria-label="Close">&#215;</a>
				<h2 id="form">Send a Message.</h2>
				<form>
					<fieldset>
						<legend>Message Details</legend>

						<div class="row">
							<div class="large-6 columns">
								<label>Your E-mail Address: </label>
								<input type="text" name="email">
							</div>
						</div>

						<div class="row">
							<div class="large-6 columns">
								<label>Full Name</label>
								<input type="text" name="name" >
							</div>
								</div>
						<div class ="row">
							<div class="large-6 columns">
								<label>Subject</label>
								<input type="text" name="subject">
							</div>
						</div>



						<div class="row">
							<div class="large-12 columns">
								<label>Message</label>
								<textarea name="message"></textarea>
							</div>
						</div>

						<div class="row">
							<div class="large-12 columns">

								<?php
								if(isset($_POST['submit'])){
								    $to = "shaan@ilmfinity.com"; // this is your Email address
								    $from = $_POST['email']; // this is the sender's Email address
								    $name = $_POST['name'];
								    $subject = $_POST['subject'];
								    $subject2 = "Copy of your form submission";
								    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
								    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

								    $headers = "From:" . $from;
								    $headers2 = "From:" . $to;
								    mail($to,$subject,$message,$headers);
								    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
								    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
								   	 
								    }
								?>

									<input type="submit" name="submit" value="Submit" class="small success button round">
							</div>
						</div>
					</fieldset>
				</form>
			</div>

		</div>
	</div>
	</div>
</div>
