<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="../CSS/index.css">
    </head>
<body>

	        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white m-0">
                        <a class="navbar-brand" href="#">
                            <img src="../Images/Logo.png" width="70" height="70" alt="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php" style="color:rgb(20, 108, 148)">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="about us.html" style="color:rgb(20, 108, 148)">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../WebinarHome.php" style="color:rgb(20, 108, 148)">Webinar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../lOGIN\LOGIN\Login.php" style="color:rgb(20, 108, 148)">Join Now</a>
                                </li>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="container py-md-5">
            <div class="card shadow mb-3">                            
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-10 col-xl-9 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4 text-center"><span class="section-heading-upper">About Us</span></h2>
                                <p>There are a lot of Universities and students and staff face trouble maintaining student information. So, here we plan for SIS to solve this problem. using this system students can manage their academic and also go for a career path and webinars. Using this platform universities promote their courses among students The Student Information System's main objective is to manage, store, and track the student's associated data in a secure environment.</p>
                                <p class="mb-0">This SIS system is being developed for all undergraduate students all over the world. Also, for students, there will be coin-based functions for their free course enrollments. There are different 3 dashboards and interfaces for the user for their individual use.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>              
  
 <div class="container py-md-5">        
            <div class="card shadow mb-3">
                <div class="card-header py-3 text-center">
                    <p class="m-0 fw-bold">CONTACT US</p>
                </div>
                
                <form id="myForm">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col">
                                <div class="mb-3"><label class="form-label" for="Name"><strong>Name</strong></label><input class="form-control" type="text" id="name" placeholder="Enter Name" required="">
                                </div>
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="email"><strong>Email Address</strong></label></div><input class="form-control" type="email"  id="email" placeholder="Enter Email" required="">
                                </div>                                
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Message"><strong>Subject</strong></label></div><input class="form-control" id="subject" type="text" placeholder=" Enter Subject" required="">
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3"><label class="form-label" for="Message"><strong>Message</strong></label></div><textarea class="form-control" id="body" rows="5" placeholder="Type Message" required=""></textarea><br>
                                </div>
                            </div>                                              
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h4 class="sent-notification"></h4><br><br>
                                <div class="col text-center">                                
                                    <button class="Submit-Btn" type="button" onclick="sendEmail()" value="Send An Email">Submit</button>
                                </div>
                            </div>  
                        </div>   

                    </div>
                </form>
            </div>               
        </div>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>