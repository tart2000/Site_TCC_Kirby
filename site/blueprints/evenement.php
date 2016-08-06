// /site/blueprints/evenement.php
<?php if(!defined('KIRBY')) exit ?>

title: Evenement
pages: false
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  startDate:
    label: 
      en: Starting date
      fr: Date de début
    type: date
    width: 1/2
  endDate: 
    label:
      en: Ending date (leave empty if only one day)
      fr: Date de fin (laisser vide si une seule journée)
    type: date
    width: 1/2
  startTime:
    label: 
      en: Starting time
      fr: Heure de début
    type: time
    width: 1/2
  endTime: 
    label: 
      en: Ending time
      fr: Heure de fin
    type: time
    width: 1/2
  venueName: 
    label: 
      en: Where?
      fr: Où ?
    type: text
    width: 1/2
  venueLink:
    label: 
      en: Link to the location?
      fr: Lien vers le lieu ?
    type: Url
    width: 1/2
  registrationLink:     
    label: 
      en: Link "Call to Action"
      fr: Lien 'call to action'
    type: Url
    width: 1/2
  infoLink: 
    label: 
      en: Title of the "Call to Action" (e.g., Sign up)
      fr: Intitulé du 'call to action' (ex. Inscriptions)
    type: text
    width: 1/2
  gifLink: 
    label: 
      en: Link to GIF
      fr: Un lien vers un GIF qui va bien ? 
    type: Url
  tags: 
    label:
      en: Tags  
      fr: Tags
    type: text
  text:
    label: 
      en: Text
      fr: Texte
    type:  textarea