<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<link rel="stylesheet" href="style.css">
</head>
<body>
	<form action="mail.php" method="POST">
		<div id="frmContact">
			<h1 class="title">Contact formulier</h1>
			<p class="form-message"></p>
				<div>
					<label class="label-naam">* Naam:</label>
					<span id="naam-info" class="info"></span><br/>
					<input type="text" name="naam" id="naam" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>* Straat:</label>
					<span id="straat-info" class="info"></span><br/>
					<input type="text" name="straat" id="straat" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>* Huisnummer</label>
					<span id="huisnummer-info" class="info"></span><br/>
					<input type="number" name="huisnummer" id="huisnummer" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>Huisnummertoevoeging</label>
					<span id="huistoevoeging-info" class="info"></span><br/>
					<input type="text" name="huistoevoeging" id="huistoevoeging" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>* Postcode</label>
					<span id="postcode-info" class="info"></span><br/>
					<input type="text" name="postcode" id="postcode" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>* Woonplaats</label>
					<span id="woonplaats-info" class="info"></span><br/>
					<input type="text" name="woonplaats" id="woonplaats" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label for="land-info">* Kies een land:</label>
					<select name="land" id="land">
						<option value="nederland">NL</option>
						<option value="belgie">BE</option>
					</select>
				</div>
				<br>
				<div>
					<label>* Email</label>
					<span id="email-info" class="info"></span><br/>
					<input type="email" name="email" id="email" placeholder="test@test.nl" class="InputBox" requierd>
				</div>
				<br>
				<div>
					<label>* Bericht</label> 
					<span id="bericht-info" class="info"></span><br/>
					<textarea name="bericht" id="bericht" class="InputBox" placeholder="Typ een bericht" cols="60" rows="6" requierd></textarea>
				</div>
				<br>
			<button id="form-submit" type="submit" name="submit">Verzenden</button>
		</div>
	</form>
</body>
</html>

<script>

	$(document).ready(function() {
		$("form").submit(function(event) {
			event.preventDefault();
			var naam = $("#naam").val();
			var straat = $("#straat").val();
			var huisnummer = $("#huisnummer").val();
			var postcode = $("#postcode").val();
			var woonplaats = $("#woonplaats").val();
			var land = $("#land").val();
			var email = $("#email").val();
			var bericht = $("#bericht").val();
			var submit =$("#form-submit").val();
			$(".form-message").load("mail.php", {
				naam: naam,
				straat: straat,
				huisnummer: huisnummer,
				postcode: postcode,
				woonplaats: woonplaats,
				land: land,
				email: email,
				bericht: bericht,
				submit: submit

			});
		});
	});

</script>
