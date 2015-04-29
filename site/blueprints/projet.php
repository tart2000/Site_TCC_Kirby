<?php if(!defined('KIRBY')) exit ?>

title: Projet
pages: 
  template: edition
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
  short: 
    label: Description courte
    type: text
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type:  tags