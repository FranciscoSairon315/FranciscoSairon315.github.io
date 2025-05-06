<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
  <div class="navbar">
    <div class="logo">𝕾𝖆𝖎𝖗𝖔𝖓 𝕱.</div>
    <ul class="nav-links">
      <li><a href="Index.html">Home</a></li>
      <li><a href="Aboutme.php">About Me</a></li>
      <li><a href="Projects.php">Projects</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
  </div>
</header>
<div class="bio_c">
  <h2> Contact Me</h2>
  <p>Got a question or want to collaborate? I'd love to hear from you!</p>
</div>
<div class="contact-section">
  <!-- Left: Contact Info -->
<div class="contact-info-box">
  <h3>Contacts:</h3>
  <p><i class="fas fa-envelope"></i> Email: saironsethfrancisco@gmail.com</p>
  <p><i class="fas fa-phone"></i> Phone: (+63) 960-390-2189</p>
  <h3>Other Contacts:</h3>
  <div class="social-links">
    <p>
      <a href="https://www.facebook.com/share/1J71eGo5FH/" target="_blank">
        <i class="fab fa-facebook"></i><br><span>Facebook</span>
      </a>
    </p>
    <p>
      <a href="https://www.instagram.com/seth_frncsc?igsh=ZGo1YzN0amEzMnUw" target="_blank">
        <i class="fab fa-instagram"></i><br><span>Instagram</span>
      </a>
    </p>
    <p>
      <a href="https://github.com/FranciscoSairon315" target="_blank">
        <i class="fab fa-github"></i><br><span>GitHub</span>
      </a>
    </p>
  </div>
</div>
  <!-- Right: Contact Form -->
  <div class="contact-form-box">
    <form id="userForm">
      <label for="full_name">Your Name:</label>
      <input type="text" id="full_name" name="full_name" required>

      <label for="email">Email Address:</label>
      <input type="email" id="email" name="email" required>
      <p class="error-message" id="emailError">This email is already registered.</p>
       
      <label for="phone">Phone (11 digits):</label>
      <input type="text" id="phone" name="phone" pattern="\d{11}" title="The phone number
      must be exactly 11 digits" required>

      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="5" required></textarea>

      <button type="submit">Send Message</button>
    </form>
    <p class="success-message" id="successMsg">User added successfully!</p>
  </div>
</div>
<script>
  $(document).ready(function () {
  $('#userForm').submit(function (e) {
    e.preventDefault(); // Prevent default form submission
      $.ajax({
        url: 'process.php',
        type: 'POST',
        data: $('#userForm').serialize(),
      success: function (response) {
        if (response.includes("The email address is already in use.")) {
          $('#emailError').show().text(response);
        } else {
          $("#successMsg").fadeIn().delay(2000).fadeOut();
          $("#userForm")[0].reset(); // Clear form fields
          $('#emailError').hide();
        }
      },
      
      error: function () {
      alert("Error processing request.");
      }
      });
  });
  
  $('#email').on('input', function () {
  $('#emailError').hide();
  });
  });
</script>
<footer>
  <p>&copy; 2025 Sairon Seth Francisco. </p>
  <p>BSIT-2 PACED | DYBITFre223 | My Personal Website</p>
</footer>    
</body>
</html>
    