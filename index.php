<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Granny's Muffin Bakery is the place for elderly like you and me to share our best cooking recepies!">
    <meta name="keywords" content="Muffin,Pink,Granny,Message,Messages,Elderly">
    <meta name="author" content="Peter Janssen">
    <meta name="copyright" content="Peter Janssen - 2018">
    <title>Guestbook</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header>
      <h1>Granny's Muffin Bakery.</h1>
      <h2>Leave a message!</h2>
    </header>

    <?php
    if (isset($_GET["no"])) {
      echo "YOU HAVENT FILLED IN SOME KEY DETAILS";
    }
     ?>

    <form class="guestbook" action="redirect.php" method="post">
      <label for="firstname">First Name*</label>
      <input type="text" name="firstname" value="">
      <br/>
      <label for="insertion">Insertion</label>
      <input type="text" name="insertion" value="">
      <br/>
      <label for="lastname">Last Name*</label>
      <input type="text" name="lastname" value="">
      <br/>
      <label for="email">E-mail Address*</label>
      <input type="text" name="email" value="">
      <br/>
      <label for="webaddress">Web Address</label>
      <input type="text" name="webaddress" value="">
      <br/>
      <label for="message">Message*</label>
      <input type="text" name="message" value="">
      <br/>
      <br/>
      <label>Captcha*</label>
      <br/>
      <img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image" />
      <br/>
      <a href="#" onclick="document.getElementById('captcha').src = 'securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
      <br/>
      <input type="text" name="captcha_code" size="10" maxlength="6" />
      <br/>
      <p>*: has to be filled in</p>
      <input type="submit" name="" value="Submit">
      <input type="reset" name="" value="Reset">
      <img id="muffin" src="Media/img/Muffin.png" alt="muffin">
    </form>

    <h1 id="messagesHeader">Read messages left by others!</h1>
      <div id="messagesContainer">
        <?php
        include "connectToDatabase.php";
        foreach ($data as $value)
        {
          echo "
              <div class=\"messages\">
                <h3 class=\"name\">$value[firstname] $value[insertion] $value[lastname]</h3>
                <h3 class=\"email\">$value[email]</h3>
                <h3 class=\"webaddress\">$value[webaddress]</h3>
                <p class=\"message\">$value[message]</p>
              </div>";
        }
        ?>
      </div>
      <footer>
        <p>©Peter Janssen - 2018 - In association with ROC ter AA</p>
      </footer>
  </body>
</html>
