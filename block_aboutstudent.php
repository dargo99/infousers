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

    function get_content() {
        global $DB;
        $allowHTML = $CFG->Allow_HTML;
        $allowHTML = get_config('aboutstudent', 'Allow_HTML');

        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = 'The content of our SimpleHTML block!';
        $this->content->footer = 'Footer here...';
        return $this->content;

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
                $userstring .= $user->firstname. ' ' . $user->lastname . '<br>';
            }
        }

        $this->content = new stdClass();
        $this->content->text = $userstring;
        $this->content->footer = 'chao';
        return $this->content;
        */
    }
    
    function is_empty() {
        $this->get_content();
        return(empty($this->content->text) && empty($this->content->footer));
    }
}