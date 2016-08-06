// /site/blueprints/news.php
<?php if(!defined('KIRBY')) exit ?>

title: News
pages:
  template: new
files: true
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
