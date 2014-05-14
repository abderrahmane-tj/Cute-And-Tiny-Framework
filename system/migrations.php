<?php
use \Illuminate\Database\Schema\Blueprint;

$schema = $capsule->schema();
if(!$schema->hasTable('users')){
	$schema->dropIfExists('users');
	$schema->create('users', function(Blueprint $table){
		$table->increments('id');
		$table->string('fullname');
		$table->string('username')->unique();
		$table->string('email')->unique();
		$table->string('password');
		$table->timestamps();
	});

	Users::unguard();

	Users::create(array(
		'fullname' => 'Abderrahmane TAHRI JOUTI',
		'username' => 'atj',
		'email' => 'atj@atj.atj',
		'password' => '123456',
	));

	Users::create(array(
		'fullname' => 'Abdoullah TAHRI JOUTI',
		'username' => 'atjtwo',
		'email' => 'atjtwo@atj.atj',
		'password' => '123456',
	));
}