// /site/blueprints/edition.php
<?php if(!defined('KIRBY')) exit ?>

title: Edition
pages: 
  template: 
    - partenaire
    - team
  sortable: true
files: 
  sortable: true
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  dateText: 
    label: 
      en: Date(s) as text
      fr: Date(s) en texte
    type: text
    width: 1/2
  startDate: 
    label:
      en: Starting date
      fr: Date de début
    type: date
    width: 1/2
  venue:
    label:
      en: Where ?
      fr: Où ?
    type: text
    width:1/2
  videoLink:
    label:
      en: Vimeo Code (ex. 111678678)
      fr: Code Vimeo (ex. 111678678)
    type: text
    width: 1/2
  facebookProjet:
    label:
      en: Project's facebook
      fr: Facebook du projet
    type: text
    width: 1/2
  twitterProjet:
    label:
      en: Project's twitter
      fr: Twitter du projet
    type: text
    width: 1/2
  ctas:
    label: 
      en: Call(s) to action
      fr: Call(s) to action
    type: structure
    help: Don't forget to save after (bottom of the page)
    entry: >
      {{titre}}<br/>
      {{btntitle}}
    fields:
      titre:
        label: 
          en: Title
          fr: Titre
        type: text
      texte:
        label:
          en: Text
          fr: Texte
        type: textarea
      btntitle:
        label: 
          en: Button title
          fr: Titre du bouton
        type: text
      alink:
        label: 
          en: Button link
          fr: Lien du bouton
        type: url
  text:
    label: 
      en: Text
      fr: Texte
    type: textarea
  partenaire:
    label: 
      en: Why be a partner?
      fr: Pourquoi devenir partenaire ? 
    type: textarea

  call4Participants: 
    label: 
      en: Call for Participants
      fr: Appel à Participants 
    type: headline
  debutCall: 
    label: 
      en: Start
      fr: Début
    type: date
    width: 1/2
  endCall: 
    label: 
      en: End
      fr: Fin
    type: date
    width: 1/2
  registrationLink:
    label: 
      en: Signup link
      fr: Lien inscriptions
    type: Url
    width:1/2
  registrationText: 
    label: 
      en: Button text
      fr: Texte du bouton
    type: text
    width:1/2
  call4p: 
    label: 
      en: Call text (HTML compatible)
      fr: Texte de l'appel (compatible HTML)
    type: textarea

  videos: 
    label: 
      en: Videos
      fr: Vidéos 
    type: headline
  videoDesc1: 
    label: 
      en: Description of video 1 (required so that this section is displayed)
      fr: Description de la vidéo 1 (obligatoire pour que la section apparaisse)
    type: text
  vimeoCode1: 
    label: 
      en: Viemo code (ex. 111678678)
      fr: Code Vimeo (ex. 111678678)
    type: text
    width:1/2
  youtubeCode1: 
    label: 
      en: YouTube code (ex. B6Ptl_LL0i4)
      fr: Code YouTube (ex. B6Ptl_LL0i4)
    type: text
    width:1/2

  videoDesc2: 
    label: 
      en: Description of video 2
      fr: Description de la vidéo 2
    type: text
  vimeoCode2: 
    label: 
      en: Viemo code (ex. 111678678)
      fr: Code Vimeo (ex. 111678678)
    type: text
    width:1/2
  youtubeCode2: 
    label: 
      en: YouTube code (ex. B6Ptl_LL0i4)
      fr: Code YouTube (ex. B6Ptl_LL0i4)
    type: text
    width:1/2

  videoDesc3: 
    label: 
      en: Description of video 3
      fr: Description de la vidéo 3
    type: text
  vimeoCode3: 
      en: Viemo code (ex. 111678678)
      fr: Code Vimeo (ex. 111678678)
    type: text
    width:1/2
  youtubeCode3: 
    label: 
      en: YouTube code (ex. B6Ptl_LL0i4)
      fr: Code YouTube (ex. B6Ptl_LL0i4)
    type: text
    width:1/2
  
  contacts:
    label: 
      en: Contacts
      fr: Contacts
    type: headline
  contact:
    label: 
      en: Contact email
      fr: Courriel contacte
    type: email
    width:1/2
  presse:
    label:
      en: Press
      fr: Presse
    type: Url
    width:1/2
  benevoles:
    label:
      en: Volunteers
      fr: Bénévoles
    type: Url
    width: 1/2
  partenaires:
    label: 
      en: Partners
      fr: Partenaires
    type: Url
    width: 1/2

  