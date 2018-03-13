<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>OWD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="image/logo.png"
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Bootstrap/CSS/style.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img class="navbar-brand" src="image/logo.png" size="500">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#services">SERVICES</a></li>
                <li><a href="#portfolio">PORTFOLIO</a></li>
                <li><a href="#portrait">PORTRAIT</a> </li>
                <li><a href="#pricing">PRICING</a></li>
                <li><a href="#contact">CONTACT</a></li>
                <li><a href="Formulaire.php"><?php if(isset($_POST['login'])) echo htmlspecialchars($_POST['login']);else echo strtoupper('LOGIN');?></a></li>

            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron text-center">
    <h1>Original Web Designer</h1>
    <p>We specialize in creating great and powerful web site</p>
    <form action="" method="post">
        <div class="input-group">
            <input type="email" class="form-control" name="adressEmail" size="50" placeholder="Email Address" required>
            <div class="input-group-btn">
                <button type="submit" name="submit" class="btn btn-danger">Subscribe</button>
            </div>
        </div>
    </form>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>About OWD</h2><br>
            <h4>Our Start-up, OWD (Orignal Web Designer), was created by Martin Braun in 2014 and his colleagues Louis and Thibaud joined him on this project.</h4><br>
            <p>We are specialized in the conception of Web Site and more particularly on the Urban culture.
                Our team consists of a leader project named Martin Braun, of a developer Thibaud Leteno and
                finally Web Designer named Louis Perrot. Three enthusiasts in Web who will realize your projects
                with enjoyment and expertise.</p>
            <br><button class="btn btn-default btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-signal logo"></span>
        </div>
    </div>
</div>

<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-globe logo slideanim"></span>
        </div>
        <div class="col-sm-8">
            <h2>Our Values</h2><br>
            <h4><strong>MISSION:</strong> Our mission is to create and design web site for company with professionalism.
                We care about estheticism and quality of your web site.</h4><br>
            <p><strong>VISION:</strong> Our vision aim to be modern with a technology watch group. </p>
        </div>
    </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
    <h2>SERVICES</h2>
    <h4>What we offer</h4>
    <br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-off logo-small"></span>
            <h4>POWER</h4>
            <p>Site powerful and fast </p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-heart logo-small"></span>
            <h4>LOVE</h4>
            <p>We love make you confident  </p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-lock logo-small"></span>
            <h4>JOB DONE</h4>
            <p>Web site done in time </p>
        </div>
    </div>
    <br><br>
    <div class="row slideanim">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-leaf logo-small"></span>
            <h4>GREEN</h4>
            <p>Our Green IT certificates us </p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-certificate logo-small"></span>
            <h4>CERTIFIED</h4>
            <p>Certified by all companies</p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-wrench logo-small"></span>
            <h4 style="color:#303030;">HARD WORK</h4>
            <p>We spent time to create a Web site that match with your intent</p>
        </div>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2><br>
    <h4>What we have created</h4>
    <div class="row text-center slideanim">
        <div class="col-sm-4">
            <div class="thumbnail">
                <a href="http://www.mouv.fr/"><img src="image/mouv.PNG"  width="200" height="150"></a>
                <p><strong>Radio Mouv'</strong></p>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail img">
                <a href="http://www.cultures-urbaines.fr/"><img src="image/culture.PNG"  width="200" height="150"></a>
                <p><strong>Culture urbaine</strong></p>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail img">
                <a href="http://www.nozbone.com/"><img src="image/nozbone.PNG"  width="200" height="150"></a>
                <p><strong>Nozbone skateshop</strong></p>
            </div>
        </div>
    </div><br>

    <h2>What our customers say</h2>
    <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Mouv'</span></h4>
            </div>
            <div class="item">
                <h4>"One word... WOW!!"<br><span>John Doe, President, Culture Urbaine</span></h4>
            </div>
            <div class="item">
                <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Skateur, Nozbone skateshop</span></h4>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- Container (Portait Selection) -->

<div id="portrait" class="container-fluid">
    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row slideanim" id="ourPortrait">
            <div class="col-sm-4">
                <img class="rounded-circle" src="image/ProfilBraun.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Martin Braun</h2>
                <h3>Chef de Projet</h3>
                <p>20 years Developer</p>
                <p><button  type="button" class="btn btn-secondary" data-toggle="modal" data-target="#braunModal" role="button">View details &raquo;</button></p>

                <!-- Modal -->
                <div id="braunModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Martin Braun</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <img class="rounded-circle" src="image/profilPerrot.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Louis Perrot</h2>
                <h3>Web Designer</h3>
                <p>18 years Designer</p>
                <p><button  type="button" class="btn btn-secondary" data-toggle="modal" data-target="#perrotModal" role="button">View details &raquo;</button></p>

                <!-- Modal -->
                <div id="perrotModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Louis Perrot</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <img class="rounded-circle" src="image/profilLeteno.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Thibaud Leteno</h2>
                <h3>Developer</h3>
                <p>20 years Developer</p>
                <p><button  type="button" class="btn btn-secondary" data-toggle="modal" data-target="#letenoModal" role="button">View details &raquo;</button></p>

                <!-- Modal -->
                <div id="letenoModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Thibaud Leteno</h4>
                            </div>
                            <div class="modal-body">
                                <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Pricing</h2>
        <h4>Choose a payment plan that works for you</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Showcase site</h1>
                </div>
                <div class="panel-body">
                    <p><strong>5 - 10</strong> pages</p>
                    <p>to present your activities </p>
                    <p>or business</p>
                </div>
                <div class="panel-footer">
                    <h3>$1000 - 5000</h3>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Webshop</h1>
                </div>
                <div class="panel-body">
                    <p><strong>5 - 10</strong> presentation pages</p>
                    <p>and <strong>50 - 100</strong></p>
                    <p>product sheets</p>
                </div>
                <div class="panel-footer">
                    <h3>$3000 - 50 000</h3>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Web portal</h1>
                </div>
                <div class="panel-body">
                    <p><strong>More than 200</strong> pages,</p>
                    <p>member's area</p>
                    <p>and other modules</p>
                </div>
                <div class="panel-footer">
                    <h3>$10 000 - 100 000</h3>
                    <button class="btn btn-lg">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contact us and we'll get back to you within 24 hours.</p>
            <p><span class="glyphicon glyphicon-map-marker"></span> France, FR</p>
            <p><span class="glyphicon glyphicon-phone"></span> +33 0781865990</p>
            <p><span class="glyphicon glyphicon-envelope"></span> martin.braun@etu.univ-lyon1.fr</p>
        </div>
        <div class="col-sm-7 slideanim">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="<?php
                    if(isset($_POST['login']))echo  htmlspecialchars($_POST['login']);?>">

                </div>
                <div class="col-sm-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="
                    <?php
                    if(isset($_POST['submit']))
                        echo htmlspecialchars($_POST['adressEmail']);
                    elseif (isset($_POST['adressEmailRegister']))
                        echo  htmlspecialchars($_POST['adressEmailRegister']);?>" required>
                </div>
            </div>
            <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
            <div class="row">
                <div class="col-sm-12 form-group">
                    <button class="btn btn-default pull-right" type="submit">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Web Site made by  <a href="https://www.w3schools.com" title="Visit w3schools"> www.originalwebdesigner.com</a></p>
</footer>

<script>
    $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });

        $(window).scroll(function() {
            $(".slideanim").each(function(){
                var pos = $(this).offset().top;

                var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                    $(this).addClass("slide");
                }
            });
        });
    })
</script>

</body>
</html>
