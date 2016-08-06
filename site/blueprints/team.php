// /site/blueprints/team.php
<?php if(!defined('KIRBY')) exit ?>

title: Team
pages: false
files: true
fields:
    title:
        label: 
          en: First name
          fr: Prénom
        type: text
        width: 1/2
    nom: 
        label:
          en: Last name
          fr: Nom
        type: text
        width: 1/2
    boite: 
        label:
          en: Company
          fr: Compagnie
        type text
        width: 1/2
    role: 
        label:
          en: Role
          fr: Rôle
        type: text
        width: 1/2
    tw: 
        label:
          en: Twitter (without the @)
          fr: Twitter (sans le @)
        type: text
        width: 1/2
    mail:
        label:
          en: Email
          fr: Courriel
        type: email
        width:1/2