<?php

namespace Vicente\Pdo\Model;

use JsonSerializable;

class Student implements JsonSerializable
{
    private ?int $id;
    private string $name;

    public function __construct(?int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function jsonSerialize()
    {
        return ["id"=>$this->id,"name"=>$this->name];
    }
}