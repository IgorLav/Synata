<?php
    $sent = $_POST['sent'];
    $send = $_POST['send'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];

if (array_key_exists('send', $_POST)) {
   $to = 'mazurenko.ihor@gmail.com';
   $subject = 'Request a Demo';
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Full Name: ".$_POST['name']."\r\nEmail: ".$_POST['email']."\r\nCompany: ".$_POST['company']."\r\n\r\nNumbers of employees: ".$_POST['employees']."\r\nPhone number: ".$_POST['tell']."\r\nA good time to contact: ".$_POST['contact-time']."\r\nWhich are you interested in pick list: ".$_POST['pick-list']."\r\nChoose all that apply: ".$_POST['synata-search']."   ".$_POST['embed']."   ".$_POST['integration']."   ".$_POST['box-search']."   ".$_POST['sforce-search']."\r\nComment/Question: ".$_POST['comment'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Request a Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1170, user-scalable=yes">
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic&amp;subset=latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>

<body class="request-page">
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <nav class="navbar">
                    <div class="main-logo">
                        <a href="index.html">
                            <img src="img/header/logo.png" alt="Synata">Synata
                        </a>
                    </div>

                    <div class="autorization">
                        <ul>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Sign up</a></li>
                        </ul>
                    </div>

                    <ul class="main-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="request-demo.php">Request a Demo</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>
                </nav>
            </div><!--/container-->
        </header>

        <div class="content">

<?php if ($send){ ?>
        
            <div class="jumbutron form-success">
                <div class="container">
                    <h1>Thank you!</h1>
                    <img src="img/content/form/icon.png" alt="" width="183" height="163">
                    <p class="big-p">We’ll contact you shortly to schedule.</p>
                    <p>(In the meantime, <a href="#">check out our latest blog post!</a>)</p>
                    <a href="index.html" class="btn text-white">Home</a>
                </div>
            </div><!--/jumbutron-->
            
<?php } elseif ($sent){ ?>

            <section class="form-section" id="form-section">
                <div class="container">
                    <form action="" method="post">
                        <fieldset class="stage-2">
                            <input type="hidden" name="name" value='<?php echo "$name"; ?>'>
                            <input type="hidden" name="email" value='<?php echo "$email"; ?>'>
                            <input type="hidden" name="company" value='<?php echo "$company"; ?>'>
                            <ul>
                                <li>
                                    <label for="employees">Numbers of employees</label>
                                    <input type="number" id="employees" name="employees" min="0">
                                </li>
                                <li>
                                    <label for="tell">Phone number</label>
                                    <input type="tel" id="tell" name="tell">
                                </li>
                                <li>
                                    <label for="contact-time">When is a good time to contact you?</label>
                                    <input type="text" id="contact-time" name="contact-time">
                                </li>
                                <li>
                                    <label for="pick-list">Which are you interested in pick list?</label>
                                    <input type="text" id="pick-list" name="pick-list">
                                </li>
                                <li>
                                    <label>Choose all that apply</label>
                                    <dl id="options" class="dropdown"> 
      
                                        <dt>
                                            <a class="carret" href="#">
                                              <span class="hida">Select</span>    
                                              <p class="multiSel"></p>
                                            </a>
                                        </dt>
                                      
                                        <dd>
                                            <div class="mutliSelect">
                                                <ul>
                                                    <li>
                                                        <div class="checkbox inline">
                                                            <input type="checkbox" name="synata-search" id="synata-search" value="Synata Search">
                                                            <label for="synata-search">Synata Search</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox inline">
                                                            <input type="checkbox" name="embed" id="embed" value="Embed">
                                                            <label for="embed">Embed</label></li>
                                                    <li>
                                                        <div class="checkbox inline">
                                                            <input type="checkbox" name="integration" id="integration" value="Integration"> 
                                                            <label for="integration">Integration</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox inline">
                                                            <input type="checkbox" name="box-search" id="box-search" value="Box Search" >
                                                            <label for="box-search">Box Search</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox inline">
                                                            <input type="checkbox" name="sforce-search" id="sforce-searc" value="Salesforce Search">
                                                            <label for="sforce-searc">Salesforce Search</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </li>
                                <li>
                                    <label for="comment">Comment or Question</label>
                                    <textarea name="comment" id="comment"></textarea>
                                </li>
                                <li class="last">
                                    <input class="btn text-white" name="send" id="submit" type="submit" value="Send">
                                </li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </section>

<?php } else { ?>

            <div class="jumbutron">
                <div class="container">
                    <img src="img/content/form/ilustr.png" alt="" width="514" height="262">
                    <h1>Want to see what <strong>Synata</strong> could do for your team?</h1>
                    <p>To see a personalized demo or to get a custom price quote, please fill out a form below</p>
                </div>
            </div><!--/jumbutron-->
            <section class="form-section">
                <div class="container">
                    <form action="" method="post">
                        <fieldset class="stage-1">
                            <ul>
                                <li><input type="text" name="name" placeholder="Full Name" required></li>
                                <li><input type="email" name="email" placeholder="Email" required></li>
                                <li><input type="text" name="company" placeholder="Company"></li>
                                <li><input type="submit" name="sent" class="btn text -white" value="Next"></li>
                            </ul>
                        </fieldset>
                    </form>
                </div>
            </section>

<?php } ?>

        </div><!--/content-->
    </div>

    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-logo">
                    <a href="index.html">
                        <img src="img/header/logo.png" alt="Synata">Synata
                    </a>
                </div>

                <div class="footer-col col-adds">
                    <h3>Synata</h3>
                    <p>620 Folsom Street, Suite 100<br>
                        San Francisco, CA, 94107</p>
                </div>

                <div class="footer-col col-contacts">
                    <h3>Sales</h3>
                    <ul>
                        <li>(415) 680.1120 x701</li>
                        <li><a href="mailto: sales@synata.com">sales@synata.com</a></li>
                        <li><a href="mailto: info@synata.com">info@synata.com</a></li>
                    </ul>
                </div>

                <div class="footer-col col-emails">
                    <h3>Other Inquiries</h3>
                    <ul>
                        <li><a href="mailto: jobs@synata.com">jobs@synata.com</a></li>
                        <li><a href="mailto: pr@synata.com">pr@synata.com</a></li>
                        <li><a href="mailto: support@synata.com">support@synata.com</a></li>
                    </ul>
                </div>
            </div>
        </div><!--end FOOTER-TOP-->

        <div class="footer-bottom">
            <div class="container">
                <span class="copy">&copy; Synata 2015</span>

                <ul class="social-list">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-angellist"></i></a>
                    </li>
                </ul>

                <nav class="footer-nav">
                    <ul>
                        <li>
                            <a href="#">Synata Blog</a>
                        </li>
                        <li>
                            <a href="#">Terms of Service</a>
                        </li>
                        <li>
                            <a href="#">Privacy &amp; Security</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!--end FOOTER-BOTTOM-->
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/commonJs.js"></script>
</body>
</html>