<?php

namespace block_infousers\output;

defined('MOODLE_INTERNAL') || die;

use plugin_renderer_base;

class renderer extends plugin_renderer_base {
    public function render_infousers(infousers $infousers) {
        return $this->render_from_template('block_infousers/infousers', $infousers->export_for_template($this));
    }
}
