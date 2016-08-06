// /site/blueprints/call.php
<?php if(!defined('KIRBY')) exit ?>

title: Call
pages: 
  template: callen
files: 
  sortable: true
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  ctatext: 
    label: 
      en: Text of button "Call to Action"
      fr: Texte de bouton "Call to Action" 
    type: text
    width: 1/2
  ctalink:
    label: 
      en: Link
      fr: Lien
    type: Url
    width: 1/2
  text:
    label: 
      en: Text
      fr: Texte
    type:  textarea