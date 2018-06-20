<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FactSheetsRepository")
 */
class FactSheets
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tab_title;

    public function getId()
    {
        return $this->id;
    }

    public function getTabTitle(): ?string
    {
        return $this->tab_title;
    }

    public function setTabTitle(string $tab_title): self
    {
        $this->tab_title = $tab_title;

        return $this;
    }
}
