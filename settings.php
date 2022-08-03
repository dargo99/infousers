<?php
/*
if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('block_aboutstudent/showcourses', 
    get_string('showcourses', 'block_aboutstudent'), 
    get_string('showusersinstead', 'block_aboutstudent'),
    0));
}
*/

$settings->add(new admin_setting_heading(
    'headerconfig',
    get_string('headerconfig', 'block_aboutstudent'),
    get_string('descconfig', 'block_aboutstudent')
));

$settings->add(new admin_setting_configcheckbox(
    'aboutstudent/Allow_HTML',
    get_string('labelallowhtml', 'block_aboutstudent'),
    get_string('descallowhtml', 'block_aboutstudent'),
    '0'
));