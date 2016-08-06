// /site/blueprints/callen.php
<?php if(!defined('KIRBY')) exit ?>

title: Callen
pages: false
files: 
  sortable: true
fields:
  title:
    label: 
      en: Title (en)
      fr: Titre (en)
    type:  text
  ctatext: 
    label: 
      en: Button text (en)
      fr: Texte du bouton (en) 
    type: text
    width: 1/2
  ctalink:
    label: 
      en: Button link
      fr: Lien du bouton
    type: Url
    width: 1/2
  text:
    label: 
      en: Text (en)
      fr: Texte (en)
    type:  textarea