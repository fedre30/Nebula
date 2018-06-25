<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HomeQuestionsRepository")
 */
class HomeQuestions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=160)
     */
    private $Question;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\FactSheets", inversedBy="homeQuestions", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Page;

    public function getId()
    {
        return $this->id;
    }

    public function getQuestion(): ?string
    {
        return $this->Question;
    }

    public function setQuestion(string $Question): self
    {
        $this->Question = $Question;

        return $this;
    }

    public function getPage(): ?FactSheets
    {
        return $this->Page;
    }

    public function setPage(FactSheets $Page): self
    {
        $this->Page = $Page;

        return $this;
    }
    public function __toString()
    {
        return (string) $this->getQuestion();
    }
}
