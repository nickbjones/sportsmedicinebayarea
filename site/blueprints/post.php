<?php if(!defined('KIRBY')) exit ?>

title: Post
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type:  date
    default: today
    override: true
  text:
    label: Text
    type:  textarea
  tags:
    label: Tags
    type: tags