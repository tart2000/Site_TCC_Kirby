// /site/blueprints/a-propos.php

<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: false
files: false
fields:
  title:
    label:
      en: Title
      fr: Titre
    type:  text
  header:
    label:
      fr: Texte header
      en: Header text
    type: textarea
  text:
    label:
      en: Text
      fr: Text
    type:  textarea