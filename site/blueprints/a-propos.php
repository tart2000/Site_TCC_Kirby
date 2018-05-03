// /site/blueprints/a-propos.php

<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
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
  header:
    label:
      en: Header text (over image)
      fr: Texte header (sur l'image)
    type: textarea
  text:
    label:
      en: Text
      fr: Text
    type:  textarea
