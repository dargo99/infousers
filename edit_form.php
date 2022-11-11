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

defined('MOODLE_INTERNAL') || die();

/**
 * Form for editing block settings
 *
 * @package    block_infousers
 * @copyright  2010 Remote-Learner.net
 * @author     Olav Jordan <olav.jordan@remote-learner.ca>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


/* class block_infousers_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        global $CFG;
        $mform->addElement('header', 'configheader', get_string('infousers_settings', 'block_infousers'));

        $mform->addElement('selectyesno', 'config_display_picture', get_string('display_picture', 'block_infousers'));
        if (isset($this->block->config->display_picture)) {
            $mform->setDefault('config_display_picture', $this->block->config->display_picture);
        } else {
            $mform->setDefault('config_display_picture', '1');
        }

        $mform->addElement('selectyesno', 'config_display_email', get_string('display_email', 'block_infousers'));
        if (isset($this->block->config->display_email)) {
            $mform->setDefault('config_display_email', $this->block->config->display_email);
        } else {
            $mform->setDefault('config_display_email', '1');
        }

        $mform->addElement('selectyesno', 'config_display_status', get_string('display_status', 'block_infousers'));
        if (isset($this->block->config->display_status)) {
            $mform->setDefault('config_display_status', $this->block->config->display_status);
        } else {
            $mform->setDefault('config_display_status', '1');
        }

        $mform->addElement('selectyesno', 'config_display_career', get_string('display_career', 'block_infousers'));
        if (isset($this->block->config->display_career)) {
            $mform->setDefault('config_display_career', $this->block->config->display_career);
        } else {
            $mform->setDefault('config_display_career', '1');
        }
    }
} */