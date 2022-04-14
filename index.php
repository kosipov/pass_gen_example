<?php
require "vendor/autoload.php";

use Kosipov\Ttteeesst\PasswordGenerator;
use Kosipov\Ttteeesst\RulesPassword;


$passwordGen = new PasswordGenerator();

$passwordRules = new RulesPassword();

/**
 * $_POST['number'] = true
 */
if ($_POST['submit']) {
    $genPassword = $passwordGen->generate($_POST['text'], $_POST['number'], $_POST['letter'], $_POST['symbol']);
}


?>


<div>
    <?php echo $genPassword;?>
</div>
