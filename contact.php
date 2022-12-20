<?php require_once("config/config.php");?>

<?php require_once("templates/front/header.php");?>


    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Nous contacter</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav nav-86px">
            <ul>
                <li class="nav-item"><a href="index.php" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Contact</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain contact-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">
  

            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Our Contact</h4>
                            <p class="frst-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Addess:</b>
                                        <p class="dsc">7563 St. Vicent Place, Glasgow, Greater<br>Newyork NH7689, UK</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Phone:</b>
                                        <p class="dsc">(800) 123 456789</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">Organic@example.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Store Open:</b>
                                        <p class="dsc">8am - 08pm, Mon - Sat</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form action="" method="post" >

                            <?php if (isset($_POST['submit'])) {
							
							$name = escape_string($_POST['name']);
                            $email = escape_string($_POST['email']);
                            $phone = escape_string($_POST['phone']);
                            $mes = escape_string($_POST['mes']);
							 

							$query = query("INSERT INTO contact (contact_name,contact_mail,contact_number,contact_content)
								VALUES('{$name}','{$email}','{$phone}','{$mes}' )");

							confirm($query);
                            $referer = $_SERVER['HTTP_REFERER'];
                            header("Location: $referer");
						} 




						?>
                                <p class="form-row">
                                    <input type="text" name="name" value="" placeholder="Your Name" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" value="" placeholder="Email Address" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="tel" name="phone" value="" placeholder="Phone Number" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <textarea name="mes" id="mes-1" cols="30" rows="9" placeholder="Leave Message"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit" name="submit">send message</button>
                                </p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php require_once("templates/front/footer.php");?>

   