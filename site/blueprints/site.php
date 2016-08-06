// /site/blueprints/site.php
<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  author:
    label: 
      en: Author
      fr: Auteur
    type: text
  description:
    label: 
      en: Description
      fr: Description
    type:  textarea
  keywords:
    label: 
      en: Keywords
      fr: Mots clés
    type:  tags
  facebook: 
    label: 
      en: Facebook link
      fr: Lien Facebook
    type: Url
    width: 1/2
  twitter: 
    label: 
      en: Twitter link
      fr: Lien twitter
    type: Url
    width: 1/2
  linkedin:
    label: 
      en: LinkedIn link
      fr: Lien LinkedIn
    type: Url
    width:1/2
  copyright:
    label: 
      en: Copyright
      fr: Droits d'auteur
    type:  textarea