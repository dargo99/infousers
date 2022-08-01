<?php
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('block_aboutstudent/showcourses', 
    get_string('showcourses', 'block_aboutstudent'), 
    get_string('showusersinstead', 'block_aboutstudent'),
    0));
}