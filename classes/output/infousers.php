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

        

        $student = $DB->get_records('user');
        foreach ($student as $id) {
            # code...
        }

        //$fields = $DB->get_records('user_info_data');

        return $data;



       /*
        * Still need get some data...
        *
        $totalusers = "numero total de usuarios registrados";
        $idusers = "array con el id de todos los usuarios";
        $editform = "el campo está habilitado o no";

        for ($i=0; $i < $totalusers; $i++) { 
            if($idusers == $idfield && $editform == 1) {
                $data = $ifield->name . "<br>";
            }

            if($idusers == $idfield && $editform == 1) {
                $data = $ifield->email . "<br>";
            }

            if($idusers == $idfield && $editform == 1) {
                $data = $ifield->status . "<br>";
            }

            if($idusers == $idfield && $editform == 1) {
                $data = $ifield->career . "<br>";
            }

            $data = "<hr>";

            $idfield = i;
        }

        */

    }
}
