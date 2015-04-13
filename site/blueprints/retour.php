<?php if(!defined('KIRBY')) exit ?>

title: Retour
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  place:
    label: Place
    type:  text
    width: 1/2
  placeLink: 
    label: Place Url
    type: Url
    width: 1/2
  participants: 
    label : Nombre de participants
    type: number
    width: 1/2
  dates: 
    label: Dates
    type: text
    width: 1/2
  year:
    label: Year
    type:  text
    width: 1/2
  vimeoLink: 
    label: Vimeo link (ex. 57724509)
    type: text
    width: 1/2
  text:
    label: Text
    type:  textarea
  Tags: 
    label: Tags (ajouter le tag d'un projet pour le connecter)
    type: text