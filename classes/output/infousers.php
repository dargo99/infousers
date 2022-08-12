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
 * Class containing data for infousers block.
 *
 * @package    block_infousers
 * @copyright  2018 Mihail Geshoski <mihail@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_infousers\output;

defined('MOODLE_INTERNAL') || die();

use renderable;
use renderer_base;
use templatable;

/**
 * Class containing data for infousers block.
 *
 * @copyright  2018 Mihail Geshoski <mihail@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class infousers implements renderable, templatable {


    protected $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function export_for_template(renderer_base $output) {
        global $USER, $OUTPUT, $DB;

        $data = new \stdClass();

        if (!isset($this->config->display_picture) || $this->config->display_picture == 1) {
            $data->userpicture = $OUTPUT->user_picture($USER, array('class' => 'userpicture'));
        }

        $data->userfullname = fullname($USER);

        if (!isset($this->config->display_country) || $this->config->display_country == 1) {
            $countries = get_string_manager()->get_list_of_countries(true);
            if (isset($countries[$USER->country])) {
                $data->usercountry = $countries[$USER->country];
            }
        }

        if (!isset($this->config->display_email) || $this->config->display_email == 1) {
            $data->useremail = obfuscate_mailto($USER->email, '');
        }

        // Field status current user.
        if (!empty($this->config->display_status) && $customfields->fieldid == 1 && $USER->id == $customfields->id) {
            $current_user->status = $customfields->data;
        }

        // Field career current user.
        if (!empty($this->config->display_career) && $customfields->fieldid == 3 && $USER->id == $customfields->id) {
            $current_user->career = $customfields->data;
        }

        return $data;
    }
}
