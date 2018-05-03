// /site/blueprints/default.php
<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
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
  url-key:
    label:
      en: url-key
      fr: url-key
    type:  text
  subtitle:
    label:
      en: Subtitle
      fr: Sous titre
    type:  text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
