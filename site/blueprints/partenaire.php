// /site/blueprints/partenaire.php
<?php if(!defined('KIRBY')) exit ?>

title: partenaire
pages: false
fields:
  title:
    label: 
      en: Name
      fr: Nom
    type:  text
  lien: 
    label: 
      en: Partner's url
      fr: Url du partenaire
    type: Url
    width: 1/2
  superWidth: 
    label: 
      en: Width (1, 2, or 3)
      fr: Largeur (1, 2 ou 3)
    type: number
    width: 1/2
  category:
    label: 
      en: Category
      fr: Catégorie 
    type: select
    default: sponsor
    options: 
      co: Co-organisateur
      org: Partenaire d'organisation
      sponsor: Commanditaire
      service: Partenaire de service
      technical: Partenaire technique
      community: Partenaire de communauté 
      diffusion: Partenaire de diffusion  
  text:
    label: 
      en: Text
      fr: Texte
    type:  textarea
    size:  large
  