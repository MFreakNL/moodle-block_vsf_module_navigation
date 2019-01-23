<?php
// This file is part of The Course Module Navigation Block
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
 * @author     Bas Brands
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config_blocktitle'] = 'Block title';
$string['config_blocktitle_default'] = 'Table of contents';
$string['config_blocktitle_help'] = 'Leave this field empty to use the default block title. If you define a title here, it will be used instead of the default one.';
$string['config_onesection'] = 'Show the current section only';
$string['config_onesection_label'] = 'If enabled show one section only. If disabled show an accordion style menu';
$string['vsf_module_navigation:addinstance'] = 'Add a new course contents block';
$string['notusingsections'] = 'This course format does not use sections.';
$string['pluginname'] = 'Course Module Navigation';
$string['toggleclickontitle'] = 'Clicking on the title';
$string['toggleclickontitle_desc'] = "'Displays the menu' or 'Goes to that page'.";
$string['toggleclickontitle_menu'] = 'Displays the menu';
$string['toggleclickontitle_page'] = 'Goes to that page';
$string['toggleshowlabels'] = 'Show labels';
$string['toggleshowlabels_desc'] = 'Choose whether to display labels or not';
$string['togglecollapse'] = 'Collapse tabs';
$string['togglecollapse_desc'] = 'Choose whether to display all tabs not collapsed';
$string['toggletitles'] = 'Show only titles';
$string['toggletitles_desc'] = 'Choose whether to display only titles or titles and content';
$string['modulepageonly'] = 'Show this block on module pages only';
$string['modulepageonly_desc'] = 'When set to yes the block will only be shown on Modulepages not coursepages';
$string['alertmodulepageonly'] = 'This block\'s global settings have been configured to show on modulepages only, but the setting the show on this page on module pages has not been configured correctly. Please update the preferences for this block to "Display on page types" => "Any Page"';
$string['onesectionsimplified'] = 'Simplify One section view';
$string['onesectionsimplified_desc'] = 'When the One section view is configured in the block preferences hide navigation arrows.';
$string['circle'] = 'Circle';
$string['check'] = 'Check';
$string['completionchecktype'] = 'Icon type for completion checking';
$string['completionchecktype_desc'] = 'Show this type of icon on completion';
$string['completionchecklocation'] = 'Icon location for completion checking';
$string['completionchecklocation_desc'] = 'Show checkes before or after the activity name';
$string['left'] = 'Left';
$string['right'] = 'Right';
$string['privacy:metadata'] = 'The VSF Module Navigation plugin does not store any personal data.';
$string['config_display_secionname_label'] = 'If enabled the section name will be displayed on top of the block.';
$string['config_display_secionname'] = 'Display section name';
$string['config_heading'] = 'The heading name.';
$string['config_heading_help'] = 'The heading name of the block, if empty course name will be displayed.';
$string['config_time'] = 'Activity time indication in minutes';