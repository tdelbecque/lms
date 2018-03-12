<?php
/**
 * @package chamilo.plugin
 * @author Thy
 */

//the plugin title
$plugin_info['title']       = 'Serveur de contenu';
//the comments that go with the plugin
$plugin_info['comment']     = "Fixe les paramètres d'accès à un serveur de contenu";
//the plugin version
$plugin_info['version']     = '0.09';
//the plugin author
$plugin_info['author']      = 'Thy';

/* Plugin optional settings */

/*
 * This form will be showed in the plugin settings once the plugin was installed
 * in the plugin/hello_world/index.php you can have access to the value: $plugin_info['settings']['hello_world_show_type']
*/

$form = new FormValidator('content-server_form');

//A simple select
$options = array('pollux' => 'Shiny on Pollux');
$form->addElement('select', 'server', 'Serveur', $options);
$form->addButtonSave(get_lang('Ok'), 'submit_button');

$plugin_info['settings_form'] = $form;
