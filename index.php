<meta charset="utf-8">
<?php
require_once('bootstrap.php');

$form = new FormObject();

$form->setAttr('method', 'GET');

$form->addInput('Jméno')
->setAttr('name','jmeno')
->setAttr('placeholder','Jméno');

$form->addInput('Příjmení')
->setAttr('name','prijmeni')
->setAttr('class','a b c');

$form->addInput('Věk')
->setAttr('name','prijmeni')
->setAttr('type','number');

$form->addInput('Popis',FormObject::INPUT_TEXTAREA)
->setAttr('class','TinyMce')
->setAttr('style','width:100%');

$form->addInput('Odeslat', FormObject::INPUT_SUBMIT);


echo $form;
