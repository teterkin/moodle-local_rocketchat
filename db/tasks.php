<?php

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
* Web service local plugin template external functions and service definitions.
*
* @package    local_rocketchat
* @copyright  2016 GetSmarter {@link http://www.getsmarter.co.za}
* @license    MIT License
*/

// Define an array of tasks
$tasks = array(
    array(
        'classname' => 'local_rocketchat\task\sync_students',
        'blocking' => 0,
        'minute' => '01',
        'hour' => '*',
        'day' => '*',
        'dayofweek' => '*',
        'month' => '*'
        )
    );