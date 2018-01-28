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
    <?php echo $html->css('css/styles.css'); ?>
  </head>
  <body>

    <a href="#" class="btn_menu" id="btn_menu">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <nav class="menu" id="menu">
      <ul>
        <li><?php echo $html->link('projects', 'projects'); ?></li>
        <li><?php echo $html->link('animations', 'animations'); ?></li>
        <li><?php echo $html->link('retail-rendering', 'retail-rendering'); ?></li>
        <li><?php echo $html->link('interior-design', 'interior-design'); ?></li>
        <li><?php echo $html->link('revit', 'revit'); ?></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>


    <!-- This is the content placeholder, pages will be included here -->
    <?php echo template_content(); ?>


    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="content-contact">
            <form action="#" class="clearfix">
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
                <button class="btn">Send</button>
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
    <?php echo $html->js('js/bootstrap.min.js'); ?>
    <?php echo $html->js('js/main.js'); ?>
  </body>
</html>






