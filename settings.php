<?php defined('_mcexec') or die();


// Database
$db_host  = 'localhost'; // '127.0.0.1'; // database host
$db_user  = 'major-game'; // 'root'; // database user
$db_pass  = '4653golf'; // user password
$db_table = 'major_game'; // database table

$contest_title = 'Picking The Masters';

// Headers
$row_headers = array( // headers for stat columns
  'Last Three Tournaments',
  'Last Three Majors',
  'Last Two of This Major'
);

$row_columns = array( // how many columns under each header
  3,
  3,
  3
);

$groups = array(
  array( 'id' => 'group_one',      'count' => 2, 'name' => 'American Association of Retired Persons (AARP)'),
  array( 'id' => 'group_two',      'count' => 2, 'name' => 'Buzz From Across The Pond'),
  array( 'id' => 'group_three',    'count' => 2, 'name' => 'Off The Boil?'),
  array( 'id' => 'group_four',     'count' => 2, 'name' => 'Climbing Up The OWGR… Again'),
  array( 'id' => 'group_five',     'count' => 2, 'name' => 'PGA Tour Canada Alumni'),
  array( 'id' => 'group_six',      'count' => 2, 'name' => '2013 &amp; 2014 Euro Tour #1s'),
  array( 'id' => 'group_seven',    'count' => 2, 'name' => 'Last Year\'s Runners-Up'),
  array( 'id' => 'group_eight',    'count' => 2, 'name' => 'OWGR #1 Vs #2'),
  array( 'id' => 'group_nine',     'count' => 2, 'name' => '2011 And 2012 Champions'),
  array( 'id' => 'group_ten',      'count' => 2, 'name' => 'Bombs Away!'),
  array( 'id' => 'group_eleven',   'count' => 4, 'name' => 'Hot American Rookies')
);