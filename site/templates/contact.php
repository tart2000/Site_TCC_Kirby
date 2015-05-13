<?php snippet('head') ?>
<?php snippet('menu') ?>

<img src="<?php echo $site->url() ?>/assets/images/contact.png" class="img-responsive" style="width:100%">

<div class="container bmt">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-1">  
            <h3>Nous contacter</h3>
            <?php echo $page->text()->kirbytext() ?>

            <form role="form" method="POST" action="http://formspree.io/boygeorge@technoculture.club">
                <div class="form-group">
                  <label for="name">Votre nom</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="email">Adresse email</label>
                  <input type="email" class="form-control" name="_replyto">
                </div>
                <div class="form-group">
                  <label for="subject">Sujet</label>
                  <input type="sujet" class="form-control" name="_subject">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <input type="hidden" name="_next" value="http://technoculture.club/" />
                <label>
                <input type="submit" name="submit" class="btn btn-theme" value="Envoyer"/>
            </form>
        </div>
        <div class="col-sm-3">
            <h3>Nous rencontrer</h3>
            <p>Techno Culture Club<br> 
            7255 Alexandra #203<br> 
            Montréal, QC</p>

            <p><strong>Courriel</strong><br>
            <a href="mailto:boygeorge@technoculture.club" target="_blank">boygeorge [dedans le] technoculture.club</a></p>

            <p>Nous sommes hébergés dans les locaux de <a href="http://tinktank.club" target="_blank">TinkTank.</a></p>
        </div>
    </div>
</div>

<?php snippet('footer') ?>