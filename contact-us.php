<?php
    require_once __DIR__ . '/php/enquiries.php';
?>


<!DOCTYPE html>
<html lang="en" dir="ltr" id="HTMLTAG">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us | Netmatters</title>
        <link rel="shortcut icon" type="image/x-icon" href="icons/user2.png" />
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/slick-theme.css">
        <link rel="stylesheet" href="css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="css/custom-bootstrap.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

<?php
    require_once __DIR__ . '/php/modal.php';
    require_once __DIR__ . '/php/side-menu.php';
    require_once __DIR__ . '/php/nav.php';
    require_once __DIR__ . '/php/wrapper.php';
?>

<div class="main-section" id="MAIN-SECTION">

    <div class="main-page-header">

            <div class="main-Page-smallHeader">
                <div class="container">
                    <div class="heading-lists">
                        <ul>
                            <li>Home</li>
                            <li>Our Offices</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-Page-LargeHeader">
                <div class="container">
                    <h1>Our Offices</h1>
                </div>
            </div>

    </div>

    <div class="container">
        <div class="main-page-content">

<!-- Main Offices/Location -->
            <div class="office-collection">
                <div class="three-Offices">
                    <div class="office-card">
                        <div class="office-image">
                            <a href="#">
                                <img src="images/contact-page-images/cambridge.jpg" alt="Cambridge Office">
                            </a>
                        </div>
                        <div class="office-description">
                            <h2><a>Cambridge Office</a></h2>
                            <p>
                                Unit 1.28,
                                <br>
                                St John's Innovation Centre,
                                <br>
                                Cowley Road,
                                Milton,
                                <br>
                                Cambridge,
                                <br>
                                CB4 0WS
                            </p>
                            <div class="telephone-Number">
                                <a href="#">01223 37 57 72</a>
                            </div>
                            <div class="view-more-card">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="office-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1221.7232378719964!2d0.1529324091013206!3d52.23527359287696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8711469d7de59%3A0x4ad66f1b36a452da!2sNetmatters%20Cambridge!5e0!3m2!1sen!2suk!4v1627311040361!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="three-Offices">
                    <div class="office-card">
                        <div class="office-image">
                            <a href="#">
                                <img src="images/contact-page-images/wymondham.jpg" alt="Wymondham Office">
                            </a>
                        </div>
                        <div class="office-description">
                            <h2><a>Wymondham Office</a></h2>
                            <p>
                                Unit 15,
                                <br>
                                Penfold Drive,
                                <br>
                                Gateway 11 Business Park,
                                <br>
                                Wymondham, Norfolk,
                                <br>
                                NR18 0WZ
                            </p>
                            <div class="telephone-Number">
                                <a href="#">01603 70 40 20</a>
                            </div>
                            <div class="view-more-card">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="office-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d428.6217118727836!2d1.1368141330430446!3d52.57593045733102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9ddac8dba0b4b%3A0x9c77ffbfe7911dab!2sNetmatters!5e0!3m2!1sen!2suk!4v1627311116380!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="three-Offices">
                    <div class="office-card">
                        <div class="office-image">
                            <a href="#">
                                <img src="images/contact-page-images/yarmouth.jpg" alt="Great Yarmouth Office">
                            </a>
                        </div>
                        <div class="office-description">
                            <h2><a>Great Yarmouth Office</a></h2>
                            <p>
                                Suite F23,
                                <br>
                                Beacon Innovation Centre,
                                <br>
                                Beacon Park, Gorleston,
                                <br>
                                Great Yarmouth, Norfolk,
                                <br>
                                NR31 7RA
                            </p>
                            <div class="telephone-Number">
                                <a href="#">01493 60 32 04</a>
                            </div>
                            <div class="view-more-card">
                                <a href="#">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="office-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d606.4308611834912!2d1.7121321292678469!3d52.55652721410158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47da0593b311cec3%3A0x1cb3c1d4c0b340f6!2sNetmatters%20Great%20Yarmouth!5e0!3m2!1sen!2suk!4v1627311309270!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>

