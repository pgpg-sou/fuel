<?php

namespace Fuel\Migrations;

class Create_blogs
{
	public function up()
	{
		\DBUtil::create_table('blogs', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'title' => array('constraint' => 255, 'type' => 'varchar'),
			'body' => array('constraint' => 255, 'type' => 'varchar'),
			'tags' => array('constraint' => 255, 'type' => 'varchar'),
			'created_at' => array('type' => 'date'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('blogs');
	}
}