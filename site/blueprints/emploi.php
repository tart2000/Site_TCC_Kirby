// /site/blueprints/emploi.php
<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  menutitle:
    label:
      en: Title in top navigation bar
      fr: Titre dans la barre de navigation supérieure
    type: text
  url-key:
    label:
      en: url-key
      fr: url-key
    type:  text
  position-type:
    label:
      en: Position type
      fr: Type de position
    type:  text
  startdate:
    label:
      en: Display start date
      fr: Date de début d'affichage
    type:  text
  enddate:
    label:
      en: Application and display deadline
      fr: Date limite d'inscription et d'affichage
    type:  text
  location:
    label:
      en: City
      fr: Ville
    type:  text
  pdflink:
    label:
      en: link to pdf on google drive
      fr: line vers le pdf sur google drive
    type:  text
  pdfsize:
    label:
      en: pdf size (eg, 114KB)
      fr: taille du pdf (ex, 114KB)
    type:  text
  short:
    label:
      en: Short text (on list of jobs page)
      fr: Texte abbrégé (sur la page des emplois)
    type:  textarea
  text:
    label:
      en: Text
      fr: Texte
    type:  textarea
