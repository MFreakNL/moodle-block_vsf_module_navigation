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
 * @package    block_vsf_module_navigation
 * @copyright  2016 Digidago <contact@digidago.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Option: clicking on the downwards arrow 1) displays the menu or 2)goes to that page.
    $name = 'block_vsf_module_navigation/toggleclickontitle';
    $title = get_string('toggleclickontitle', 'block_vsf_module_navigation');
    $description = get_string('toggleclickontitle_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => get_string('toggleclickontitle_menu', 'block_vsf_module_navigation'),
        2 => get_string('toggleclickontitle_page', 'block_vsf_module_navigation'),
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: show labels.
    $name = 'block_vsf_module_navigation/toggleshowlabels';
    $title = get_string('toggleshowlabels', 'block_vsf_module_navigation');
    $description = get_string('toggleshowlabels_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => new lang_string('no'), // No.
        2 => new lang_string('yes')   // Yes.
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: Show all tabs open.
    $name = 'block_vsf_module_navigation/togglecollapse';
    $title = get_string('togglecollapse', 'block_vsf_module_navigation');
    $description = get_string('togglecollapse_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => new lang_string('no'), // No.
        2 => new lang_string('yes')   // Yes.
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: Show only titles.
    $name = 'block_vsf_module_navigation/toggletitles';
    $title = get_string('toggletitles', 'block_vsf_module_navigation');
    $description = get_string('toggletitles_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => new lang_string('no'), // No.
        2 => new lang_string('yes')   // Yes.
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: Show on activity pages only.
    $name = 'block_vsf_module_navigation/modulepageonly';
    $title = get_string('modulepageonly', 'block_vsf_module_navigation');
    $description = get_string('modulepageonly_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => new lang_string('no'), // No.
        2 => new lang_string('yes')   // Yes.
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: Show on activity pages only.
    $name = 'block_vsf_module_navigation/onesectionsimplified';
    $title = get_string('onesectionsimplified', 'block_vsf_module_navigation');
    $description = get_string('onesectionsimplified_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => new lang_string('no'), // No.
        2 => new lang_string('yes')   // Yes.
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));

    // Option: Type of check icon for activity completion.
    $name = 'block_vsf_module_navigation/completionchecktype';
    $title = get_string('completionchecktype', 'block_vsf_module_navigation');
    $description = get_string('completionchecktype_desc', 'block_vsf_module_navigation');
    $default = 1;
    $choices = [
        1 => get_string('circle', 'block_vsf_module_navigation'),
        2 => get_string('check', 'block_vsf_module_navigation'),
    ];
    $settings->add(new admin_setting_configselect($name, $title, $description, $default, $choices));
}
