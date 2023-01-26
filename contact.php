<?php
require_once 'header.php';
?>
<div class="mapouter">
  <div class="gmap_canvas">
  
    <iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.01431253889!2d28.80474150401859!3d41.06882801763059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa5835bb04a0d%3A0x3e11a81c505d6f00!2sSANAT%20MAKINA!5e0!3m2!1str!2str!4v1674691993845!5m2!1str!2str" 
      frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com/"></a>
  </div>
  <style>
    .mapouter {
      position: relative;
      text-align: right;
      height: 350px;
      width: 100%;
    }

    .gmap_canvas {
      overflow: hidden;
      background: none !important;
      height: 350px;
      width: 100%;
    }
  </style>
</div>
<section class="contact-section bg-grey padding">
  <div class="dots"></div>
  <div class="container">
    <div class="contact-wrap d-flex align-items-center row">
      <div class="col-md-6 padding-15">
        <div class="contact-info">
          <h2>Bizimle iletişime geçin & <br />Bir mesaj kadar yakınız!</h2>
          <p>
            İhtiyacınız olan çözüme son bir adım kaldı. Entegre dolum tesisleri, 
            aydınlatma ve su pompalarında sektör öncüsüyüz.
          </p>
          <h3>Ataturk Bulvarı,<br />Beyaz Tower, D:Kat:6 No:90 <br>Başakşehir/İstanbul</h3>
          <h4>
            <span>Email:</span> info@sanatmakina.com <br />
            <span>Telefon:</span> +90 212 671 83 40 <br />
            <span>Fax:</span> +90 212 671 83 40
          </h4>
        </div>
      </div>
      <div class="col-md-6 padding-15">
        <div class="contact-form">
          <form action="http://html.dynamiclayers.net/at/indico/contact.php" method="post" id="ajax_form" class="form-horizontal">
            <div class="form-group colum-row row">
              <div class="col-sm-6">
                <input type="text" id="name" name="name" class="form-control" placeholder="Firma" required />
              </div>
              <div class="col-sm-6">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Mesaj" required></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <button id="submit" class="default-btn" type="submit">
                  Gönder
                </button>
              </div>
            </div>
            <div id="form-messages" class="alert" role="alert"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require_once 'footer.php';
?>