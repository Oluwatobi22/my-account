<html>
<?php
    include ('config.php');

    $firstname = $_POST['fname'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $area = $_POST['textarea'];
   
    
    if(isset($send)){
        $sql ="INSERT INTO registration(fname,email,sub,textarea) VALUES('$firstname','$email','$sub','$area')";
        $check = mysqli_query($conn,$sql);
        if($check){
            echo "Record submitted successful";
        }
        else{
            echo "submission failed";
    
        }
    }
        
?>
<head>
    <title>MY portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap4 file-->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <!--boxicon file-->
    <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css">
    <link type="text/css" rel="styleshet" href="styleporf/styleporf.css">
    <!--aos css slider-->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i">
    <script>
        var i = 0;
        function move(){
            if (i == 0) {
                i=1;
                var elem =document.getElementById("mm",);
                var width = 10;
                var id = setInterval(frame,3);
                function frame() {
                    if(width>=100){
                        clearInterval(id);
                        i=0;
                    }else{
                        width++
                        elem.style.width = width + "%";
                        elem.innerHTML =  width + "%";
                    }
                }
            }
        }
    </script>
</head>
<body onload="move()">
    <!--Navbar section-->
    <nav class="navbar navbar-expand-md navbar-light  bg-dark">
        <a href="#" class="navbar-brand text-white"><img src="my pictures/tt.png" width="80" height="auto"
                class="img-responsive img-fluid"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon bg-white text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#About" class="nav-link text-white">About</a>
                </li>
                <li class="nav-item">
                    <a href="#What I Do" class="nav-link text-white">What I Do</a>
                </li>
                <li class="nav-item ">
                    <a href="#Latest works" class="nav-link text-white">Latest works</a>
                </li>
                <li class="nav-item ">
                    <a href="#Testimonial" class="nav-link text-white">Testimonial</a>
                </li>
                <li class="nav-item Dropdown">
                    <a href="#Contact me" class="nav-link text-white">Contact me</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--end of the navigation bar-->
    <section class="section section1 py-5">
        <div class="container">
            <div class="row text-center ">
                <div class="col-lg-6 text-center mt-5 ">
                    <img src="my pictures/tobi.JPG" width="400" height="400" alt="penguins" title="penguins"
                        class="img-responsive rounded-circle img-fluid">
                </div>
                <div class="col-lg-6 order-md-first mt-5 ">
                    <p class="text-default mb-2 display-4">Hello I am a</p>
                    <h1 class="text-default text-uppercase display-5 fw-bold">Website Developer</h1>
                    <h2 class=" fw-bold display-4">Bakare Oluwatobi Emmanuel</h2>
                    <p class="mt-4 text-dark fw-bold display-5  fs-5 text-uppercase">I am a  professional website
                    designer,<br>I design portfolio,<br>E-commerce Website,<br>Business website,<br>Educational
                    website,<br> Online Hospital etc</p>
                    <a href="#portfolio" class=" btn btn-danger btn-lg px-3 mt-2">My work</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section2 secton3  my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  text-center">
                    <h2 class="fw-bold mb-5 display-3 text-success text-uppercase" id="About">About</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 align-items-center">
                    <h3 class="fst-4 mb-4">BAKARE OLUWATOBI EMMANUEL</h3>
                    <p> I am a professional Website Developer having several years of      experience in building responsive websites that is mobile friendly.<br>
                    <h3 class="text-decoration-underline">WHAT I OFFER</h3>
                    <ol type="">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Bootstrap3,4,5</li>
                        <li>PHP</li>
                        <li>Reponsive template</li>
                        <li>Pixel Design</li>
                        <li>Clone a website and customize any identical website professionally in html5,css3,bootstrap5,javascript.PHP</li>
                        <li>Complete website and customize it as per your requirements and needs.</li>
                        <li>Complete website with all pages in less and affordable prices.</li>
                        <li>Create a dynamic website page</li>
                    </ol>
                    </p>
                    <div class="row text-center text-uppercase my-3 ">
                        <div class="col-sm-4">
                            <h4 class="fs-1 fw-bold">90</h4>
                            <p class="text-muted">project completed</p>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="fs-1 fw-bold">78</h4>
                            <p class="text-muted">Happy clients</p>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="fs-1 fw-bold">79</h4>
                            <p class="text-muted">Positive views</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="align-items-center">
                                <a href="my-pictures/Bakare Oluwatobi.E.docm" class="btn btn-danger text-white dd mx-3 mb-4">Download CV</a>
                            </div>
                            <div class="row">
                                <div class=" col-sm-4 col-md-4 ">
                                    <div class="social-links mt-2 ">
                                        <a href="#"><i class="fab fa-facebook text-dark me-3 fs-5"></i></a>
                                        <a href="#"><i class="fab fa-twitter text-dark me-3 fs-5"></i></a>
                                        <a href="#"><i class="fab fa-whatsappp text-dark me-3 fs-5"></i></a>
                                        <a href="#"><i class="fab fa-youtube text-dark me-3 fs-5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6 fw-bold">HTML</h3>
                        <div class="progress" style="height:19px;">
                            <div class="progress-bar bg-dark" id="mm" role="progress-bar" style="width: 10%;"
                                aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6 fw-bold">CSS</h3>
                        <div class="progress" style="height:19px;">
                            <div class="progress-bar bg-danger" id="mm2" role="progress-bar" style="width: 67%;"
                                aria-valuenow="90 " aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skil-item mb-4">
                        <h3 class="fs-6 fw-bold">JAVASCRIPT</h3>
                        <div class="progress" style="height:19px;">
                            <div class="progress-bar bg-primary" id="mm3" role="progress-bar" style="width:60%;"
                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                    <div class="skil-item mb-4">
                        <h3 class="fs-6 fw-bold">BOOTSTRAP</h3>
                        <div class="progress" style="height:19px;">
                            <div class="progress-bar bg-success" id="mm4" role="progress-bar" style="width: 85%;"
                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section4 section5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8  text-center">
                    <h2 class="fw-bold mb-5 display-4" id="What I Do">WHAT I DO</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-danger">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <diV class="row">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="col-md-3 shadow-md rounded rounded-pill bg-dark border py-5 border-danger  mb-4 mx-2 ">
                            <div class="icon my-3 text-danger fs-3 text-center ">
                                <i class="fas fa-code"></i>
                            </div>
                            <h4 class="fs-5 my-4 fw-bold text-uppercase text-center text-white">Web development</h4>
                            <p class=" fs-5 text-center text-uppercase text-white">front-end and backend</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3 shadow-md rounded-3 rounded rounded-pill py-5 bg-dark border mx-2 border-danger  text-center mb-4">
                            <div class="icon my-3 text-danger fs-3 text-center">
                                <i class="fas fa-image"></i>
                            </div>
                            <h4 class="fs-5 my-4 fw-bold text-uppercase text-center text-white">Creative Design</h4>
                            <p class="fs-5 text-center text-uppercase text-white">Expert in using graphics design
                                tools(coreldraw,photoshop and pixel-lab) </p>
                        </div>
                    </div>
                    <div class="carousel-item text-center">
                        <div class="col-md-3  shadow-md rounded-3 rounded py-5 rounded-pill bg-dark border border-danger text-center mb-4 ">
                            <div class="icon my-3 text-danger fs-3 text-center ">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <h4 class="fs-5 fw-bold my-4 text-uppercase text-center text-white">Networking</h4>
                            <p class=" fs-5  text-center text-uppercase text-white"> network media, router configuration,access
                                point,</p>
                        </div>
                    </div>
                </div>
            </diV>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </section>
    <section class="section6 section7">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-5 display-4 text-uppercase text-success" id="Latest works">Latest works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div  class="portfolio-item" >
                        <div data-aos="flip-right">
                            <img src="my pictures/chicken republic.png" class="img-thumbnail   w-100" data-aos="zoom-out" alt="" title="">
                        </div> 
                        <h4 class="text-capitalize fs-5 my-2 text-center">Team section</h4>
                        <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                        type="button" class="btn btn-danger">Live Demo</button></a></p>
                    </div>
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4">
                    <div class="portfolio-item ">
                        <img src="my pictures/newlife.jpg" class="img-thumbnail w-100" alt="" title="">
                        <h4 class="text-capitalize fs-5 my-2 text-center">Application landing page</h4>
                        <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                        type="button" class="btn btn-danger">Live Demo</button></a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="portfolio-item">
                                <img src="my pictures/done.jpg"  class="img-thumbnail w-100" alt="" title="">
                                <h4 class="text-capitalize fs-5 my-2 text-center">Creative team selection</h4>
                                <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                                    type="button" class="btn btn-danger">Live Demo</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-4 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <img src="my pictures/johnson.jpg" class="img-thumbnail w-100" alt="" title="">
                        <h4 class="text-capitalize fs-5 my-2 text-center">Team section</h4>
                        <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                                    type="button" class="btn btn-danger">Live Demo</button></a></p>
                    </div>
                </div>
                <div class=" col-sm-4 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <img src="my pictures/quiz.jpg" class="img-thumbnail w-100" alt="" title="">
                        <h4 class="text-capitalize fs-5 my-2 text-center">Team section</h4>
                        <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                                    type="button" class="btn btn-danger">Live Demo</button></a></p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="portfolio-item">
                        <img src="my pictures/maundry.jpg"  class="img-thumbnail w-100" alt="" title="">
                        <h4 class="text-capitalize fs-5 my-2 text-center">Team section</h4>
                        <p class="mb-4 text-center"><a href="#" class="text-danger text-decoration-none"><button
                                    type="button" class="btn btn-danger">Live Demo</button></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio end section-->
    <!--freelancer development available-->
    <section class="section8 section9 bg-danger py-5">
        <div class="container py-4">
            <div class="row justify-content-center ">
                <div class="  col-sm-8 col-md-8 col-lg-8 text-center">
                    <p class=" mt-5 text-light fs-5">Do you have any project ?</p>
                    <h3 class="fs-1 text-white mb-4">I am available for Freelancer Projects</h3>
                    <a href="#contact" class=" btn btn-outline-light btn-lg">Hire me</a>
                </div>
            </div>
        </div>
    </section>
    <!--freelancer development available end-->
    <!--testimonial section start-->
    <section class="section10 section11 bg-white py-5" id="tobi">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="fw-bold mb-5 display-4 text-uppercase text-success" id="Testimonial">Testimonial</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-7 p-4">
                    <!-- <div class="test"> -->
                    <div class="card  align-items-center">
                        <img src="my pictures/tobi.JPG" style="max: width 100px;" height="auto"
                            class="image-responsive img-fluid" alt="testimony" title="testimony">
                        <div class="card-body author shadow-sm px-3">
                            <h3 class="card-title display-4 pb-3 text-center">Bakare Oluwatobi</h3>
                            <p class="card-text text-muted mb-0  display-3 fw-bold text-center">CEO</p>
                        </div>
                    </div>
                    <div class="rating text-danger text-center mt-5w">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--end of testimonial-->
    <!--The beginning of contact-->
    <section class="section12 section13 my-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center align-items-center">
                    <h2 class="fw-bold mb-5 text-center  display-4 text-uppercase text-success" id="Contact me">Contact me</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="contact-item d-flex mb-3">
                        <div class="icon fs-5 text-danger">
                            <i class="bx bx-hot"></i>
                        </div>
                        <div class="text px-4">
                            <i class='bx bx-envelope'></i>
                            <h3 class="fs-5">Email</h3>
                            <p class="text-muted">bakareoluwatobi22@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="text px-4 ">
                            <i class='bx bxs-contact fs-6'></i>
                            <h3 class="fs-5">Phone</h3>
                            <p class="text-muted">+2347032437182</p>
                        </div>
                    </div>
                    <div class="contact-item d-flex mb-3">
                        <div class="text px-4">
                            <i class='bx bxs-envelope'></i>
                            <h3 class="fs-5">OFFICE ADDRESS</h3>
                            <p class="text-muted">GFH 14,ARALOPON EXPRESS ROAD ILESA, OSUN STATE</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 tobi">
                    <form class="form-group" method="POST">
                        <div class="row d-flex">
                            <input type="text" class=" form-control  mb-3  shadow-sm mb-4" placeholder="Your name" value="" name="fname" id="fname">
                            <div id="errorMessage"></div>
                            <input type="email" class="form-control form-control  mb-3  shadow-sm"  placeholder="Your email" value="" id="email" name="email">
                            <div id="error11"></div>                                
                            <input type="text" placeholder="Subject" class="form-control mb-3 shadow-sm" id="sub" value="" name="sub">
                            <div id="error33"></div>
                            <textarea  type="text"  id="area" row="8" class="form-control mb-3 shadow-sm" style="resize:none"; placeholder="Your Message" value="" name="textarea" id="area"></textarea>
                            <div id="error44"></div>
                            <button type="submit" class="btn btn-danger mt-5" style="margin:auto" name="send" onclick="show()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--contact section end-->
    <!--footer start-->
    <footer class="footer1 border-top py-4 shadow-lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <p class="m-0 text-default text-center">&copy; 2021 Tobi technology</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--aos sliding show-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        function show(){
            fnRegex = /^([\w])/;
            if (!fnRegex.test(fname.value))
            {
                fname.className = "form-control is-invalid border border-3 border-danger";
                errorMessage.innerText = "input the characters";
                errorMessage.style.color = "red";
            }
            else
            {
                errorMessage.className = " is-valid ";
                errorMessage.innerText = "";
            }
            emailRegex = /^[A-Za-z0-9+_.-]+@(.+)$/
            if(!emailRegex.test(email.value)){
                email.className = "form-control is-invalid border border-3 border-danger";
                error22.innerText = "Input the value of email";
                error22.style.color = "red";
            }
            else{
               errror22.className = "form-control is-valid";
               error22.innerText = ""; 
            }
            subRegex =  /^([a-z]{3,})$/
            if(!subRegex.test(sub.value)){
            sub.className = "form-control is-invalid border border-3 border-danger";
            error33.innerText = "Input a least 3 input";
            error33.style.color = "red";
            }
            else{
                error33.className = "is-valid";
                error33.innerText = "";
            }
            areaRegex = /^([\w]{2,})$/
            if(!areaRegex.test(area.value)){
                area.className = "form-control is-invalid border border-3 border-danger";
                error44.innerText = "Input a least 2 input";
                error44.style.color = "red";
            }
            else{
               error44.className = " is-valid";
               error44.innerText = ""; 
            }
        }
    </script>
    <script>
     $('.carousel').carousel({
        interval: 500
    })
    </script>
    <!--vendor files-->
    <script type="text/javascript" src="bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
    </script>
</body>
</html>