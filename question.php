<?php 
session_start();
if($_SESSION["enrollment"]!="")
{?>
<html>
  <head>
      <meta charset="UTF-8">
    	<title>Quiz</title>
  <link rel="icon" href="https://i.imgur.com/hmaZoKf.gif" type="image/gif">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">
      <link rel="stylesheet" href="asset/css/style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <script>
        if(window.history.forward(1) != null)
        window.history.forward(1);
    </script>
  </head>

  <body>
    <!--this is used for navigation bar on top made by ankit-->
      <div class="navbar" align="left">
        <div align="right">
          <a href="leaderboard.php">Leaderboard</a>
          <a href="logout.php">Logout</a>
        </div>
      </div>
      <br>
    <form action="./questionconnect.php" method="post">
    <!--<form action="trackconnect.php" method="post">-->
      <div class="box black">
        <div align="center">
          <h1>WAR FOR TREZOR</h1>
            <?php $strValue = $_GET['id'];?>
            <img src="<?=$strValue;?>" height="300" width="300">
            <br><br><br>
                <div class="container">
                  <input type="text" placeholder="Your Answer" name="answer">
                  <br><br>
                  <input type="hidden" name="qid" value="1">
                  <button type="submit" name="submit"><strong>Submit</strong></button>
              </div>
          </div>
      </div>
    </form>
  <!--</form>-->
    <div class="footer">
      <a href="https://www.instagram.com/_ankit_jayswal/?hl=en"><img src="https://i.imgur.com/KjbQEwm.png" width="50" height="50"></a>
      <a href="https://www.facebook.com/ryder.raj.ankit"><img src="https://i.imgur.com/ulkQfJY.png" width="50" height="50"></a>
      <a href="https://in.linkedin.com/in/ankit-raj-2a74b017a"><img src="https://i.imgur.com/Y2kBHHP.png" width="50" height="50"></a>
    </div>
  </body>
          <!--it will disable the right click among the web page-->
          <script>
                var isNS = (navigator.appName == "Netscape") ? 1 : 0;
                if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
                function mischandler(){
                return false;
                }
                function mousehandler(e){
                var myevent = (isNS) ? e : event;
                var eventbutton = (isNS) ? myevent.which : myevent.button;
                if((eventbutton==2)||(eventbutton==3)) return false;
                }
                document.oncontextmenu = mischandler;
                document.onmousedown = mousehandler;
                document.onmouseup = mousehandler;
                </script>

                <script>
                document.onkeydown = function(e) {
                if(event.keyCode == 123) {
                return false;
                }
                if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
                return false;
                }
                if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
                return false;
                }
                if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
                return false;
                }
                }
          </script>
</html>
<?php
                 }

            else{
                    echo ('<meta http-equiv="refresh" content="0; URL=index.php?login=incorrect">');
                }
?>
