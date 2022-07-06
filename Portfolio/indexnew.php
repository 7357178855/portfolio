  <?php
 //   session_start();

 //   if(!isset($_SESSION['name'])){
  //    header('location:./indexnew.php');
 //   }

  //  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Portfolio</title>


  <!-- css files start -->
    <link rel="stylesheet" href="styles/form.css" />
    <link rel="stylesheet" href="styles/landing.css" />
    <link rel="stylesheet" href="styles/talent.css">
    <link rel="stylesheet" href="styles/skills.css">
    <link rel="stylesheet" href="styles/about.css">
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="styles/footer.css">
  <!-- css files end  -->

  <!-- font style starts -->
    <link
      href="https://fonts.googleapis.com/css2?family=El+Messiri&family=M+PLUS+Rounded+1c&family=Montserrat+Alternates&display=swap"
      rel="stylesheet">
  <!-- font style ends -->


  <!-- nav start -->
    <link rel="stylesheet" href="styles/nav.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
  <!-- nav end -->
</head>

<body>
  <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Portfolio</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link active" href="indexnew.php"><i class="fas fa-tachometer-alt"></i>HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php"><i class="far fa-address-book"></i>REGISTER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tools.php"><i class="far fa-clone"></i>Components</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php"><i class="far fa-copy"></i>DASHBOARD</a>
                </li>
            </ul>
        </div>
  </nav>


  <div class="landing">
    <div class="landingcontent">
      <div>
        <h1>welcome to my portfolio</h1>
      </div>
      <div class="welcomedetails">
        <li>This is my portfolio</li>
        <li>welcome to my portfolio. hope you love it.</li>
        <li>thank you</li>
      </div>
    </div>
    <div class="landingphoto">
      <div class="photo"><img src="img/pf1.jpg" width="100%"  alt=""></div>
    </div>
  </div>

  <div class="profile">
    <div class="coverprofile">
      <img src="img/pj.jpg" width="100%" alt="">
    </div>
    <div class="mainprofile">  
       <img src="img/ph.jpg" width="100%" alt="">
    </div>
  </div>

  <div class="skill">
    <div class="skillheading">
      <h1>These are some of my skills</h1>
    </div>
    <div class="skills">
      <div class="skillh">
        <h1>Skills/tools/technologies</h1>
      </div>
      <div class="allskills">
        <li>HTML</li>
        <li>CSS</li>
        <li>JavaScript</li>
        <li>PHP</li>
        <li>React</li>
        <li>Node JS</li>
        <li>My SQL</li>
        <li>C</li>
        <li>C++</li>
        <li>Photoshop</li>
        <li>Canva</li>
        <li>React Native</li>
        <li>VS Code</li>
        <li>Git</li>
        <li>Microsoft Office</li>
        <li>Google docs/slides</li>
      </div>
      <div class="more"><button>Show more</button></div>
    </div>
  </div>


  <div class="talent">
    <div class="talentheading">
      <h1>These are some of my talents</h1>
    </div>
    <div class="talents">
      <div class="talenth">
        <h1>Talents/Interpersonal skills</h1>
      </div>
      <div class="alltalents">
        <li>Communication</li>
        <li>Time Management</li>
        <li>Leadership</li>
        <li>Decision-Making</li>
        <li>Teamwork</li>
        <li>Problem Solving</li>
        <li>Critical Thinking</li>
        <li>Organizational skills</li>
        <li>Active Listening</li>
        <li>Patience</li>
      </div>
      <div class="more"><button>Show more</button></div>
    </div>
  </div>


  <div class="aboutwrap">
    <div class="about">
      <div class="aboutcontent">
        <!-- <h1>Hello, this is <?php echo $_SESSION['name'];?></h1> -->
        <h1>Hello, this is Pratush</h1>
        <p>I am a Third-Year Undergraduate student pursuing my major in Civil Engineering at IIT Kharagpur. <br>
        <br> I have several intrigues and hobbies to practice and develop my skills, such as Case Studies, Competitive Programming, Web Development, Visual Designing, etc. I have a zealousness for innovation and love solving problems in ingenious ways. 
            <br><br> Looking forward to connecting. Reach out to me at <b style="color:blue; fontWeight:bold;">pratushtiwari011@kgpian.iitkgp.ac.in </b></p>
      </div>
      <div class="aboutphoto">
      <img src="img/ph.jpg" width="100%" alt="">
      </div>
    </div>
  </div><br>
  
  <div class="footer">
    <footer class="footer" style=" z-index: 10">
			<div class="row">
				<div class="footer-logo">

				  <p>Pratush Tiwari
					</p>
					<p>Kharagpur, West Bengal
					</p>
					<br>

					<div class="footer-icons">
						<a href="https://www.facebook.com/megalithkgp/?ref=br_rs" target="_blank"
							class="fa fa-facebook"></a>
						<a href="https://www.instagram.com/iitkgp.megalith" target="_blank" class="fa fa-instagram"></a>
						<a href="https://www.linkedin.com/company/megalith-iit-kharagpur/mycompany/" target="_blank"
							class="fa fa-linkedin"></a>
					</div>

				</div>
			
			</div>
		</footer>
  </div>
  
  <br>


  <!-- nav script starts -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
  <script src="scripts/nav.js"></script>
  
  <!-- nav script ends -->
  <script src="scripts/app.js"></script>


</body>

</html>