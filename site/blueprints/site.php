<?php if(!defined('KIRBY')) exit ?>

title: Site
pages: default
fields:
  title:
    label: Title
    type:  text
  author:
    label: Author
    type:  text
  description:
    label: Description
    type:  textarea
  keywords:
    label: Keywords
    type:  tags
  facebook: 
    label: Facebook
    type: Url
    width: 1/2
  twitter: 
    label: Twitter
    type: Url
    width: 1/2
  linkedin:
    label: Linkedin
    type: Url
    width:1/2
  copyright:
    label: Copyright
    type:  textarea