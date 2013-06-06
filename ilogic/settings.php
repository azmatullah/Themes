<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings for the ilogic theme
 *
 * @package   theme_ilogic
 * @copyright © 2012 - 2013 | 3i Logic Training & Consultancy Co. WLL. All Rights Reserved.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

// Logo file setting
$name = 'theme_ilogic/logo';
$title = get_string('logo','theme_ilogic');
$description = get_string('logodesc', 'theme_ilogic');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Tagline setting
$name = 'theme_ilogic/tagline';
$title = get_string('tagline','theme_ilogic');
$description = get_string('taglinedesc', 'theme_ilogic');
$setting = new admin_setting_configtextarea($name, $title, $description, get_string('defaulttagline', 'theme_ilogic'));
$settings->add($setting);

$name = 'theme_ilogic/hide_tagline';
$title = get_string('hide_tagline','theme_ilogic');
$description = get_string('hide_taglinedesc', 'theme_ilogic');
$setting = new admin_setting_configcheckbox($name, $title, $description, 0);
$settings->add($setting);

 /*
// Block region width
$name = 'theme_ilogic/regionwidth';
$title = get_string('regionwidth','theme_ilogic');
$description = get_string('regionwidthdesc', 'theme_ilogic');
$default = 240;
$choices = array(200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting); */
 
// Foot note setting
$name = 'theme_ilogic/footnote';
$title = get_string('footnote','theme_ilogic');
$description = get_string('footnotedesc', 'theme_ilogic');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Custom CSS file
$name = 'theme_ilogic/customcss';
$title = get_string('customcss','theme_ilogic');
$description = get_string('customcssdesc', 'theme_ilogic');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}