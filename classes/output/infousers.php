<?php

namespace block_infousers\output;

defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;

class infousers implements renderable, templatable {
    
    protected $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function export_for_template(renderer_base $output) {
        global $USER, $OUTPUT, $DB;

        $current_user = new \stdClass();
        $users = new \stdClass();

        $datausers = $DB->get_records('user');
        $customfields = $DB->get_records('user_info_data');
        

        if (!isset($this->config->display_picture) || $this->config->display_picture == 1) {
            $current_user->userpicture = $OUTPUT->user_picture($USER, array('class' => 'userpicture'));
        }

        $current_user->userfullname = fullname($USER);

        if (!isset($this->config->display_email) || $this->config->display_email == 1) {
            $current_user->useremail = obfuscate_mailto($USER->email, '');
        }

        //field status current user
        if (!empty($this->config->display_status) && $customfields->fieldid == 1 && $USER->id == $customfields->id) {
            $current_user->status = $customfields->data;
        }

        //field career current user
        if (!empty($this->config->display_career) && $customfields->fieldid == 3 && $USER->id == $customfields->id) {
            $current_user->career = $customfields->data;
        }

        //acá voy -dargo

        return $current_user;

    }

}