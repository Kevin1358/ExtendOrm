<?php
namespace Kevin1358\ExtendOrm\Attribute;
use Attribute;

#[Attribute()]
class Table{
    public string $table;
    public function __construct(string $table) {
        $this->table = $table;
    }
}
?>