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
 * Block definition class for the block_aboutstudent plugin.
 *
 * @package   block_aboutstudent
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_aboutstudent extends block_base {

    /**
     * Initialises the block.
     *
     */
    function init() {
        $this->title = get_string('pluginname', 'block_aboutstudent');
    }

    function has_config() {
        return true;
    }

    function get_content() {
        global $DB;

        if ($this->content !== null) {
            return $this->content;
        }



        //$userstring = '';

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
    }
}