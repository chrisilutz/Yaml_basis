<?php
							
							if($_POST['_abgeschickt']){
/* Empfaenger */
$empfaenger = array(SITE_NAME.'<'.EMAIL.'>');


/* Absender */
			$absender = $_POST['email'];
			$name = urldecode($_POST['name']);
			$strasse = urldecode($_POST['strasse']);
			$ort = urldecode($_POST['ort']);
			$nachricht = urldecode($_POST['nachricht']);
			
/* Rueckantwort */
$reply = EMAIL;

/* Betreff */
$subject = 'Mitteilung an '.SITE_NAME;

/* Nachricht */
				echo '	<h5>Danke f&uuml;r Ihre Nachricht</h5>
						<p>Ihre Angaben:</p>
						<p>Name: '.$name.'</p><p>Strasse: '.$strasse.'</p>
						<p>Ort: '.$ort.'</p>
						<p>Email: '.$absender.'</p>
						<p>Nachricht: '.$nachricht.'</p>';
				$message = '<h5>Danke f&uuml;r Ihre Nachricht</h5>
							<p>Ihre Angaben:</p>
							<p>Name: '.$name.'</p><p>Strasse: '.$strasse.'</p>
						<p>Ort: '.$ort.'</p>
						<p>Email: '.$absender.'</p>
						<p>Nachricht: '.$nachricht.'</p>
						<p>Mit freundlichen Gr&uuml;&szlig;en<br /><b>'.SITE_NAME.'</b></p>						
						<p>Diese Email wurde automatisch versendet.</p>'
				;
				





/* Baut Header der Mail zusammen */
$headers .= 'From:' . $absender . "\n";
$headers .= 'Reply-To:' . $reply . "\n";
$headers .= 'X-Mailer: PHP/' . phpversion() . "\n";
$headers .= 'X-Sender-IP: ' . $REMOTE_ADDR . "\n";
$headers .= "Content-type: text/html; charset=utf-8\n";

// Extrahiere Emailadressen
$empfaengerString = implode(',', $empfaenger);


$headers .= 'Cc: ' . $absender . "\n";
$headers .= 'Bcc: ' . $empfaengerBCCString . "\n";

/* Verschicken der Mail */
mail($empfaengerString, $subject, $message, $headers);
	
	}
	
else {						 
							?>
							
						
				<form method="post" id="commentForm" action=<?php echo "$_SERVER[PHP_SELF]" ?> class="ym-form ym-full">

  					<fieldset>
    					<legend>Kontakt</legend>
    					<!-- Name -->
    					<div class="ym-fbox-text">
  							<label for="name">Name *</label>
  							<input type="text" name="name" id="name" class="required" size="30"  minlength="2" />
						</div>
						<!-- Email -->
							<div class="ym-fbox-text">
  							<label for="email">Email *</label>
  							<input type="text" name="email" id="email" class="required email" size="30" />
						</div>
						<!-- Strasse -->
							<div class="ym-fbox-text">
  							<label for="strasse">Stra&szlig;e/Nr.</label>
  							<input type="text" name="strasse" id="strasse" class="strasse" size="30" />
						</div>
						<!-- Ort -->
							<div class="ym-fbox-text">
  							<label for="ort">PLZ Ort</label>
  							<input type="text" name="ort" id="ort" class="ort" size="30" />
						</div>
							<!-- Textfeld -->
						<div class="ym-fbox-text">
  							<label for="nachricht">Ihre Nachricht</label>
  							<textarea name="nachricht" id="nachricht" cols="30" rows="7"></textarea>
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