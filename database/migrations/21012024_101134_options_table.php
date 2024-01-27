<?php

use OceanWT\Database\Migration;

return new class extends Migration{
 /**
  * @var string
  */
 protected $table="options";

 /**
  * @return void
  */
 public function up(): void
 {
  $this->int("opt_id");
  $this->string("opt_name")->length(255);
  $this->enum("type",["post","page"]);
  $this->primaryKey('opt_id');
  $this->uniqueKey("opt_name");
  $this->create();
 }

 /**
  * @return array
  */
 public function down(): array
 {
   return $this->drop();
 }
};
