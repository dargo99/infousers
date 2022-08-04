<?php
class block_aboutstudent extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_aboutstudent');
    }

    function has_config() {
        return true;
    }

    public function specialization() {
        if (isset($this->config)) {
            if (empty($this->config->title)) {
                $this->title = get_string('defaulttitle', 'block_aboutstudent');            
            } else {
                $this->title = $this->config->title;
            }
    
            if (empty($this->config->text)) {
                $this->config->text = get_string('defaulttext', 'block_aboutstudent');
            }    
        }
    }

    public function instance_allow_multiple() {
        return true;
    }

    function is_empty() {
        $this->get_content();
        return(empty($this->content->text) && empty($this->content->footer));
    }

    function get_content() {
        global $USER;
        global $DB;

        if ($this->content !== null) {
            return $this->content;
        }

        $userid = $USER->id;
        $userfieldid = $DB->get_records('user_info_data');
        foreach ($userfieldid as $id) {
            if ($id->userid == $userid) {
                $userstatus = $id->data;
            }
        }
        
        $this->content = new stdClass;
        $this->content->text = "id: " . $userid . ", " . "status: " . $userstatus . "<hr>";
        $this->content->footer = 'Footer here...';
        return $this->content;

        //$field = $DB->get_record('user_info_field', array('shortname' => 'estado'));
        //$fieldvalues = $DB->get_records('user_info_data',array('fieldid' => $field->id));
        //foreach ($fieldvalues as $status) {
        //    $userstatus .= $fieldvalues->status . '<br>';

        /*
        $showcourses = get_config('block_aboutstudent', 'showcourses');

        if($showcourses) {
            $courses = $DB->get_records('course');
            foreach ($courses as $course) {
                $userstring .= $course->fullname . '<br>';
            }

        } else {
            $users = $DB->get_records('user');
            foreach ($users as $user) {
                $userstring .= $user->firstname . ' ' . $user->estado . '<br>';
            }
        }
        */

    }
}