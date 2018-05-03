// /site/blueprints/projets.php
<?php if(!defined('KIRBY')) exit ?>

title: Projets
pages:
  template: projet
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
