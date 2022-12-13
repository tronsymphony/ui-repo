<?php

/*
 * Ajax all of the things!
 */

add_action('wp_ajax_nopriv_do_ajax', 'our_ajax_function');
add_action('wp_ajax_do_ajax', 'our_ajax_function');


function our_ajax_function(){
	
	$nonce = $_POST['security'];

	if ( ! wp_verify_nonce( $nonce, 'form_validation_name' ) ) {
	  exit; 
	  // Get out of here, the nonce is rotten!
	}
	check_ajax_referer('form_validation_name','security');

	switch($_POST['fn']){

        case 'contact':
			$output = contact($_POST);
        break;

        case 'schedule':
			$output = schedule($_POST);
		break;

    }

	$output = json_encode($output);

	if(is_array($output)){
		print_r($output);
	} else {
		echo $output;
	}

	die();
}


function contact($data){

}

function sanitizeText($text){
	return str_replace(array('_', '-'),' ', ucfirst( sanitize_text_field($text) ) );
}

function schedule($data){


	// Email HTML
	ob_start(); ?>

	<div style="width: 600px; margin: 0 auto;font-family: -apple-system,BlinkMacSystemFont,\"Segoe UI\",Roboto,\"Helvetica Neue\",Helvetica,Arial,sans-serif;">
		<div style="text-align: center; padding: 15px; margin-top: 1em; ">
			<a href="'.get_bloginfo('url').'" title="'.get_bloginfo('title').'">
				<img style="margin:0 auto;" src="<?php echo MAINLOGO; ?>" width="400" height="auto" alt="<?php echo get_bloginfo('name'); ?>" title="<?php echo get_bloginfo('name'); ?>" />
			</a> 
		</div>
		<table style="border: 0px solid #2b2b2b; border-collapse: collapse; width: 100%;">
			<tr>
				<td colspan="2" style="padding: 10px; text-align: center;font-weight: 700;">
					<h2 style="margin:0;">Appointment Confirmation</h2>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding: 10px; text-align: center;font-weight: 700;font-size:14px">
				Thank you for your request. The <?php echo get_bloginfo('name'); ?> team will respond to you shortly!
				</td>
			</tr>
			<tr>
				<td colspan="2" style="padding: 10px; text-align: center;font-weight: 700;"></td>
			</tr>

			<!-- loop through data -->
			<?php foreach($data['data'] as $data):
				if($data['name'] == 'name'){ $name = ucwords($data['value']); }
				if($data['name'] == 'email'){ $email = $data['value']; }
				if($data['name'] == 'phone'){ $name = $data['value']; }
			?>
				<tr style="border: 1px solid #2b2b2b;">
					<td style="width: 30%; padding: 15px; border: 1px solid #2b2b2b;font-size:14px;font-weight:bold;">
						<?php echo sanitizeText($data['name']); ?>
					</td>
					<td style="width: 70%; padding: 10px; border: 1px solid #2b2b2b; font-size:14px;">
						<?php echo sanitizeText($data['value']); ?>
					</td>
				</tr>
			<?php endforeach; ?>

		</table>
	</div>

	<?php
	// put html content in var
    $output = ob_get_contents();

    ob_end_clean();

	$email_message = $output;
	
	add_filter( 'wp_mail_content_type', 'set_html_content_type' );

	// Send to

	// Developer Email
	$emails = array( $email, 'nitya.hoyos@urgeinteractive.com' );

	// Client Email
	// $emails = array( $email, 'email@email.com' );

  	//$emails = array( $email, 'info@xx.com' );

	$headers = array();

	// From
	$headers[] = 'From: ' . get_bloginfo('name').' <noreply@xx.com>' . "\r\n";

	// Tracking
  	// $headers[] = 'Bcc: ' . get_bloginfo('name').' <tracking@urgeinteractive.com>' . "\r\n"; 

	// Send Email
	$mail_send = wp_mail( $emails , 'Schedule Request for ' . get_bloginfo('name') . '', $email_message, $headers );

	remove_filter( 'wp_mail_content_type', 'set_html_content_type' );

	// Email Responsive
	if($mail_send == true) {
		$message = '<p class="alert alert-success" id="contact-success">Your message was sent successfully!</p>';
	} else {
		$message = '<p class="alert alert-danger">Unable to send, please try again later.</p>';
	}

	return $message;

	die();
}
