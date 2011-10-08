<div class="in formBox hidden">
  <div id="contact-form">
    <form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST" autocomplete="off">
      <div class="column-left">
        <div class="column-small">
          <?php echo $form['name']->renderLabel('Nombre completo'); ?>
          <?php echo $form['name']->render(); ?>
        </div><!-- end: .column-small -->

        <!-- end: .column-small -->
        <div class="clear"></div>

        <div class="column-small">
          <?php echo $form['phone']->renderLabel(); ?>
          <?php echo $form['phone']->render(); ?>
        </div><!-- end: .column-small -->

        <div class="column-small2">
          <?php echo $form['email']->renderLabel(); ?>
          <?php echo $form['email']->render(); ?>
        </div><!-- end: .column-small -->
      </div><!-- end: .column-left -->

      <div class="column-big">
        <?php echo $form['message']->renderLabel(); ?>
        <?php echo $form['message']->render(); ?>
        <div class="clear"></div>
        <input type="submit" class="button" id="form-submit"/>
      </div><!-- end: .column-big -->
    </form>
    <div class="clear"></div>
  </div><!-- end: #contact-form -->
  <div id="sendmail"></div>
  <div id="footer-links">
    <p id="copyright">&copy; WebDevel 2011 <a href="http://www.webdevel.cl/" target="blank">www.webdevel.cl</a></p>
    <p id="footer-nav">| <a href="<?php echo url_for('static/dondeestamos'); ?>">Donde estamos</a></p>
  </div><!-- end: #footer-links -->


</div>