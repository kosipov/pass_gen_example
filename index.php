<?php
require "vendor/autoload.php";

use Kosipov\Ttteeesst\PasswordGenerator;
use Kosipov\Ttteeesst\RulesPassword;


$passwordGen = new PasswordGenerator();

$passwordRules = new RulesPassword();

$genPassword = $passwordGen->generate($passwordRules);

?>


<div>
    <?php echo $genPassword;?>
</div>
