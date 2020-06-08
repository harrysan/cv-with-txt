<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"
                ><span class="d-block d-lg-none">Harry Santoso</span><span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/profile.jpg" alt="" /></span></a
            ><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#blogyutub">Blog & Youtube</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">Harry <span class="text-primary">Santoso</span></h1>
                    <?php
                      $yourArray = file("assets/txt/address_email.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],2);
                        $i++;
                      }
                    ?>
                    <div class="subheading mb-5"><?php echo $array[0]; ?> <a href="mailto:<?php echo $array[1] ?>"><?php echo $array[1]; ?></a></div>
                    <?php
                      $yourArray = file("assets/txt/desc1.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],1);
                        ?>
                          <p class="lead mb-5"><?php echo $array[0]; ?></p>
                    <?php
                      $i++;
                      }
                    ?>

                    <?php
                      $yourArray = file("assets/txt/desc2.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],1);
                        ?>
                        <p class="lead mb-5"><?php echo $array[0]; ?></p>
                    <?php
                        $i++;
                      }
                    ?>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/harry-santoso-814447141/"><i class="fab fa-linkedin-in"></i></a><a class="social-icon" href="https://github.com/harrysan"><i class="fab fa-github"></i></a><a class="social-icon" href="https://twitter.com/harrysantoso8"><i class="fab fa-twitter"></i></a><a class="social-icon" href="https://www.facebook.com/harry.santoso.560/"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>

                    <?php
                      $yourArray = file("assets/txt/experience.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],5);
                      ?>
                      <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                          <div class="flex-grow-1">
                              <h3 class="mb-0"><?php echo $array[0]. " - " .$array[1]; ?></h3>
                              <div class="subheading mb-3"><?php echo $array[2]; ?></div>
                              <p><?php echo $array[4]; ?></p>
                          </div>
                          <div class="flex-shrink-0"><span class="text-primary"><?php echo $array[3]; ?></span></div>
                      </div>
                    <?php
                        $i++;
                      }
                    ?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>

                    <?php
                      $yourArray = file("assets/txt/education.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],5);
                      ?>
                      <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                          <div class="flex-grow-1">
                              <h3 class="mb-0"><?php echo $array[0]; ?></h3>
                              <div class="subheading mb-3"><?php echo $array[1]; ?></div>
                              <div><?php echo $array[3]; ?></div>
                              <p><?php echo $array[4]; ?></p>
                          </div>
                          <div class="flex-shrink-0"><span class="text-primary"><?php echo $array[2]; ?></span></div>
                      </div>
                    <?php
                        $i++;
                      }
                    ?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">

                      <?php
                        $yourArray = file("assets/txt/prog_language.txt", FILE_IGNORE_NEW_LINES);
                        $i = 0;
                        foreach ($yourArray as $line){
                          $array = explode(',', $yourArray[$i],1);
                        ?>
                        <li class="list-inline-item"><i class="fab <?php echo $array[0]; ?>"></i></li>
                      <?php
                          $i++;
                        }
                      ?>

                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">

                      <?php
                        $yourArray = file("assets/txt/workflow.txt", FILE_IGNORE_NEW_LINES);
                        $i = 0;
                        foreach ($yourArray as $line){
                          $array = explode(',', $yourArray[$i],1);
                        ?>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span><?php echo $array[0]; ?>
                        </li>
                      <?php
                          $i++;
                        }
                      ?>

                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>

                    <?php
                      $yourArray = file("assets/txt/interests.txt", FILE_IGNORE_NEW_LINES);
                      $i = 0;
                      foreach ($yourArray as $line){
                        $array = explode(',', $yourArray[$i],1);
                      ?>
                      <li>
                          <p>
                            <?php echo $array[0]; ?>
                          </p>
                      </li>
                    <?php
                        $i++;
                      }
                    ?>

                </div>
            </section>
            <hr class="m-0" />
            <!--Blog Youtube-->
            <section class="resume-section" id="blogyutub">
                <div class="resume-section-content">
                    <h2 class="mb-5">Blog & Youtube</h2>
                    <ul class="fa-ul mb-0">

                      <?php
                        $yourArray = file("assets/txt/blog_youtube.txt", FILE_IGNORE_NEW_LINES);
                        $i = 0;
                        foreach ($yourArray as $line){
                          $array = explode(',', $yourArray[$i],1);
                        ?>
                            <li>
                                <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span><?php echo $array[0]; ?>
                            </li>
                      <?php
                          $i++;
                        }
                      ?>

                    </ul>
                </div>
            </section>
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">

                      <?php
                        $yourArray = file("assets/txt/awards.txt", FILE_IGNORE_NEW_LINES);
                        $i = 0;
                        foreach ($yourArray as $line){
                          $array = explode(',', $yourArray[$i],3);
                        ?>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span><?php echo $array[0]. " - ". $array[2]; ?>
                            <p>
                              <?php echo $array[1]; ?>
                            </p>
                        </li>
                      <?php
                          $i++;
                        }
                      ?>

                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
