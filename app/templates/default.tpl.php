<?php if(!defined('INCLUDED')) exit('This file cannot be opened directly'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $config['site_title']; ?></title>
    <!-- Bootstrap -->
    <?php echo $html->css('css/bootstrap.min.css'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $html->css('../css/styles.css'); ?>
    <?php echo $html->css('../css/responsive.css'); ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>

    <a href="#" class="btn_menu" id="btn_menu">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <nav class="menu" id="menu">
      <ul>
        <li><?php echo $html->link('Architectonical', 'architectonical'); ?></li>
        <li><?php echo $html->link('Interior Design', 'interior-design'); ?></li>
        <li><?php echo $html->link('Office Design', 'office-design'); ?></li>
        <li><?php echo $html->link('Retail Design', 'retail-design'); ?></li>
        <li><?php echo $html->link('Animations', 'animations'); ?></li>
        <li><?php echo $html->link('Technical Drawings', 'technical-drawings'); ?></li>
        <li><a href="#">About us</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <?php echo template_content(); ?>

    <section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="content-contact">
            <form class="clearfix">
              <div class="txt">
                <h2>Get in touch</h2>
              </div>
              <div class="input">
                <p><span>name</span>
                  <input type="text" name="name">
                </p>
                <p><span>email</span>
                  <input type="email" name="email">
                </p>
                <p><span>message</span>
                  <textarea name="message" id="message"></textarea>
                </p>
                <p>
                  <div class="g-recaptcha" data-sitekey="6LfBAmAUAAAAAJrZC1HaKcnIVh0-f-WxzCrpSbcv"></div>
                </p>
                <button class="btn">Send</button>
                <div class="messgmodal">
                  <div class="spinner"></div>
                </div>
              </div>
              <div class="social">
                <ul>
                  <li><a href="">LinkedIn</a></li>
                  <li><a href="">Facebook</a></li>
                  <li><a href="">Behance</a></li>
                  <li><a href="">Email</a></li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo $html->js('../js/bootstrap.min.js'); ?>
    <?php echo $html->js('../js/main.js'); ?>
  </body>
</html>






