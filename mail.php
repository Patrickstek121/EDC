<?php

if (isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $straat = $_POST['straat'];
    $huisnummer = $_POST['huisnummer'];
    $postcode = $_POST['postcode'];
    $woonplaats = $_POST['woonplaats'];
    $land = $_POST['land'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];

    $errorEmpty = false;
    $errorEmail = false;

    if (empty($naam) || empty($straat) || empty($huisnummer) || empty($postcode) || empty($land) || empty($email) || empty($bericht)) {
        echo "<span class='error'>Vul alle velden in!</span>";
        $errorEmpty = true;
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='error'>Vul een geldige e-mail adres in</span>";
        $errorEmail = true;
    }
    else {
        echo "<span class='success'>Email is verzonden</span>";
    }
}

?>

<script>
    $("#naam, #straat, #huisnummer, #postcode, #woonplaats, #land, #email, #bericht").removeClass(input-error);

    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if (errorEmpty == true) {
        $("#naam, #straat, #huisnummer, #postcode, #woonplaats, #email, #bericht").addClass("input-error");
    }
    if (errorEmail == true) {
        $("#email").addClass("input-error");
    }

    if (errorEmpty == false && errorMail == false) {
        $("#naam, #straat, #huisnummer, #postcode, #woonplaats, #email, #bericht").val("");
        
    }
</script>
