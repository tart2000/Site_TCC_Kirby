<?php if(!defined('KIRBY')) exit ?>

title: New
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  newsLink:
    label: Lien 
    type: Url
    width: 1/2
  newsDate: 
    label: Date 
    type: date
    width: 1/4
  sticky: 
    label: Sticky ? 
    type: checkbox
    width: 1/4
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags (ajouter le tag d'un projet pour le conecter)
    type: text