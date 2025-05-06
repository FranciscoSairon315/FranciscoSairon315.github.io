<!-- projects.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projects</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Menu -->
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

<!-- Hero Section -->
<section class="hero">
  <h1>My Projects</h1>
  <p>A collection of my work showcasing my skills and experience in web development,<br> mobile app development, and design.</p>
</section>

<!-- Filter Buttons -->
<div class="filters">
  <button class="filter-btn active" data-filter="all">All Projects</button>
  <button class="filter-btn" data-filter="web">Web Development</button>
  <button class="filter-btn" data-filter="database">Database</button>
  <button class="filter-btn" data-filter="visual">Visual Basic</button>
</div>

<!-- Projects Grid -->
<section class="projects-grid">
  <div class="project-card" data-category="database">
  <div class="project-image"><img src= Images/photo_d.jpeg></div>
    <h3>Automating Booking Management</h3>
    <p>An activity focused on managing bookings more efficiently through automation and reducing manual work using MySQL Triggers.</p>
    <div class="tags">
      <span>MySQL</span>
    </div>
    <a href="https://dyci.schoology.com/user/126151416/portfolios#/portfolios/11800532/items/36915726?_k=e7gchk" target="_blank">View Project →</a>
  </div>

  <div class="project-card" data-category="web">
  <div class="project-image"><img src= Images/photo_b.jpeg></div>
    <h3>Sample Contact Form</h3>
    <p>An interactive interface that allows users to enter and submit their contact information, commonly used for inquiries.</p>
    <div class="tags">
      <span>HTML</span><span>CSS</span><span>PHP</span><span>MySQL</span>
    </div>
    <a href="https://drive.google.com/drive/u/0/folders/1eQnFUEgc4tNvAOVQJYESaWvPrOtVPjPN" target="_blank">View Project →</a>
  </div>

  <div class="project-card" data-category="database">
  <div class="project-image"><img src= Images/photo_a.jpeg></div>
    <h3>Full-Text Search</h3>
    <p>An activity that manages records by performing searches using Full-Text Search queries.</p>
    <div class="tags">
      <span>MySQL</span>
    </div>
    <a href="https://dyci.schoology.com/user/126151416/portfolios#/portfolios/11800532/items/36804868?_k=d4ztk2" target="_blank">View Project →</a>
  </div>

  <div class="project-card" data-category="web">
  <div class="project-image"><img src= Images/photo_f.jpeg></div>
    <h3>My Personal Website</h3>
    <p>A customized website that represents my identity and contains my personal background and information.</p>
    <div class="tags">
      <span>HTML</span><span>CSS</span><span>PHP</span><span>MySQL</span>
    </div>
    <a href="#">View Project →</a>
  </div>

  <div class="project-card" data-category="database">
    <div class="project-image"><img src= Images/photo_c.jpeg></div>
    <h3>TCL Command</h3>
    <p>An activity that manage the attendance of an employee using TCL Commands.</p>
    <div class="tags">
      <span>MySQL</span>
    </div>
    <a href="https://dyci.schoology.com/user/126151416/portfolios#/portfolios/11800532/items/36915723?_k=jrd6d7" target="_blank">View Project →</a>
  </div>

  <div class="project-card" data-category="visual">
  <div class="project-image"><img src= Images/photo_e.jpeg></div>
  <h3>Student Information Management</h3>
  <p>A complete visual system including managing student ID's, transactions and reports.</p>
  <div class="tags">
    <span>Visual Basic</span><span>MySQL</span><span>Crystal Reports</span>
  </div>
  <a href="https://github.com/FranciscoSairon315/StudentInfoManagement.git" target="_blank">View Project →</a>
</div>
</section>

<!-- GitHub CTA -->
<section class="github-section">
  <h2>Want to see more?</h2>
  <p>Check out my GitHub for more projects and code samples.</p>
  <a href="https://github.com/FranciscoSairon315" target="_blank">Visit My Github</a>
</section>
<script>
  const filterButtons = document.querySelectorAll('.filter-btn');
  const projectCards = document.querySelectorAll('.project-card');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('active'));
      // Add active to clicked one
      button.classList.add('active');

      const filter = button.getAttribute('data-filter');

      projectCards.forEach(card => {
        const category = card.getAttribute('data-category');
        if (filter === 'all' || category === filter) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });
</script>

<!-- Footer -->
<footer>
  <p>&copy; 2025 Sairon Seth Francisco. </p>
  <p>BSIT-2 PACED | DYBITFre223 | My Personal Website</p>
</footer>
</body>
</html>
