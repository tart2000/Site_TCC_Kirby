// /site/blueprints/calls.php
<?php if(!defined('KIRBY')) exit ?>

title: Calls
pages:
  template: call
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  menutitle:
    label:
      en: Title in top navigation bar
      fr: Titre dans la barre de navigation supérieure
    type: text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
