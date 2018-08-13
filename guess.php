<html>
<title>Carlo Petalver</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head></head>
<style type="text/css">
    body{
        width: 30%;
        margin: auto;
        padding: 10px;
        margin-top: 50px;
    }
    .padleftandright{
        padding-left: 10px;
        padding-right: 20px;
    }
    .w3-input{
        text-align: center;
        font-size: 40px;
    }
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    h2{
        text-align: center;
    }
    .center{
        margin-left: auto;
        margin-right: auto;
    }
</style>
<body>
<div class="w3-container">
    <div class="w3-card-4">
    <div class="w3-container w3-green"><h3>What is your guess?</h3></div>
    <?php
        function compare_two_numbers($number_A, $number_B){
            if ($number_A == $number_B){
                echo "<h2>Congratulations<br>You are right!</h2>";
                $GLOBALS['b_match'] = true;        
            }
            if ($number_A > $number_B){
                echo "<div class='padleftandright'>You guess is too high.</div>";
            }
            if ($number_A < $number_B){
                echo "<div class='padleftandright'>Your guess is too low.</div>";
            }
        }
    ?>
    <?php
        $GLOBALS['b_match'] = false;
        
        if(isset($_GET['number_guess'])){
            setcookie('my_guess',$_GET['number_guess']);
            $_COOKIE['my_guess'] = $_GET['number_guess']; 
        }else{
            unset($_COOKIE['my_guess']);
            setcookie('my_guess', '', time() - 3600, '/'); 
        }
        
        if(isset($_GET['guess'])){
            setcookie('my_login',$_GET['guess']);
            setcookie('my_rand',rand(1,100));
            $_COOKIE['my_login'] = $_GET['guess'];
            $GLOBALS['b_match'] = false;  
        }
        echo "<div class='padleftandright'> Welcome " . $_COOKIE['my_login']."!"."</div>";
        
        if(isset($_COOKIE['my_guess'])){
            echo "</br>";
            if (is_numeric($_COOKIE['my_guess'])){
                echo "<div class='padleftandright'> You have chosen " . $_COOKIE['my_guess'] . ".</br></div>";
            }
            elseif (!ctype_digit($_COOKIE['my_guess'])) {
                echo "<div class='padleftandright'> Your guess is not a number!</br></div>";   
            }
            else {
                echo "<div class='padleftandright'> Missing quess parameter" . "</br></div>";
            }
                
            
            //echo "The random is " . $_COOKIE['my_rand'] . ".</br>";
            compare_two_numbers($_COOKIE['my_guess'], $_COOKIE['my_rand']);
            echo "</br>";
        } else {
            echo "</br>";
            //echo "Guessing is not difficult!";
        }
        
        if (!$GLOBALS['b_match']){
            echo "</br>";
            //echo "Try to guess:";
            echo "</form>";
            echo "<form action='guess.php' method='get'>";
            echo "<div class='padleftandright'> <b>Enter a number:</b> <input class='w3-input' name = 'number_guess'></div>";
            echo "<br><input type='submit' value='submit' class='button'>";
            echo "</form>";   
        } else {
            //echo "<hr />";
            //echo "<iframe width='420' height='315' src='https://www.youtube.com/embed/UWLIgjB9gGw' frameborder='0' allowfullscreen></iframe>";
            //echo "<hr />";
            echo "<form action='index.php'><br>";
            echo "<input type='submit' value='Play again!' class='button'>";
        }
    ?> 
    </div>
    </div>   
</body>
</html>