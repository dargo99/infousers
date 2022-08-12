<?php

//Este bloque lo estoy construyendo en base al código del bloque "My profile" -dargo

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
        $this->content->text = 'Hola mundo';
        $this->content->footer = 'bai';

        return $this->content;
    }

    public function applicable_formats() {
        return array('all'=>true);
    }
}