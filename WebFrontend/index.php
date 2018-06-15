<?php
if(isset($_GET['name'])){ //if the user has logged in
  header("Location:/backend/logedin.php?name=".urlencode($_GET['name']));
}




?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Company Name</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body>

	<main>

	<header>

		<h1><a href="index.html">Company Name</a></h1>
      <nav class="topbar">
        <ul class="menu">
          <li><a href="backend/signup.php">Register</a></li>
          <li><a href="backend/login.php">Sign In</a></li>
        </ul>
      </nav>


		<hr color="lightgrey" size="1" width="90%">

	</header>


<!--

	<div class="container">

        <div class="view">
        	<img src="img/cs.jpg" alt="image for cs category" title="cs" width="100%">
        		<a href="#"><h2>Computer Science</h2></a>
                <p>Description: Vestibulum ornare sem eros, vel venenatis leo venenatis eu. Nam diam ex, viverra ac tortor non, rhoncus facilisis diam. Fusce malesuada urna quis sem maximus vehicula. Morbi id condimentum lorem.</p>
        </div>

        <div class="view">
        	<img src="img/math.jpg" alt="image for math category" title="math" width="100%">
        		<a href="#"><h2>Math</h2></a>
                <p>Description: Proin leo nulla, vulputate eget pretium eu, gravida vitae nulla.</p>
        </div>

        <div class="view">
        	<img src="img/science.jpg" alt="image for science category" title="science" width="100%">
        		<a href="#"><h2>Science</h2></a>
                <p>Description: Vestibulum ornare sem eros, vel venenatis leo venenatis eu. Nam diam ex, viverra ac tortor non, rhoncus facilisis diam. Fusce malesuada urna quis sem maximus vehicula. Morbi id condimentum lorem. </p>
        </div>


    </div>


-->

    <div class="container clearfix content">

        <div class="grid_4">
            <div class="view">
                <img src="img/4.jpg" alt="pic"/>
                <div class="mask">
                    <h2>Computer Science</h2>
                    <p>a sample description. Aenean in felis nec leo euismod vestibulum. Aliquam vehicula suscipit volutpat. Donec cursus pellentesque mauris, cursus congue justo molestie non. Phasellus ut lorem magna.</p>
                    <a href="#item" class="info">Learn More</a>
                </div>
            </div>
        </div>

        <div class="grid_4">
            <div class="view">
                <img src="img/5.jpg" alt="pic"/>
                <div class="mask">
                    <h2>Math</h2>
                    <p>a sample description. Pellentesque phardui suscipit, quis convallis lectus ultrices. Quisque eleifend faucibus eros. </p>
                    <a href="#item" class="info">Learn More</a>
                </div>
            </div>
        </div>

            <div class="grid_4">
            <div class="view">
                <img src="img/7.jpg" alt="pic"/>
                <div class="mask">
                    <h2>Physics</h2>
                    <p>a sample description. Integer ultrices orci elit, ut laoreet turpis venenatis nec. Nullam finibus ornare urna, non luctus elit vestibulum quis. Pellentesque rhoncus blandit erat quis semper. </p>
                    <a href="#item" class="info">Learn More</a>
                </div>
            </div>
        </div>

        <div class="grid_4">
            <div class="view">
                <img src="img/8.jpg" alt="pic"/>
                <div class="mask">
                    <h2>Chemistry</h2>
                    <p>a sample description. Quisque sagittis imperdiet diam et tincidunt. Aenean eleifend enim vel erat rutrum, in auctor turpis tincidunt. Ut nec nunc nec quam condimentum pretium. Cras nisi augue, dignissim id augue vel, lacinia ullamcorper risus. </p>
                    <a href="#item" class="info">Learn More</a>
                </div>
            </div>
        </div>

        <div class="grid_4">
            <div class="view">
                <img src="img/11.jpg" alt="pic"/>
                <div class="mask">
                    <h2>Biology</h2>
                    <p>a sample description. Proin pulvinar congue purus non consequat. Fusce vel porttitor nisl. Nulla fermentum dignissim turpis, nec rutrum velit hendrerit at. Aliquam pretium facilisis odio id mollis. </p>
                    <a href="#item" class="info">Learn More</a>
                </div>
            </div>
        </div>


        <div class="grid_4">
            <div class="view">
                <img src="img/12.jpg" alt="pic"/>
                <div class="mask">
                    <h2>To Be Continued</h2>
                    <p>a sample description.</p>
                    <a href="courses/index.html" class="info">Learn More</a>
                </div>
            </div>
        </div>

    </div>
    <!-- end .container -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/scripts.js"></script>



    <!-- <div class="search">
        <img src="img/search.png">
    </div> -->

    <div>
        <nav class="botbar">
            <ul class="menu2">
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>


	<footer>

		<p>&copy; Company Name 2018</p>

	</footer>

	<br class="clear">

	</main>


    <div class="backtotop">
       <img id="gotop" src="img/backtotopicon.png" width="50%" height="50%">
    </div>


    <script
      src="http://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/plugins/ScrollToPlugin.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#gotop').click(function(){
                TweenLite.to(window, 0.5, {scrollTo:0});
            });
        });

    </script>



</body>


</html>
