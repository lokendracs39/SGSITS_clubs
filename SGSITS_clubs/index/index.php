<!DOCTYPE html>
<html>
    <head>
      <title>Upload</title>
        <link href="signup.css" type="text/css" rel="stylesheet">
        <link href="home.css" type="text/css" rel="stylesheet">
        <center>
          <h1>sgsits clubs</h1>
        </center>

    </head>
    <body>
      <a class = "sign_up_link" href="home.php" style="float:right;">HOME</a>
          <div  class="signUp">
            <p class = "head" style="margin-left:70px;">upload content below</p>
            <form action='../include/upload.inc.php' method='POST' enctype="multipart/form-data" onsubmit="return f1()">
              <div class="inside_form">
                  <input type="file" name="File"></input></br></br>
                  <textarea rows="3" id = "discription"style="margin-right:80px;" name="discription" placeholder="discription..." required></textarea>
                </br>
                  <span id="discriptions" style="color:blue; font-size:12px;"></span>
                </br>
                  <button type="submit" name="submit" style="margin-right:170px;">upload File</button>
              </div>
            </form>
          </div>
        <script>
        
              function f1()
              {

                var x1 = document.getElementById('discription').value
                if(x1.length<10 || x1.length>30)
                  {
                    document.getElementById('discriptions').innerHTML = "discript should be 10-30 char long";
                    return false;
                  }

              }
      </script>
    </body>
</html>
