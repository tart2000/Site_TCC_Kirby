// /site/blueprints/retour.php
<?php if(!defined('KIRBY')) exit ?>

title: Retour
pages: 
  template: partenaire
files:
  sortable: true
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  place:
    label: 
      en: Location
      fr: Place
    type:  text
    width: 1/2
  placeLink: 
    label:
      en: Location Url
      fr: Place Url
    type: Url
    width: 1/2
  participants: 
    label: 
      en: Number of participants
      fr: Nombre de participants
    type: number
    width: 1/2
  nbprojets:
    label: 
      en: Number of projects
      fr: Nombre de projets
    type: number
    width:1/2
  projectLink:
    label: 
      en: Link to projects
      fr: Lien vers les projets
    type: url
    width: 1/2
  dates: 
    label:
      en: Dates
      fr: Dates
    type: text
    width: 1/2
  year:
    label: 
      en: Year
      fr: Année
    type:  text
    width: 1/2
  vimeoLink: 
    label: 
      en: Vimeo link (ex. 57724509)
      fr: Lien Vimeo (ex. 57724509)
    type: text
    width: 1/2
  text:
    label: 
      en: Text
      fr: Texte
    type:  textarea
  connect: 
    label: 
      en: Connection to project
      fr: Connexion à un projet
    type: select 
    options: query
    query: 
      page: projets
