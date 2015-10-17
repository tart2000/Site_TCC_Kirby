<?php if(!defined('KIRBY')) exit ?>

title: Call
pages: 
  template: callen
files: 
  sortable: true
fields:
  title:
    label: Title
    type:  text
  ctatext: 
    label: Texte de bouton call to action 
    type: text
    width: 1/2
  ctalink:
    label: Lien 
    type: Url
    width: 1/2
  text:
    label: Texte
    type:  textarea