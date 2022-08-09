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
 * Block displaying information about current logged-in user.
 *
 * This block can be used as anti cheating measure, you
 * can easily check the logged-in user matches the person
 * operating the computer.
 *
 * @package    block_infousers
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_infousers extends block_base {

    public function init() {
        $this->title = get_string('pluginname', 'block_infousers');
    }

    public function get_content() {
        
        if ($this->content !== NULL) {
            return $this->content;
        }

        //$renderable = new \block_infousers\output\infousers($this->config);
        //$renderer = $this->page->get_renderer('block_infousers');
        
        $this->content = new stdClass();
        //$this->content->text = $renderer->render($renderable);
        $this->content->footer = '';

        return $this->content;
    }

    public function has_config() {
        return false;
    }

    public function instance_allow_multiple() {
        return false;
    }

    function instance_allow_config() {
        return false;
    }

    public function specialization() {
    }

    public function applicable_formats() {
        return array('all'=>true);
    }

    /**
     * post install configurations
     *
     */
    public function after_install() {
    }

    /**
     * post delete configurations
     *
     */
    public function before_delete() {
    }

    function is_empty() {
        $this->get_content();
        return(empty($this->content->text) && empty($this->content->footer));
    }

    public function get_config_for_external() {
        // Return all settings for all users since it is safe (no private keys, etc..).
        $configs = !empty($this->config) ? $this->config : new stdClass();

        return (object) [
            'instance' => $configs,
            'plugin' => new stdClass(),
        ];
    }
}