<!-- Main contact Form/Info -->
            <div class="contact-us-section">
                <div class="contact-us-information">
                    <div class="main-info">
                        <p>Email us on:</p>
                        <p><a href="mailto:sales@netmatters.com">sales@netmatters.com</a></p>
                        <p>business hours:</p>
                        <p>Monday - Friday 07:00 - 18:00</p>
                    </div>
                    <!-- add JS below -->
                    <div class="out-of-hours-block">
                        <div class="out-of-hours-info">
                            <div class="heading-and-arrow" id="HEADING-AND-ARROW">
                                <h4>Out Of Hours IT Support</h4>
                                <svg fill="#ffffff" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" class="svg-inline--fa fa-angle-down fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="16" height="20">
                                    <path fill="#333645" width="16px" height="16px" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z"></path>
                                </svg>
                            </div>
                            <div class="out-of-hours-description HIDE" id="OUT-OF-HOURS-DESCRIPTION">
                                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                                <p><strong>Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00 Sunday 10:00 - 18:00 </strong></p>
                                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-us-form-block" id="CONTACTFORMBLOCK">

                    <?php

                            if ($SUBMIT == 1) {
                                $HERE = "
                                    <div id='NOTIFICATION'; class='success'; style='color: #ffffff; background-color: #2ecc71; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 2px; font-size: 16px; display: flex; justify-content: space-between; align-items: center;'>
                                        Your message has been sent!
                                        <svg id='CLOSE'; width='14px'; height='14px'; aria-hidden='true'; focusable='false'; data-prefix='fas'; data-icon='times'; class='svg-inline--fa fa-times fa-w-11'; role='img'; xmlns='http://www.w3.org/2000/svg'; viewBox='0 0 352 512';>
                                            <path fill='currentColor'; d='M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z';></path>
                                        </svg>
                                    </div>";
                                echo "$HERE";
                            } else if ($SUBMIT == 2){
                                $HERE = "
                                    <div id='THISISERROR'; class='error'; style='color: #ffffff; background-color: #f62459; padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 2px; font-size: 16px; display: flex; justify-content: space-between; align-items: center;'>
                                        Your message hasn't been sent!
                                        <svg id='CLOSEBTN'; width='14px'; height='14px'; aria-hidden='true'; focusable='false'; data-prefix='fas'; data-icon='times'; class='svg-inline--fa fa-times fa-w-11'; role='img'; xmlns='http://www.w3.org/2000/svg'; viewBox='0 0 352 512';>
                                            <path fill='currentColor'; d='M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z';></path>
                                        </svg>
                                    </div>";
                                echo "$HERE";
                            }

                    ?>

                    <div class="contact-us-form-container">
                        <form class="contact-form" name="myForm" method="POST" id="CONTACTFORM">
                            <div class="row-inputs">
                                <div class="input-container-form">
                                    <label for="NAME">Your Name</label>
                                    <input class="form-input" type="text" name="fullName" id="NAME" required>
                                </div>

                                <div class="input-container-form">
                                    <label for="EMAIL">Your Email</label>
                                    <input class="form-input" type="email" name="Email" id="EMAIL" required>
                                </div>

                            </div>
                            <div class="row-inputs">
                                <div class="input-container-form">
                                    <label for="NUMBER">Your Telephone Number</label>
                                    <input class="form-input" type="number" name="phoneNumber" id="NUMBER" required>
                                </div>

                                <div class="input-container-form">
                                    <label for="SUBJECT">Subject</label>
                                    <input class="form-input" type="text" name="subject" id="SUBJECT" required>
                                </div>

                            </div>

                            <label for="MESSAGE">Message</label>
                            <textarea class="form-input" name="message" id="MESSAGE" rows="10" cols="50" required></textarea>

                            <div class="checkbox-container">
                                <div class="checkbox-outer">
                                    <div class="checkbox-1">
                                        <input type="checkbox" id="MARKETING" name="marketing" value="1">
                                        <label class="the-checkbox" for="MARKETING"><strong>Please tick this box if you wish to receive marketing information from us. Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.</strong>
                                        <span class="tick"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="button" id="SUBMITENQUIRY">Send Enquiry</button>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php
    require_once __DIR__ . '/php/sign-up.php';
    require_once __DIR__ . '/php/footer.php';
?>

<!-- JavaScript  -->
    <script src="dist/cookie-dist.js" charset="utf-8"></script>
    <script src="dist/stickyHeader-dist.js" charset="utf-8"></script>
    <script src="dist/sidebar-dist.js" charset="utf-8"></script>
    <script src="dist/contactPage-dist.js"></script>
    <script src="dist/form-validation-dist.js"></script>
    <!-- <script>
        if ( window.history.replaceState ) {
          window.history.replaceState( null, null, window.location.href );
        }
    </script> -->

</body>
</html>
