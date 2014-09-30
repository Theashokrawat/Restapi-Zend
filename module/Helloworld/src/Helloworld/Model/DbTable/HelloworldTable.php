<?php
namespace Helloworld\Model\DbTable;

use MCommons\Model\DbTable\AbstractDbTable;


class HelloworldTable extends AbstractDbTable {
	protected $_table_name = "album";
	protected $_array_object_prototype = 'Helloworld\Model\Helloworld';
}
