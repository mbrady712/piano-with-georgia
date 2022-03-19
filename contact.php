<?php 
if(isset($_POST['submit'])){
    $to = "pianowithgeorgia@gmail.com"; 
	$id = "Form Submission";
    $contact_name = $_POST['contact_name'];
    $student_name = $_POST['student_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$experience = $_POST['experience'];
    $subject = "Form Submission";
    $message = $_POST['message'];
	$text = "A potential client has filled out your contact form.
		\nContact Name: " . $contact_name . 
		"\nStudent Name: " . $student_name . 
		"\nPhone: " . $phone . 
		"\nEmail: " . $email .
		"\nStudent's Age (if adult - you can just write \"adult\"): " . $age . 
		"\nStudent's Experience (if any): " . $experience . 
		"\nTell me a little about yourself and/or what you would like to learn: " . $message;
    $headers = "From: " . $id;
    mail($to,$subject,$text,$headers);
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Piano With Georgia
        </title>
        <link rel="icon" type="image/x-icon" href="images/favicon1.ico">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="background-image: url(images/polonaise.png); background-attachment: fixed;">

        <div class="boverlay">
        </div>

        <nav class="navbar navbar-expand-sm fixed-top navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><img src="images/logo.png" class="logo" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item col">
                            <a href="index.html" class="text-dark text-decoration-none nav-link text-center">
                            Home</a>
                        </li>
                        <li class="nav-item col">
                            <a href="about.html" class=" text-dark text-decoration-none nav-link text-center">About</a>
                        </li>
                        <li class="nav-item col">
                            <a href="lessons.html" class="text-dark text-decoration-none nav-link text-center">Lessons</a>
                        </li>
                        <li class="nav-item col">
                            <a href="contact.php" class="text-decoration-none nav-link text-center" style="color: #f9ebe0">Contact</a>
                        </li>
                    </ul>   
                </div> 
            </div>
        </nav> 
        <div class="wrapper contwrap mt-5 mb-5 p-5">
            <h1 class="text-center">Contact Me</h1>
           <p class="fields">Fields marked with * are required</p>
            <form action="" method="post" class="row needs-validation" novalidate>
                <div class="col-lg-6">
                    Contact Name* <br><input type="text" name="contact_name" placeholder="Name" class="form-control" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter the contact's name
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    Student Name* <br><input type="text" name="student_name" placeholder="Name" class="form-control" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter the student's name
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    Phone* <br><input type="text" name="phone" placeholder="e.g. 999-999-9999" class="form-control" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your phone number
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    Email* <br><input type="text" name="email" placeholder="email@address.com" class="form-control" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter your email
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-6">
                    Student's age (if adult - you can just write "adult")* <br><input type="text" name="age" placeholder="Age" class="form-control" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter the student's age
                    </div>
                </div>
                <div class="col-lg-6">
                </div>
                <div class="col-lg-12">
                    Describe student's experience (if any)*
                    <br><textarea rows="5" name="experience" cols="30" placeholder="Experience" class="form-control" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please enter the student's experience
                    </div>
                </div>
                <div class="col-lg-12">
                    Tell me a little about yourself and/or what you would like to learn!* 
                    <br><textarea rows="5" name="message" cols="30" placeholder="Message" class="form-control" required></textarea>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                    <div class="invalid-feedback">
                        Please leave a message
                    </div>
                </div>
                <div class="col-2 mt-3">
                    <input type="submit" name="submit" value="SUBMIT" class="submit">
                </div>
            </form>
        </div>
        <footer class="container-fluid">
            <p class="foot">
                Teaching Location: Sunnyside, Katchina, or online
            </p>
            <p class="foot">
                pianowithgeorgia@gmail.com
            </p>
            <p class="foot">
                602-405-8935
            </p>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (function () {
                'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
                Array.prototype.slice.call(forms)
                    .forEach(function (form) {
                        form.addEventListener('submit', function (event) {
                            if (!form.checkValidity()) {
                                event.preventDefault()
                                event.stopPropagation()
                            }
                            else{
                                alert("Form successfully submitted!")
                            }
                            form.classList.add('was-validated')
                        }, false)
                    })
            })()
        </script>
    </body>
</html>