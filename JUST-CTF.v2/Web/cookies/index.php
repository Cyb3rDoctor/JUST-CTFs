<?php
$cookie_name = "JUST{fl4g_shouldn't_be_here}";
$cookie_value = "";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = $
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Javascript</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
  <body>
        <div class="container" style="padding-top   :100px;">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <h1>Cookie Search Engine</h1>
                    <form class="form-inline" method="get">
                      <div class="form-group" style="width:90%;">
                        <input style="width: 85%;" type="text" name="s" class="form-control" id="exampleInputName2" placeholder="keyword">
                      </div>
                      <button type="submit" class="btn btn-default">Search</button>
                    </form>
                    <hr />
                    <h2 class="text-center">
                                            </h1>

                    <hr />
                    <div class="row">
                                              <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Aachener_Printen_0293.jpg/800px-Aachener_Printen_0293.jpg">
                          <div class="caption">
                            <h3>Aachener Printen</h3>
                          </div>
                        </div>
                      </div>
                                        <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/3/37/Abernethy_Biscuits..jpg">
                          <div class="caption">
                            <h3>Abernethy</h3>
                          </div>
                        </div>
                      </div>
                                        <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Acibadem_Kurabiyesi.jpg">
                          <div class="caption">
                            <h3>Acıbadem kurabiyesi</h3>
                          </div>
                        </div>
                      </div>
                                        <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d1/AfghanBiscuit.jpg/657px-AfghanBiscuit.jpg">
                          <div class="caption">
                            <h3>Afghan biscuits</h3>
                          </div>
                        </div>
                      </div>
                                        <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/f/f0/AlfajoresTriples.jpg">
                          <div class="caption">
                            <h3>Alfajor</h3>
                          </div>
                        </div>
                      </div>
                                        <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Macau_Koi_Kei_Bakery_Almond_Biscuits_2.JPG">
                          <div class="caption">
                            <h3>Almond biscuit</h3>
                          </div>
                        </div>
                      </div>                                      </div>
                </div>
            </div>
        </div>



  </body>
</html>
