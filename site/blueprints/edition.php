<?php if(!defined('KIRBY')) exit ?>

title: Edition
pages: 
  template: partenaire
files: true
fields:
  title:
    label: Titre
    type:  text
  dateText: 
    label: Date(s) en texte
    type: text
    width: 1/2
  startDate: 
    label: Date de début
    type: date
    width: 1/2
  venue:
    label: Où ?
    type: text
    width:1/2
  videoLink:
    label: Code Vimeo (ex. 111678678)
    type: text
    width: 1/2
  text:
    label: Texte
    type:  textarea

  call4Participants: 
    label: Appel à Participants 
    type: headline
  debutCall: 
    label: Début
    type: date
    width: 1/2
  endCall: 
    label: Fin
    type: date
    width: 1/2
  registrationLink:
    label: Inscriptions
    type: Url
    width:1/2
  registrationText: 
    label: Texte du bouton
    type: text
    width:1/2
  call4p: 
    label: Texte de l'appel (compatible HTML)
    type: textarea

  