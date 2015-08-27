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
    label: Title
    type:  text
  projectLink:
    label: Lien vers le site du projet
    type: Url 
    width: 1/2 
  projectTag:
    label: Tag pour connecter les news et événements
    type: text
    width: 1/2
  fb: 
    label: Facebook 
    type: Url 
    width: 1/2
  tw: 
    label: Twitter
    type: Url
    width: 1/2
  short: 
    label: Description courte
    type: text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags
  lien: 
    label: Lien vers projet global
    type: Url
    width: 1/2
  titreLien: 
    label: Titre du lien 
    type: text
    width: 1/2
  textLien: 
    label: Texte intro lien
    type: textarea
