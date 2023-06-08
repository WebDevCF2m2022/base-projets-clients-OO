<?php

namespace models\Mappings;

// Les models de type Mapping héritent de la classe AbstractMapping
use models\Abstracts\AbstractMapping;

class TestMapping extends AbstractMapping
{
    // Déclaration des propriétés
    private int $idTest;
    private string $titreTest;
    private string $slugifyTest;
    private string $datetimeTest;
    private string $textTest;
    private bool $publiTest;

    // Déclaration des getters
    public function getIdTest(): int
    {
        return $this->idTest;
    }

    public function getTitreTest(): string
    {
        return $this->titreTest;
    }

    public function getSlugifyTest(): string
    {
        return $this->slugifyTest;
    }

    public function getDatetimeTest(): string
    {
        return $this->datetimeTest;
    }

    public function getTextTest(): string
    {
        return $this->textTest;
    }

    public function getPubliTest(): bool
    {
        return $this->publiTest;
    }

    // Déclaration des setters

    public function setIdTest(int $idTest): void
    {
        $this->idTest = $idTest;
    }

    public function setTitreTest(string $titreTest): void
    {
        $this->titreTest = $titreTest;
    }

    public function setSlugifyTest(string $slugifyTest): void
    {
        $this->slugifyTest = $slugifyTest;
    }

    public function setDatetimeTest(string $datetimeTest): void
    {
        $this->datetimeTest = $datetimeTest;
    }

    public function setTextTest(string $textTest): void
    {
        $this->textTest = $textTest;
    }

    public function setPubliTest(bool $publiTest): void
    {
        $this->publiTest = $publiTest;
    }

}