<?php snippet('head') ?>
<?php snippet('menu') ?>


<div class="container bmt">
  <img class="img-responsive" style="width:100%" width="640px" src="http://maps.googleapis.com/maps/api/staticmap?center=2275+boul+Saint-Joseph+E,+Montreal,+QC&zoom=15&scale=2&size=640x180&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:0xffff00%7Clabel:%7C2275+boul+Saint-Joseph+E,+Montreal,+QC&key=AIzaSyBRyCf8uEuub9lPQV98G_sI1Qkn7EwlPlg" alt="Google Map of 2275 boul Saint-Joseph E, Montreal, QC">
    <div class="row">
        <div class="col-sm-7 col-sm-offset-1">
            <h3><?php echo $page->title() ?></h3>

            <h3><?php echo l::get('contact') ?></h3>
            <?php echo $page->text()->kirbytext() ?>

            <form role="form" method="POST" action="http://formspree.io/boygeorge@technoculture.club">
                <div class="form-group">
                  <label for="name"><?php echo $page->name() ?></label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label for="email"><?php echo $page->themail() ?></label>
                  <input type="email" class="form-control" name="_replyto">
                </div>
                <div class="form-group">
                  <label for="subject"><?php echo $page->subject() ?></label>
                  <input type="sujet" class="form-control" name="_subject">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" rows="3"></textarea>
                </div>
                <input type="hidden" name="_next" value="http://technoculture.club/" />
                <label>
                <input type="submit" name="submit" class="btn btn-theme" value="<?php echo l::get('submit') ?>"/>
            </form>
        </div>
        <div class="col-sm-3">
            <h3><?php echo $page->sideTitle() ?></h3>

            <p>Techno Culture Club<br>
            2275 boul Saint-Joseph E #1.120<br>
            Montréal, QC</p>

            <p><strong>Email</strong><br>
            <a href="mailto:boygeorge@technoculture.club" target="_blank"><?php echo $page->email() ?></a></p>

        </div>
    </div>
</div>

<?php snippet('footer') ?>
