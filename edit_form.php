<?php

class block_infousers_edit_form extends block_edit_form {
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
}