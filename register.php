<?php
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    $account = new Account($con);
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name) {
        if(isset($_POST[$name])) {
            echo $_POST[$name];
        }
    }

?>

<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <div id="inputContainer">
            <form id="loginForm" action="register.php" method="POST">
                <h2>Login to your account</h2>
                <p>
                    <label for="loginUsername">Username</label>
                    <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
                </p>
                <p>
                    <label for="loginPassword">Password</label>
                    <input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required>
                </p>
                <button type="submit" name="loginButton">LOG IN</button>
            </form>
            <form id="registerForm" action="register.php" method="POST">
                <h2>Create a free account</h2>
                <p>
                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <label for="regUsername">Username</label>
                    <input id="regUsername" name="regUsername" type="text" placeholder="e.g. bartSimpson" 
                    value="<?php getInputValue('regUsername'); ?>" required>
                </p>
                <p>
                    <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                    <label for="regFirstName">First name</label>
                    <input id="regFirstName" name="regFirstName" type="text" placeholder="e.g. Bart" 
                    value="<?php getInputValue('regFirstName'); ?>"required>
                </p>
                <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                    <label for="regLastName">Last name</label>
                    <input id="regLastName" name="regLastName" type="text" placeholder="e.g. Simpson" 
                    value="<?php getInputValue('regLastName'); ?>"required>
                </p>
                <p>
                    <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <label for="regEmail">Email</label>
                    <input id="regEmail" name="regEmail" type="email" placeholder="e.g. bart@gmail.com" 
                    value="<?php getInputValue('regEmail'); ?>"required>
                </p>
                <p>
                    <label for="regEmail2">Confirm email</label>
                    <input id="regEmail2" name="regEmail2" type="email" placeholder="e.g. bart@gmail.com" 
                    value="<?php getInputValue('regEmail2'); ?>"required>
                </p>
                <p>
                    <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
                    <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                    <?php echo $account->getError(Constants::$passwordCharacters); ?>
                    <label for="regPassword">Password</label>
                    <input id="regPassword" name="regPassword" type="password" placeholder="Your Password" required>
                </p>
                <p>
                    <label for="regPassword2">Confirm password</label>
                    <input id="regPassword2" name="regPassword2" type="password" placeholder="Your password" required>
                </p>
                <button type="submit" name="registerButton">SIGN UP</button>
            </form>
        </div>
    </body>
</html>