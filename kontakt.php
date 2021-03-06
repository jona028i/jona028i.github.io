<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css.css">
    <title>Frisør Ma-Lou</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
                    aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="index.html">Frisør Ma-Lou</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Forside</a></li>
                    <li><a href="behan.html">Behandlinger</a></li>
                    <li><a href="gallery.html">Galleri</a></li>
                    <li><a href="http://www.xn--frisrma-lou-jgb.dk/bestil.php" target="_blank">Bestil tid</a></li>
                    <li><a href="kontakt.php">Kotakt os</a></li>

                    <!--  måske ikk? -->
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">


                <div class="col-lg-6 col-xs-12">
                    <div>
                        <div class="form-area">
                            <form role="form">
                                <h3>Kontakt formular</h3>
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Navn" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobil Nummer" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Emne" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="Skriv her.." maxlength="140" rows="7"></textarea>
                                    <span class="help-block"><p id="characterLeft" class="help-block ">140 tegn tilbage</p></span>
                                </div>

                                <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Send besked</button>
                            </form>
                        </div>
                        brug hvis formularen ikk virker
                        <!-- <div class="closed"></div> -->
                    </div>

                </div>
                <div class="col-lg-5 col-xs-12 col-lg-offset-1">
                    <h3>Kontakt oplysninger</h3>
                    <hr>
                    <div class="col-xs-12 col-lg-12">
                        <p>
                            <span class="glyphicon glyphicon-earphone"></span>57 61 40 08
                        </p>
                        <p>
                            <span class="glyphicon glyphicon-home"></span>Sct. Hansgade 36 - 4100 Ringsted
                        </p>
                        <p>
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <a href="https://www.facebook.com/frisoermalou.ringsted/" target="_blank">Frisør Ma-Lou Facebook</a>
                        </p>
                        <p>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <a href="https://www.instagram.com/frisormalou/" target="_blank">Frisør Ma-Lou Instagram</a>
                        </p>
                    </div>
                    <h3>Information</h3>
                    <hr>
                    <div class="col-lg-12 col-xs-12">
                        <p class="info">Frisør Ma-Lou ligger centralt i Ringsted, placeret 1.1 km væk fra Ringsted station. Vi klipper både
                            med og uden tidsbestilling. Online betingelser Husk at melde afbud i god tid. Ved udeblivelse
                            uden afbud opkræver vi 50% af behandlingens pris</p>
                    </div>
                </div>
                <div class="col-lg-12 col-xs-12">
                    <div class="col-lg-5 col-xs-12">
                        <h3>Åbningstider</h3>
                        <hr>
                        <ul class="center boldtext tider">
                            <li>Mandag lukket</li>
                            <li>Tirsdag 08:00-17:00</li>
                            <li>Onsdag 08:00-17:00</li>
                            <li>Torsdag 08:00-17:00</li>
                            <li>Fredag 08:00-17:00</li>
                            <li>Lørdag efter aftale</li>
                            <li>Søndag Lukket</li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-lg-7 kontakt cols">
                        <h3>Her kan du finde os</h3>
                        <hr>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18101.852077701435!2d11.788710290350362!3d55.44991335977785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcb12341effc20185!2sFris%C3%B8r+Ma-Lou!5e0!3m2!1sda!2sdk!4v1504767712366"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- <ul class="nondot"> -->
                        <!-- </ul> -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="col-xs-12 col-lg-6">
                <p class="text-muted">2017 &copy; | <span class="boldtext">Frisør Ma-Lou</span> | Jonas Schulze Hansen</p>
            </div>
            <div class="col-xs- col-lg-6 hidden-xs">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Forside</a></li>
                    <li><a href="behan.html">Behandlinger</a></li>
                    <li><a href="gallery.html">Billeder</a></li>
                    <li><a href="http://www.xn--frisrma-lou-jgb.dk/bestil.php" target="_blank">Bestil tid</a></li>
                    <li><a href="kontakt.php">Kotakt os</a></li>

                    <!--  måske ikk? -->
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="col.js"></script>
    <script src="kontakt.js"></script>

</body>
<?php
if(isset ($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
}
mail($name,$subject,$email,$message);
?>

</html>