// /site/blueprints/poste.php
<?php if(!defined('KIRBY')) exit ?>

title: Poste
pages: false
files: true
fields:
	title:
    label:
      en: Title
      fr: Titre
    	type:  text
	periode: 
   		label: 
        en: Period
        fr: Période
   		type: text 
	heures: 
   		label: 
        en: Number of hours
        fr: Nombre d'heures 
   		type: text 
	nous:
   		label: 
        en: We are
        fr: Nous sommes 
   		type: textarea
	toi: 
   		label: 
        en: You are
        fr: Tu es
   		type: textarea
	mission: 
   		label: 
        en: Mission 
        fr: Mission 
   		type: textarea
	pouvoirs: 
   		label: 
        en: Super powers
        fr: Super pouvoirs
   		type: textarea
	contact: 
   		label: 
        en: Contact email 
        fr: Courriel contact
   		type: email 
