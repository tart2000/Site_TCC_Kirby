<?php if(!defined('KIRBY')) exit ?>

title: Partenaire
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
    label: largeur (1, 2 ou 3)
    type: number
    width: 1/2
  text:
    label: Text
    type:  textarea
    size:  large
  