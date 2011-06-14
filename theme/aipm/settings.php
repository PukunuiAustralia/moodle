<?php

/**
 * Settings for the aipm theme
 */
 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

// Custom CSS file
$name = 'theme_aipm/customcss';
$title = get_string('customcss','theme_aipm');
$description = get_string('customcssdesc', 'theme_aipm');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}
