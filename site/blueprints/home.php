// /site/blueprints/home.php
<?php if(!defined('KIRBY')) exit ?>

title: Home
pages: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
    size:  large
  newsletter:
    label:
      en: Newsletter text
      fr: Texte newsletter
    type: text
