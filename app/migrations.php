<?php
use \Illuminate\Database\Schema\Blueprint;

//$schema = $capsule->schema();
//
//$faker = Faker\Factory::create();
//$sentences = array(
//  $faker->sentence(4),
//  $faker->sentence(5),
//  $faker->sentence(4),
//  $faker->sentence(5),
//  $faker->sentence(6),
//  $faker->sentence(4)
//);
//Classe::unguard();
//for ($i = 0; $i < 100; $i++)
//{
//  try{
//    Classe::create(array(
//      'name' => $sentences[$faker->randomNumber(0,5)],
//      'description' => $faker->text(2000),
//      'level' => $faker->numberBetween(1,5)
//    ));
//  }catch (\Illuminate\Database\QueryException $qe){
//
//  }
//}

//$schema->dropIfExists('users');
//$schema->create('users', function(Blueprint $table){
//  $table->increments('id');
//  $table->string('fullname');
//  $table->string('username')->unique();
//  $table->string('email')->unique();
//  $table->string('password');
//  $table->unsignedInteger('classe_id');
//  $table->tinyInteger('auth_level',false,true);
//  $table->timestamps();
//});

//$schema->dropIfExists('classes');
//$schema->create('classes', function(Blueprint $table){
//  $table->increments('id');
//  $table->string('name');
//  $table->longText('description');
// $table->tinyInteger('level');
//  $table->timestamps();
//});

//$schema->dropIfExists('modules');
//$schema->create('modules', function(Blueprint $table){
//  $table->increments('id');
//  $table->string('name');
//  $table->longText('description');
//  $table->unsignedInteger('classe_id');
//  $table->timestamps();
//});

//$schema->dropIfExists('chapters');
//$schema->create('chapters', function(Blueprint $table){
//  $table->increments('id');
//  $table->string('name');
//  $table->string('description');
//  $table->string('course');
//  $table->string('td');
//  $table->unsignedInteger('module_id');
//  $table->timestamps();
//});