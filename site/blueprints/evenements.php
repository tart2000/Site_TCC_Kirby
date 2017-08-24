// /site/blueprints/retours.php
<?php if(!defined('KIRBY')) exit ?>

title: Retours
pages:
  template: retour
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  menutitle:
    label:
      en: Menu title
      fr: Titre au menu
    type:  text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
