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
 * Plugin version and other meta-data are defined here.
 *
 * @package    local_och5p
 * @copyright  2020 Farbod Zamani Boroujeni, ELAN e.V.
 * @author     Farbod Zamani Boroujeni <zamani@elan-ev.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

// Defining this plug-in metadata.
$plugin->component = 'local_och5p';
$plugin->release = '2.1.1-r1';
$plugin->version =  2022011200;
$plugin->maturity = MATURITY_STABLE;
$plugin->requires = 2019111800;
$plugin->dependencies = array(
    'mod_hvp' => 2021061100, // Since we are supporting Moodle 3.8 and above.
    'block_opencast' => 2021052000 // Since we are supporting Moodle 3.8 and above.
);
