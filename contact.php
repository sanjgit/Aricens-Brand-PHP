<?php include 'header.php';?>
	<style>
.error {
  color: red;
}
</style>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/shaking-hands-3753457_1280.jpg)">
    	<div class="auto-container">
			<div class="content">
				<h1>Contact Us </h1>
				<ul class="page-breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li>Pages</li>
					<li>Contact Us</li>
				</ul>
			</div>
        </div>
    </section>
    <!--End Page Title-->
	

<!-- Contact Page Section -->
	<section class="contact-page-section">
		
		<div class="auto-container">
			<div class="inner-container">
				<h2>Contact our support guys or make appointment <br> with <span>our consultan</span></h2>
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-7 col-md-12 col-sm-12">
						<div class="inner-column">
							<div class="text">Please contact us using the information below. For additional information on our management consulting services, please visit the appropriate page on our site.</div>
							<ul class="list-style-five">
								<li><span class="icon fa fa-building"></span> Derby United Kingdom</li>
								<!--li><span class="icon fa fa-fax"></span> +44 203 983 1323</li-->
								<li><span class="icon fa fa-envelope-o"></span>info@aricens.com</li>
							</ul>
						</div>
					</div>
					
					<!-- Form Column -->
					<div class="form-column col-lg-5 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<form id="myForm">
							    <div class="contact-form">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <span id="nameError" class="error"></span><br><br>

  <label for="contact">Contact Number:</label><br>
  <input type="text" id="contact" name="contact"><br>
  <span id="contactError" class="error"></span><br><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <span id="emailError" class="error"></span><br><br>

  <label for="message">Message:</label><br>
  <textarea id="message" name="message"></textarea><br>
  <span id="messageError" class="error"></span><br><br>

  <input type="submit" class="btn theme-btn" value="Submit">
  	</div>
</form>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		
		</div>
	</section>
	
	
<!-- Call To Action Two -->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/main.js"></script>




<script>
$(document).ready(function() {
  $("#myForm").submit(function(event) {
    event.preventDefault(); // Prevent default form submission

    // Reset error messages
    $(".error").text("");

    // Validation
    let name = $("#name").val();
    let contact = $("#contact").val();
    let email = $("#email").val();
    let message = $("#message").val();
    let isValid = true;

    if (name === "") {
      $("#nameError").text("Name is required");
      isValid = false;
    }

    if (contact === "") {
      $("#contactError").text("Contact number is required");
      isValid = false;
    } else if (!/^\d{10}$/.test(contact)) {
      $("#contactError").text("Invalid contact number. Must be 10 digits.");
      isValid = false;
    }

    if (email === "") {
      $("#emailError").text("Email is required");
      isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      $("#emailError").text("Invalid email format");
      isValid = false;
    }

    if (message === "") {
      $("#messageError").text("Message is required");
      isValid = false;
    }
    
    alert(isValid);

    if (isValid) {
      // AJAX submission
      $.ajax({
        type: "POST",
        url: "your_server_script.php", // Replace with your server-side script
        data: {
          name: name,
          contact: contact,
          email: email,
          message: message
        },
        success: function(response) {
          alert(response); // Display server response
          $("#myForm")[0].reset(); //reset the form.
        },
        error: function(xhr, status, error) {
          alert("An error occurred: " + error);
        }
      });
    }
  });
});
</script>


	<!-- End Call To Action Two -->
<?php include 'footer.php';?>