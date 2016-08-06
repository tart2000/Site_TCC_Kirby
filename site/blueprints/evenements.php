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
  uneventful:
    label: 
      en: Text if there are no upcoming events 
      fr: Texte s'il y n'a aucune événement à venir
    type:  textarea