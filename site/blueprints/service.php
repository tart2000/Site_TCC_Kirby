// /site/blueprints/projet.php
<?php if(!defined('KIRBY')) exit ?>

title: Projet
pages:
  template:
    - edition
    - poste
files:
  sortable: true
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  projectLink:
    label:
      en: Link to the project site
      fr: Lien vers le site du projet
    type: Url
    width: 1/2
  projectTag:
    label:
      en: Tag to connect news and events
      fr: Tag pour connecter les news et événements
    type: text
    width: 1/2
  fb:
    label:
      en: Facebook link
      fr: Lien Facebook
    type: Url
    width: 1/2
  tw:
    label:
      en: Twitter link
      fr: Lien Twitter
    type: Url
    width: 1/2
  short:
    label: Description courte
    type: text
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
  tags:
    label:
      en: Tags
      fr: Tags
    type:  tags
  lien:
    label:
      en: Link to global project
      fr: Lien vers projet global
    type: Url
    width: 1/2
  mailchimp:
    label: Mailchimp listID
    type: text
