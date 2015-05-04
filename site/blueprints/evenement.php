<?php if(!defined('KIRBY')) exit ?>

title: Evenement
pages: false
files: false
fields:
  title:
    label: Titre
    type:  text
  startDate:
    label: Date de début
    type: date
    width: 1/2
  endDate: 
    label: Date de fin (laisser vide si une seule journée)
    type: date
    width: 1/2
  startTime:
    label: Heure de début
    type: time
    width: 1/2
  endTime: 
    label: Heure de fin
    type: time
    width: 1/2
  venueName: 
    label: Où ?
    type: text
    width: 1/2
  venueLink:
    label: Lien vers le lieu ?
    type: Url
    width: 1/2
  registrationLink:     
    label: Lien 'call to action'
    type: Url
    width: 1/2
  infoLink: 
    label: Intitulé du 'call to action' (ex. Inscriptions)
    type: text
    width: 1/2
  tags: 
    label: Tags  
    type: text
  text:
    label: Texte
    type:  textarea