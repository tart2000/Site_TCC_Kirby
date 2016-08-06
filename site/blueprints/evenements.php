// /site/blueprints/evenements.php
<?php if(!defined('KIRBY')) exit ?>

title: Evenements
pages:
  template: evenement
files: false
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