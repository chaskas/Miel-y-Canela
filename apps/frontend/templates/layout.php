<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  
  <body>
    <div id="wrap">
      <div id="header">

        <div id="logo">
          <a href="<?php echo url_for('@home'); ?>" title="Miel y Canela">
            <span></span>
          </a>
        </div>

        <div id="navigation">
          <ul>
            <li <?php if($sf_context->getActionName()=='home' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/home'); ?>">Home</a></li>
            <li <?php if($sf_context->getActionName()=='nosotros' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/nosotros'); ?>">Sobre nosotros</a></li>
            <li <?php if($sf_context->getActionName()=='productos' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/productos'); ?>">Productos</a></li>
            <li <?php if($sf_context->getActionName()=='promociones' && $sf_context->getModuleName()=='static') echo "class='active'"; ?>><a href="<?php echo url_for('static/promociones'); ?>">Promociones</a></li>
            <li class="last<?php if($sf_context->getActionName()=='dondeestamos' && $sf_context->getModuleName()=='static') echo ' active'; ?>"><a href="<?php echo url_for('static/dondeestamos'); ?>">¿D&oacute;nde estamos?</a></li>
          </ul>
        </div>

      </div>
      
      <div class="clear"></div>

      <div id="content">  
        <?php echo $sf_content ?>
      </div><!-- end: #content -->
      <div class="clear"></div>
    </div><!-- end: #wrap -->

    <div id="foot">
      <div class="in closed">

        <ul>
          <li class="fl">&copy; WebDevel 2011 <a href="http://www.webdevel.cl/" target="blank">www.webdevel.cl</a></li>
          <li class="fr">| <a href="<?php echo url_for('static/dondeestamos'); ?>">Donde estamos</a></li>
        </ul>
      </div> <!-- /.in --> 

      <div class="in formBox hidden"> 
        <div id="contact-form">	
          <form action="">
            <div class="column-left">	
              <div class="column-small">
                <label for="jmeno">Nombre completo</label>
                <input type="text" id="jmeno" />
              </div><!-- end: .column-small -->

              <!-- end: .column-small -->
              <div class="clear"></div>

              <div class="column-small">
                <label for="telefon">Tel&eacute;fono</label>
                <input type="text" id="telefon" />
              </div><!-- end: .column-small -->

              <div class="column-small2">
                <label for="email">E-mail</label>
                <input type="text" id="email" />
              </div><!-- end: .column-small -->
            </div><!-- end: .column-left -->

            <div class="column-big">
              <label for="zprava">Texto</label>
              <textarea id="zprava" rows="" cols=""></textarea><div class="clear"></div>
              <input type="submit" class="button" value="" />
            </div><!-- end: .column-big -->
          </form>
          <div class="clear"></div>
        </div><!-- end: #contact-form -->

        <div id="footer-links">
          <p id="copyright">&copy; WebDevel 2011 <a href="http://www.webdevel.cl/" target="blank">www.webdevel.cl</a></p>
          <p id="footer-nav">| <a href="<?php echo url_for('static/dondeestamos'); ?>">Donde estamos</a></p>
        </div><!-- end: #footer-links -->


      </div>
      <!-- /.in -->
      <a href="#" id="foot-close"><span class="breezy"></span></a> 
    </div> <!-- /#foot -->
  </body>
</html>