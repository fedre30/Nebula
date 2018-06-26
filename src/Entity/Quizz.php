<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuizzRepository")
 */
class Quizz
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

    /**
     * @ORM\Column(type="string", length=110)
     */
    private $firstAnswer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $firstAnswerCorrection;

    /**
     * @ORM\Column(type="string", length=110)
     */
    private $secondAnswer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $secondAnswerCorrection;

    /**
     * @ORM\Column(type="string", length=110)
     */
    private $thirdAnswer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $thirdAnswerCorrection;

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

    public function getFirstAnswer(): ?string
    {
        return $this->firstAnswer;
    }

    public function setFirstAnswer(string $firstAnswer): self
    {
        $this->firstAnswer = $firstAnswer;

        return $this;
    }

    public function getFirstAnswerCorrection(): ?bool
    {
        return $this->firstAnswerCorrection;
    }

    public function setFirstAnswerCorrection(bool $firstAnswerCorrection): self
    {
        $this->firstAnswerCorrection = $firstAnswerCorrection;

        return $this;
    }

    public function getSecondAnswer(): ?string
    {
        return $this->secondAnswer;
    }

    public function setSecondAnswer(string $secondAnswer): self
    {
        $this->secondAnswer = $secondAnswer;

        return $this;
    }

    public function getSecondAnswerCorrection(): ?bool
    {
        return $this->secondAnswerCorrection;
    }

    public function setSecondAnswerCorrection(bool $secondAnswerCorrection): self
    {
        $this->secondAnswerCorrection = $secondAnswerCorrection;

        return $this;
    }

    public function getThirdAnswer(): ?string
    {
        return $this->thirdAnswer;
    }

    public function setThirdAnswer(string $thirdAnswer): self
    {
        $this->thirdAnswer = $thirdAnswer;

        return $this;
    }

    public function getThirdAnswerCorrection(): ?bool
    {
        return $this->thirdAnswerCorrection;
    }

    public function setThirdAnswerCorrection(bool $thirdAnswerCorrection): self
    {
        $this->thirdAnswerCorrection = $thirdAnswerCorrection;

        return $this;
    }
}
