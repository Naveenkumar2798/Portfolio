<?php include './contact_mail.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="container-fluid p-0 m-0 pb-5">
      <div class="container-fluid nav-divition">
        <div class="container" style="max-width: 1200px; padding-top: 10px">
          <div class="d-flex align-items-center justify-content-between" style="height: 72px">
            <div id="menu-icon" class="menu-icon">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <div class="signature-container">
              <svg class="signature-static" viewBox="0 0 120 60">
                <path d="M15,48 Q25,50 38,30 Q44,52 56,32 Q70,20 32,15 Q84,54 65,28 Q50,50 70,28 Q85,45 80,20 Q10,5 95,5 L85,28" />
              </svg>

              <svg class="signature-animated" viewBox="0 0 120 60">
                <path d="M15,48 Q25,50 38,30 Q44,52 56,32 Q70,20 32,15 Q84,54 65,28 Q50,50 70,28 Q85,45 80,20 Q10,5 95,5 L85,28" />
              </svg>
            </div>

            <div class="resume-btn-container">
              <a href="./assets/Naveenkumar_Cv.pdf" class="resume-btn">Resume</a>
              <a href="./assets/Naveenkumar_Cv.pdf" class="resume-btn-small" title="Resume"
                ><i class="bi bi-download"></i>
                <span class="custom-tooltip">Resume</span>
              </a>
            </div>

            <nav id="menu" class="menu d-none flex-column">
              <a href="index.php">Home</a>
              <a href="about.php">About</a>
              <a href="project.php" class="active">Projects</a>
              <a href="contact.php">Contact</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 110px; text-align: center">
        <h2 class="aboutUs-page-hero-text"><span>P</span><span>R</span><span>O</span><span>J</span><span>E</span><span>C</span><span>T</span><span>S</span></h2>
        <div class="diamond"><i class="fa-solid fa-fire"></i></div>
      </div>
      <div class="container" style="margin-top: 110px">
        <div class="container" style="max-width: 1000px">
          <div class="row g-5">
            <div class="col-md-6">
              <a href="https://hanvith.com/" target="_blank" class="card custom-card text-decoration-none position-relative overflow-hidden">
                <span class="project-number">01</span>
                <img src="./assets/hanvith_technologies.png" class="logo-img" alt="Hanvith_technologies_banner" />
                <span class="project-title">Hanvith Technologies</span>
              </a>
            </div>
            <div class="col-md-6">
              <a href="https://hanvithjobs.com/" target="_blank" class="card custom-card text-decoration-none position-relative overflow-hidden">
                <img src="./assets/hanvith_jobs.png" class="logo-img" alt="Hanvith_jobs_banner" />
                <span class="project-title">Hanvith Jobs</span>
              </a>
            </div>
            <div class="col-md-6">
              <a href="https://sannedhanhomes.com/" target="_blank" class="card custom-card text-decoration-none position-relative overflow-hidden">
                <img src="./assets/sannedhan.png" class="logo-img" alt="sannedhanhomes" />
                <span class="project-title">Sannedhan Homes</span>
              </a>
            </div>
            <div class="col-md-6">
              <a href="https://svlogisticscovai.com/" target="_blank" class="card custom-card text-decoration-none position-relative overflow-hidden">
                <img src="./assets/svlogistics.jpg" class="logo-img" alt="SV Logistics" />
                <span class="project-title">SV Logistics</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="container" style="margin-top: 110px">
        <div class="container mt-5" style="max-width: 1000px">
<<<<<<< HEAD:project.php
          <a href="contact.php" class="header d-flex align-items-center text-decoration-none" tabindex="0">
=======
          <a href="contact.html" class="header d-flex align-items-center text-decoration-none" tabindex="0">
>>>>>>> 12a94a6af1f2eed0f83ef88e10cf7484ed4d4ae6:project.html
            <p>CONTACT</p>
            <hr class="flex-grow-1" />
            <span class="highlight-bar">
              <span class="arrow-head top"></span>
              <span class="arrow-head bottom"></span>
            </span>
          </a>
          <div class="row mt-4 gx-5">
            <div class="col-md-6">
              <span class="contact-title">Looking to start a project or you need consultation? Feel free to contact me.</span>
              <span class="contact-location"> Coimbatore,TN,INDIA </span>
              <a href="mailto:>Naveenarjun.webdesigner@gmail.com" class="contact-email">Naveenarjun.webdesigner@gmail.com</a>
              <div class="mt-4">
                <a href="https://www.linkedin.com/in/naveenarjunwebdesigner" class="contact-link mt-4" target="_blank">Linkdin <i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/Naveenkumar2798?tab=repositories" class="contact-link ms-3" target="_blank">Github <i class="bi bi-github"></i></a>
                <a href="https://wa.me/919003701577?text=Hello%20I%20would%20like%20to%20know%20more" target="_blank" class="contact-link ms-3"> WhatsApp <i class="bi bi-whatsapp"></i> </a>
              </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
              <form class="contact-form" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-6 col-md-6"><input type="text" placeholder="Naveen Kumar" name="name" required class="w-100" /></div>
                  <div class="col-6 col-md-6"><input type="email" placeholder="naveen@gmail.com" name="email" required class="w-100" /></div>
                </div>
                <div class="row">
                  <div class="col-12 col-md-12"><textarea placeholder="Message..." name="message" required class="mt-3 w-100" rows="4"></textarea></div>
                </div>
                <button type="submit" name="contact" class="send w-100">Send</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="./js/script.js"></script>
</html>
