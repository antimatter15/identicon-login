<!doctype html>
<?php
  $SECRET_KEY = "In order to make an apple pie from scratch, you must first invent a universe.";
?>
<html>
  <head>
    <style>
      body {
        font-family: sans-serif, arial, helvetica;
        font-size: 13px;
        padding: 30px;
        padding-top: 10px;
      }
      h1 {
        color: #007fff;
      }
      .box {
        float: right;
        background-color: #eaeaea;
        padding: 10px;
        width: 250px;
      }
    </style>
  </head>
  <body>
    <h1>Login Identicons</h1>
    
    <div class="box">
      <!-- html gods kill me now -->
      
      <div id="login_identicon" style="float:left;font-weight:bold;color:red"></div>
      <center>
        Sign in with your 
        <p style="font-size: large">imaginary account</p>
        Username: <input type="text"> <br>
        <span style="color:gray">ex: not@a.realuni.corn</span> <br>
        Password: <input type="password"><br>
        
        <input type="checkbox" id="stay"> <label for="stay">Stay signed in.</label>
        <br>
        <input type="button" value="Sign In">
      </center>
    </div>
    <div style="background-color: #FFE58F;padding: 10px;float:right; width: 250px">
      On the login box, you see an image that is based on the IP address of your current computer and this website's identity. If the icon is different, this may be a symbol that you're on a different computer, that your IP Address has been changed, or you are currently victim to a phishing scheme. If it has changed and you are not sure why, this may be a bad sign.
    </div>
    <h2>A hopefully useful approach to fighting phishing</h2>
    <p>
      The login hash icons demo page is built on the idea that fighting phishers can be more intuitive, efficient and simple. And maybe even a based on the Gmail login screen. After all, it has:
    </p>
    <p>
      <h4>Lots of users</h4>
      Right now, there are over 0 users (and counting) of this approach.
    </p>
    <p>
      <h4>Less Phishing</h4>
      Keep unwanted evildoers out of your service with antimatter15's innovative technology.
    </p>
    <p>
      <h4>Mobile Access</h4>
      Well, you can't get this on your mobile phone, but that's okay.
    </p>
    
    <div style="color:gray;text-align:center">
      &copy; 2010 - <a href="http://antimatter15.com">For Work</a> - <a href="http://antimatter15.com">Terms and Privacy</a> - <a href="http://antimatter15.com">Halp</a>
    </div>
    <script>
      (function(){
        var logID = document.getElementById('login_identicon');
        if(window == top){
          var hash = "<?php echo md5(sha1($_SERVER['REMOTE_ADDR']) . $SECRET_KEY); ?>";
          var img = document.createElement('img');
          img.src = 'identicon.php?hash='+hash+'&size=64';
          logID.innerHTML = '';
          logID.appendChild(img);
        }else{
          logID.innerHTML = 'Warning! Login page is inside a frame!';
        }
      })();
    </script>
  </body>
</html>
