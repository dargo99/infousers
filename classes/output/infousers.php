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
 * @copyright  2022 David Arias <dagoar08@gmail.com>
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
        $data->userfullname = "Pepito Perez";
        
        /**
        * I'm still looking for a way to get the data for these variables.
        *
        */
        $totalusers = 1;
        $editform = 1;

        /**
        * Get the custom fields.
        *
        */
        $fields = $DB->get_records('user_info_data');

        /**
        * Get user's id.
        *
        */
        $studentdata = $DB->get_records('user');
        foreach ($studentdata as $id) {
            $idusers = $id->id;
        }

        /**
        * Still need to fit the format...
        *
        */
        for ($i=0; $i < $totalusers; $i++) { 
            foreach ($studentdata as $id) {
                if ($idusers == $i && $editform == 1)
                $data->data .= $id->firstname;
                $data->data .= $id->email;
            }

            foreach ($fields as $id) {        
                if ($id->fieldid == 1) {
                    $data->data .= $id->data;
                }

                if ($id->fieldid == 3) {
                    $data->data .= $id->data;
                }
            }
        }
        
        return $data;
    }

}