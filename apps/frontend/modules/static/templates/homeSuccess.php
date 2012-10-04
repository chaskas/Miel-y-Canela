<?php use_javascript('easySlider1.5.js'); ?>

<?php use_javascript('fancybox/jquery.fancybox-1.3.4.pack.js'); ?>
<?php use_javascript('fancybox/jquery.easing-1.3.pack.js'); ?>
<?php use_javascript('fancybox/jquery.mousewheel-3.0.4.pack.js'); ?>

<?php use_stylesheet('fancybox/jquery.fancybox-1.3.4.css'); ?>
<script type="text/javascript">
  $(document).ready(function(){
    $("#slider").easySlider({
      auto: true,
      continuous: true
    });
    $("a#hidden_link").fancybox().trigger('click');
  });
</script>
<div class="new-ref">
  <div id="banner">
  <div id="slider">
    <ul>
      <li>
        <img src="./images/slide1.jpg" width="860" height="260" alt="" />
        <div class="info">
          <div>
            <h1>Miel y Canela</h1>
            <h3>Panader&iacute;a y Pasteler&iacute;a</h3>
            <p>Para brindarle un mejor servicio,  atendemos todos los d&iacute;as de Lunes a Domingo de 09:00 a 21:30 horas. Los 365 d&iacute;as del año.</p>
          </div>
        </div>
      </li>
      <li>
        <img src="./images/slide2.jpg" width="860" height="260" alt="" />
        <div class="info">
          <div>
            <h1>Miel y Canela</h1>
            <h3>Panader&iacute;a y Pasteler&iacute;a</h3>
            <p>Pasteles de todo tipo; kuchen, dulces chilenos, brazo de reina, pie de lim&oacute;n, calzones rotos, pan holand&eacute;s, pizza, entre otros.</p>
          </div>
        </div>
      </li>
      <li>
        <img src="./images/slide3.jpg" width="860" height="260" alt="" />
        <div class="info">
          <div>
            <h1>Miel y Canela</h1>
            <h3>Panader&iacute;a y Pasteler&iacute;a</h3>
            <p>Contamos con pan amasado congelado, adem&aacute;s de hallullas,  marraquetas y pan Heidi  fresco durante todo el d&iacute;a.</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
  </div>
</div>   

<div id="cook">
  <h1>Bienvenidos a Miel y Canela</h1>
  <p>Miel y Canela, panader&iacute;a y pasteler&iacute;a, les da la m&aacute;s cordial bienvenida a su sitio web, donde encontrar&aacute; la informaci&oacute;n necesaria para disfrutar de nuestros servicios. A trav&eacute;s de &eacute;ste espacio, podr&aacute; conocer todos los productos elaborados por Miel y Canela, tener acceso a promociones y contactarnos.</p>

  <div class="block b-menu">
    <h4>Pan Amasado</h4>
    <p>Nos especializamos en la venta de pan amasado congelado. Nuestra receta permite una extensa duraci&oacute;n del producto y asegura un pan fresco y crujiente para deleitar en cualquier momento.</p>
  </div><!-- end: #block-menu -->                

  <div class="block b-graph">
    <h4>Pasteler&iacute;a</h4>
    <p>Ofrecemos deliciosa reposter&iacute;a elaborada con recetas caceras e internacionales. Realizamos dulces y pasteles a pedidos para particulares y eventos.</p>
  </div><!-- end: #block-graph -->      
  <div class="clear"></div>          
</div>

<a id="hidden_link" href="images/mielycanela2.jpg" style="display: none;"></a>
