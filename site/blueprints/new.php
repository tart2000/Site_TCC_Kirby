// /site/blueprints/new.php
<?php if(!defined('KIRBY')) exit ?>

title: New
pages: false
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  newsLink:
    label: Lien 
    type: Url
    width: 1/4
  newsDate: 
    label: 
      en: Date
      fr: Date
    type: date
    width: 1/4
  newsEnd:
    label: 
      en: Expiry date
      fr: Date de péremption ?
    type: date
    width:1/4
  sticky: 
    label: 
      en: Make it sticky ? 
      fr: Sticky ?
    type: checkbox
    width: 1/4
  text:
    label: 
      en: Text
      fr: Texte
    type:  textarea
  tags:
    label: 
      en: Tags (add the dag of a project to connect it)
      fr: Tags (ajouter le tag d'un projet pour le connecter)
    type: text