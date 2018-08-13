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
    .container{

    }
    .center{
        display: block;
        margin-left: 150px;
    }
    .button {
        background-color: #e7e7e7; /* Green */
        border: none;
        color: black;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }
    .w3-input{
        font-size: 30px;
    }
</style>
    <body>
        <?
            unset($_COOKIE['my_login']);
            setcookie('my_login', '', time() - 3600, '/'); 
        ?>     
    <div class="w3-container">
    <div class="w3-card-4">
    <div class="w3-container w3-green">
      <h2>Guessing Game</h2>
    </div>

    <form class="w3-container" action="guess.php" method="GET">
      <p>
      <input class="w3-input" type="text" name="guess">
      <label> Your name here</label></p>
      <p>     
      <input type="submit" value="Start Game" class="button">
       <img src="guess.png" class="center">
    </form>
  </div>
</div>
    </body>
</html>