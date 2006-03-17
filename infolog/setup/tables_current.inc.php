<?php
  /**************************************************************************\
  * eGroupWare                                                               *
  * http://www.egroupware.org                                                *
  * --------------------------------------------                             *
  *  This program is free software; you can redistribute it and/or modify it *
  *  under the terms of the GNU General Public License as published by the   *
  *  Free Software Foundation; either version 2 of the License, or (at your  *
  *  option) any later version.                                              *
  \**************************************************************************/

  /* $Id$ */

	$phpgw_baseline = array(
		'egw_infolog' => array(
			'fd' => array(
				'info_id' => array('type' => 'auto','nullable' => False),
				'info_type' => array('type' => 'varchar','precision' => '40','nullable' => False,'default' => 'task'),
				'info_from' => array('type' => 'varchar','precision' => '255'),
				'info_addr' => array('type' => 'varchar','precision' => '255'),
				'info_subject' => array('type' => 'varchar','precision' => '255'),
				'info_des' => array('type' => 'text'),
				'info_owner' => array('type' => 'int','precision' => '4','nullable' => False),
				'info_responsible' => array('type' => 'varchar','precision' => '255','nullable' => False,'default' => '0'),
				'info_access' => array('type' => 'varchar','precision' => '10','default' => 'public'),
				'info_cat' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_datemodified' => array('type' => 'int','precision' => '8','nullable' => False),
				'info_startdate' => array('type' => 'int','precision' => '8','nullable' => False,'default' => '0'),
				'info_enddate' => array('type' => 'int','precision' => '8','nullable' => False,'default' => '0'),
				'info_id_parent' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_planned_time' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_used_time' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_status' => array('type' => 'varchar','precision' => '40','default' => 'done'),
				'info_confirm' => array('type' => 'varchar','precision' => '10','default' => 'not'),
				'info_modifier' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_link_id' => array('type' => 'int','precision' => '4','nullable' => False,'default' => '0'),
				'info_priority' => array('type' => 'int','precision' => '2','default' => '1'),
				'pl_id' => array('type' => 'int','precision' => '4'),
				'info_price' => array('type' => 'float','precision' => '8'),
				'info_percent' => array('type' => 'int','precision' => '2','default' => '0'),
				'info_datecompleted' => array('type' => 'int','precision' => '8'),
				'info_location' => array('type' => 'varchar','precision' => '255')
			),
			'pk' => array('info_id'),
			'fk' => array(),
			'ix' => array(array('info_owner','info_responsible','info_status','info_startdate'),array('info_id_parent','info_owner','info_responsible','info_status','info_startdate')),
			'uc' => array()
		),
		'egw_infolog_extra' => array(
			'fd' => array(
				'info_id' => array('type' => 'int','precision' => '4','nullable' => False),
				'info_extra_name' => array('type' => 'varchar','precision' => '32','nullable' => False),
				'info_extra_value' => array('type' => 'varchar','precision' => '255','nullable' => False,'default' => '')
			),
			'pk' => array('info_id','info_extra_name'),
			'fk' => array(),
			'ix' => array(),
			'uc' => array()
		)
	);
