<?php
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   Portions of this program are derived from publicly licensed software
 *   projects including, but not limited to phpBB, Magelo Clone, 
 *   EQEmulator, EQEditor, and Allakhazam Clone.
 *
 *                                  Author:
 *                           Maudigan(Airwalking) 
 *
 *   September 28, 2014 - Maudigan
 *      added code to monitor database performance
 *   May 24, 2016 - Maudigan
 *      general code cleanup, whitespace correction, removed old comments,
 *      organized some code. A lot has changed, but not much functionally
 *      do a compare to 2.41 to see the differences. 
 *      Implemented new database wrapper.
 *   March 22, 2020 - Maudigan
 *     impemented common.php
 ***************************************************************************/
 
 
/*********************************************
                 INCLUDES
*********************************************/ 
//define this as an entry point to unlock includes
if ( !defined('INCHARBROWSER') ) 
{
   define('INCHARBROWSER', true);
}
include_once(__DIR__ . "/include/common.php");

//no point in having the api on this page
if (checkParm('api'))  $cb_error->message_die($language['MESSAGE_ERROR'],$language['MESSAGE_NOAPI']);
 
 
/*********************************************
               DROP HEADER
*********************************************/
$d_title = " - ".$language['PAGE_TITLES_HELP'];
include(__DIR__ . "/include/header.php");
 
 
/*********************************************
              POPULATE BODY
*********************************************/
$cb_template->set_filenames(array(
  'help' => 'help_body.tpl')
);

$cb_template->assign_vars(array(  
   'TITLE' => $mytitle,
   'VERSION' => $version,
   'L_VERSION' => $language['HELP_VERSION'],
   'L_BY' => $language['HELP_BY'],
   'L_HELP_TEXT' => $language['HELP_TEXT'],
   'L_HELP' => $language['HELP_HELP'])
);
 
 
/*********************************************
           OUTPUT BODY AND FOOTER
*********************************************/
$cb_template->pparse('help');

$cb_template->destroy();

include(__DIR__ . "/include/footer.php");
?>