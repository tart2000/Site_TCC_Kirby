<?php if(!defined('KIRBY')) exit ?>

title: partenaire
pages: false
fields:
  title:
    label: Nom
    type:  text
  lien: 
    label: Url du partenaire
    type: Url
    width: 1/2
  superWidth: 
    label: Largeur (1, 2 ou 3)
    type: number
    width: 1/2
  category:
    label: Catégorie 
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
    label: Text
    type:  textarea
    size:  large
  