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
 * bsgridfablib settings.
 *
 * @package   atto_bsgridfablib
 * @copyright  2015 Peter Feigl <peter.feigl@nexoid.at>,
 *             Guy Thomas <gthomas@moodlerooms.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_bsgridfablib', new lang_string('pluginname', 'atto_bsgridfablib')));

$settings = new admin_settingpage('atto_bsgridfablib_settings', new lang_string('settings', 'atto_bsgridfablib'));
if ($ADMIN->fulltree) {
	// An option setting
	$settings->add(new admin_setting_configmulticheckbox(
        'atto_bsgridfablib/enabled_templates',
        get_string('enabled_templates', 'atto_bsgridfablib'),
        get_string('enabled_templates_desc', 'atto_bsgridfablib'),
        array(
            'col2'   => 'checked',
            'col2responsive' => 'checked',
            'col3'   => 'checked',
            'col1x3' => 'checked',
            'col3x1' => 'checked',
            'col4'   => 'checked',
            'col1x5' => 'checked',
            'col5x1' => 'checked',
            'col1x11' => 'checked',
            'col11x1' => 'checked',
            'col6'   => 'checked'
        ),
        array(
            'col2' => get_string('col2', 'atto_bsgridfablib'),
            'col2responsive' => get_string('col2responsive', 'atto_bsgridfablib'),
            'col3' => get_string('col3', 'atto_bsgridfablib'),
            'col1x3' => get_string('col1x3', 'atto_bsgridfablib'),
            'col3x1' => get_string('col3x1', 'atto_bsgridfablib'),
            'col4' => get_string('col4', 'atto_bsgridfablib'),
            'col1x5' => get_string('col1x5', 'atto_bsgridfablib'),
            'col5x1' => get_string('col5x1', 'atto_bsgridfablib'),
            'col1x11' => get_string('col1x11', 'atto_bsgridfablib'),
            'col11x1' => get_string('col11x1', 'atto_bsgridfablib'),
            'col6' => get_string('col6', 'atto_bsgridfablib')
        )));
}
