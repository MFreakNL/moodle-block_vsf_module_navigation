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

/**
 * Extends the block instance coinfiguration
 */
class block_vsf_module_navigation_edit_form extends block_edit_form {

    /**
     * Defines fields to add to the settings form
     *
     * @param \MoodleQuickForm $mform
     *
     * @throws coding_exception
     * @throws moodle_exception
     */
    protected function specific_definition($mform) {

        $mform->addElement('header', 'configheader', get_string('blocksettings', 'core_block'));

        $mform->addElement('text', 'config_blocktitle', get_string('config_blocktitle', 'block_vsf_module_navigation'));
        $mform->setDefault('config_blocktitle', '');
        $mform->setType('config_blocktitle', PARAM_TEXT);

        $mform->addHelpButton('config_blocktitle', 'config_blocktitle', 'block_vsf_module_navigation');

        $mform->addElement('advcheckbox', 'config_onesection', get_string('config_onesection',
            'block_vsf_module_navigation'),
            get_string('config_onesection_label', 'block_vsf_module_navigation'));
        $mform->setDefault('config_onesection', 1);
        $mform->setType('config_onesection', PARAM_BOOL);

        $mform->addElement('advcheckbox', 'config_display_secionname', get_string('config_display_secionname',
            'block_vsf_module_navigation'),
            get_string('config_display_secionname_label', 'block_vsf_module_navigation'));
        $mform->setDefault('config_display_secionname', 1);
        $mform->setType('config_display_secionname', PARAM_BOOL);

        $mform->addElement('text', 'config_heading', get_string('config_heading',
            'block_vsf_module_navigation'));
        $mform->setDefault('config_heading', '');
        $mform->setType('config_heading', PARAM_TEXT);

        $this->get_activities($mform);

        $mform->addHelpButton('config_heading', 'config_heading', 'block_vsf_module_navigation');
    }

    /**
     * get_activities
     *
     *
     * @param \MoodleQuickForm $mform
     *
     * @throws coding_exception
     * @throws moodle_exception
     */
    protected function get_activities($mform) {

        global $COURSE;
        $mform->addElement('header', 'configheader_time', get_string('config_time', 'block_vsf_module_navigation'));

        $modinfo = get_fast_modinfo($COURSE->id, -1);

        $sectionstrack = [];
        foreach ($modinfo->instances as $module => $instances) {

            foreach ($instances as $index => $cm) {

                if (!isset($sectionstrack[$cm->sectionnum])) {
                    $mform->addElement('static', 'header-' . $cm->sectionnum, html_writer::tag('b', get_section_name($COURSE,
                        $cm->sectionnum)));
                    $sectionstrack[$cm->sectionnum] = true;
                }

                $mform->addElement('text', 'config_cm_' . $cm->id, $cm->name);
                $mform->setDefault('config_cm_' . $cm->id, 0);
                $mform->setType('config_cm_' . $cm->id, PARAM_INT);
            }
        }
    }

}
