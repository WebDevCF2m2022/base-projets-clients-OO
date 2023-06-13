<?php

namespace models\Mappings;
use models\Abstracts\AbstractMapping;
class CategoriesMapping extends AbstractMapping
{
    protected int $idCateg;
    protected string $nameCateg;
    protected string $textCateg;

    // for TheUser M2M
    protected string $users;

    // getters

    public function getIdCateg(): int
    {
        return $this->idCateg;
    }

    public function getNameCateg(): string
    {
        return $this->nameCateg;
    }


    public function getTextCateg(): string
    {
        return $this->textCateg;
    }

    public function getUsers(): string
    {
        return $this->users;
    }

    // setters

    public function setIdCateg(int $idCateg): void
    {
        $this->idCateg = $idCateg;
    }

    public function setNameCateg(string $nameCateg): void
    {
        $this->nameCateg = $nameCateg;
    }


    public function setTextCateg(string $textCateg): void
    {
        $this->textCateg = $textCateg;
    }

    public function setUsers(string $users): void
    {
        $this->users = $users;
    }

}