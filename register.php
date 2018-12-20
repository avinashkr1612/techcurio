<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="css/bulma.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/team.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- <meta http-equiv="refresh" content="3"> -->
</head>

<body>
  <div id="perspective" >
    <div id="container" class="p-container">
      <div class="header">
        <div class="content">
          <div class="container">
            <div class="hero">
              <div class="hero-body">
                <h1 class="title is-1 has-text-centered" style="font-family:Brush Script MT;color:#fff;">Register</h1>
              </div>
            </div>
            <div class="columns">
              <div class="column">

              </div>
              <div class="column is-narrow">
                <div class="hero is-light is-centered">
                  <div class="hero-body" style="max-width:400px;min-width:350px;">
					          <form method="POST" action="action.php" autocomplete="off"  enctype="multipart/form-data">
                    <div class="field">
                      <label class="label">Name</label>
                      <div class="control">
                        <input class="input" type="text" name="name">
                      </div>
                    </div><!--  field1 -->

                    <div class="field">
                      <label class="label">Email</label>
                      <div class="control has-icons-left has-icons-right">
                        <input class="input" type="email" name="email">
                      </div>
                    </div>


                    <div class="field">
                      <label class="label">Phone Number</label>
                      <div class="control">
                        <input class="input" type="text" name="phone">
                      </div>
                    </div>
					<div class="field">
                      <label class="label">Course</label>
                      <div class="control">
                        <div class="select">
                          <select name="class">
                            <option>--Select one--</option>
                            <option>M.B.A</option>
                            <option>B.C.A</option>
                            <option>B-TECH</option>
                            <option>M-TECH</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="field">
                      <label class="label">Year</label>
                      <div class="control">
                        <div class="select">
                          <select name="year">
                            <option>--Select one--</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="field">
                      <label class="label">College</label>
                      <div class="control">
                        <input class="input" type="text" name="college">
                      </div>
                    </div>

					<div class="field">
                      <label class="label">Password</label>
                      <div class="control">
                        <input class="input" type="password" name="passwd">
                      </div>
                    </div>

<!--                    <div class="field">
                      <label class="label">Payment</label>
                      <div class="control">
                        <div class="select">
                          <select name="pay">
                            <option>--Select one--</option>
                            <option>Pay Now via Paytm</option>
                            <option>Pay later</option>
                          </select>
                        </div>
                      </div>
                    </div>
-->
 <!--                  <div class="field">
                      <label class="label">Event</label>
                      <div class="control">
                        <input class="input" type="text" name="event">
                      </div>
                    </div>

					-->
                    <div class="field is-grouped">
                      <div class="control">
                        <input type="submit" class="button is-link" name="submit" value="submit">
                      </div>
                      <div class="control">
                        <button class="button is-text">Cancel</button>
                      </div>
                    </div>
				</form>
                  </div>
                </div>

              </div>
              <div class="column">

              </div>
            </div>

          </div>
        </div>
      </div><!-- header -->
    </div><!-- /container -->
    <nav id="outer-nav" class="outer-nav">
      <a href="index.html" class="icon-home">Home</a>
      <a href="events.html" class="icon-news">Events</a>
      <!-- <a href="workshop.html" class="icon-lock">Workshop</a> -->
      <a href="gallery.html" class="icon-image">Gallery</a>
      <a href="team.html" class="icon-lock">Team</a>
      <a href="schedule.html" class="icon-lock">Schedule</a>
      <a href="contactUs.html" class="icon-mail">Contact Us</a>
      <!-- <a href="hospitality.html" class="icon-mail">Hospitality</a> -->
    </nav>
  </div>
  <button type="button" id="menu-toggle" class="button is-warning is-large" name="button">&#9776;</button>
  <!-- <script src="js/TweenLite.min.js"></script> -->
  <!-- <script src="js/EasePack.min.js"></script> -->
  <!-- <script src="js/demo-1.js"></script> -->

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="js/jquery.hover3d.js" ></script>
  <script src="js/JavaScript_Main.js" ></script>

  <script type="text/javascript">
  $(".scrolldown").click(function() {
    $('html,body').animate({
      scrollTop: $(".about").offset().top},
      'slow');
    });

    $("#menu-toggle").click(function() {
      $('#perspective').addClass("perspective");
      $('.p-container').addClass("moveleft");
      $('#menu-toggle').addClass("hidden");
      $('#outer-nav').addClass("animate");
    });

    $("#container").click(function() {
      $('#container').removeClass("moveleft");
      $('#menu-toggle').removeClass("hidden");
      $('#outer-nav').removeClass("animate");
      setTimeout(function() {
        $('#perspective').delay("slow").removeClass("perspective");
      }, 400);
    });
    </script>
  </body>
  </html>
