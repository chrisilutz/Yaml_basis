							<?php
							
							if($_POST['_abgeschickt']){
/* Empfaenger */
$empfaenger = array(SITE_NAME.'<'.EMAIL.'>');


/* Absender */
$absender = $_POST['email'];

/* Rueckantwort */
$reply = EMAIL;

/* Betreff */
$subject = 'Mitteilung an '.SITE_NAME;

/* Nachricht */
$message = '<h5>Name: '.$_POST['name'].'</h5>
<h5>Email: '.$_POST['email'].'<br /></h5>
<h5>Mitteilung:<h5><p>'.htmlentities($_POST['message']).'<br /></p>
<br /><br />
<h5>Dies ist eine automatisch generierte Mail.<br />
Wir treten bald pers&ouml;nlich mit Ihnen in Kontakt.<br /><br />
Ihr '.SITE_NAME.'-Team.</h5>'
;





/* Baut Header der Mail zusammen */
$headers .= 'From:' . $absender . "\n";
$headers .= 'Reply-To:' . $reply . "\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
$headers .= 'X-Sender-IP: ' . $REMOTE_ADDR . "\n";
$headers .= "Content-type: text/html\n";

// Extrahiere Emailadressen
$empfaengerString = implode(',', $empfaenger);


$headers .= 'Cc: ' . $absender . "\n";
$headers .= 'Bcc: ' . $empfaengerBCCString . "\n";

/* Verschicken der Mail */
mail($empfaengerString, $subject, $message, $headers);
echo "<section class='ym-form ym-full'><h4>Danke f&uuml;r Ihre Nachricht, wir setzen uns mit Ihnen in Verbindung</h4></section>";	
	}
	
else {						 
							?>
							
						
				<form method="post" id="commentForm" action=<?php echo "$_SERVER[PHP_SELF]" ?> class="ym-form ym-full">

  					<fieldset>
    					<legend>Kontakt</legend>
    					<!-- Name -->
    					<div class="ym-fbox-text">
  							<label for="name">Name</label>
  							<input type="text" name="name" id="name" class="required" size="20"  minlength="2" />
						</div>
						<!-- Email -->
							<div class="ym-fbox-text">
  							<label for="email">Email</label>
  							<input type="text" name="email" id="email" class="required email" size="20" />
						</div>
							<!-- Textfeld -->
						<div class="ym-fbox-text">
  							<label for="message">Ihre Nachricht</label>
  							<textarea name="message" id="message" cols="30" rows="7"></textarea>
						</div>
							<!-- Buttons -->
						<div class="ym-fbox-button">
							<input type="submit" value="Abschicken" class="ym-button" name="submit" />
							<input type="reset" class="ym-button" value="Zur&uuml;cksetzen" id="reset" name="reset" />
							<input type="hidden" name="abgeschickt" value="1" />
						</div>

  					</fieldset>
					<input type="hidden" name="_abgeschickt" value="1">
				</form>
					
						
			<?php }	?>