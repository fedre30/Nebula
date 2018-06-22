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
     * @ORM\Column(type="string", length=110)
     */
    private $tab_title;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $main_title;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $video_description_title;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $video_description_text;

    /**
     * @ORM\Column(type="string", length=2048)
     */
    private $video_src;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $video_alt;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $explanation_title;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $explanation_text;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $scientific_fact_title;

    /**
     * @ORM\Column(type="string", length=3000)
     */
    private $scientific_fact_text;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\HomeQuestions", mappedBy="Page", cascade={"persist", "remove"})
     */
    private $homeQuestions;


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

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMainTitle(): ?string
    {
        return $this->main_title;
    }

    public function setMainTitle(string $main_title): self
    {
        $this->main_title = $main_title;

        return $this;
    }

    public function getVideoDescriptionTitle(): ?string
    {
        return $this->video_description_title;
    }

    public function setVideoDescriptionTitle(string $video_description_title): self
    {
        $this->video_description_title = $video_description_title;

        return $this;
    }

    public function getVideoDescriptionText(): ?string
    {
        return $this->video_description_text;
    }

    public function setVideoDescriptionText(string $video_description_text): self
    {
        $this->video_description_text = $video_description_text;

        return $this;
    }

    public function getVideoSrc(): ?string
    {
        return $this->video_src;
    }

    public function setVideoSrc(string $video_src): self
    {
        $this->video_src = $video_src;

        return $this;
    }

    public function getVideoAlt(): ?string
    {
        return $this->video_alt;
    }

    public function setVideoAlt(string $video_alt): self
    {
        $this->video_alt = $video_alt;

        return $this;
    }

    public function getExplanationTitle(): ?string
    {
        return $this->explanation_title;
    }

    public function setExplanationTitle(string $explanation_title): self
    {
        $this->explanation_title = $explanation_title;

        return $this;
    }

    public function getExplanationText(): ?string
    {
        return $this->explanation_text;
    }

    public function setExplanationText(string $explanation_text): self
    {
        $this->explanation_text = $explanation_text;

        return $this;
    }

    public function getScientificFactTitle(): ?string
    {
        return $this->scientific_fact_title;
    }

    public function setScientificFactTitle(string $scientific_fact_title): self
    {
        $this->scientific_fact_title = $scientific_fact_title;

        return $this;
    }

    public function getScientificFactText(): ?string
    {
        return $this->scientific_fact_text;
    }

    public function setScientificFactText(string $scientific_fact_text): self
    {
        $this->scientific_fact_text = $scientific_fact_text;

        return $this;
    }

    public function getHomeQuestions(): ?HomeQuestions
    {
        return $this->homeQuestions;
    }

    public function setHomeQuestions(HomeQuestions $homeQuestions): self
    {
        $this->homeQuestions = $homeQuestions;

        // set the owning side of the relation if necessary
        if ($this !== $homeQuestions->getPage()) {
            $homeQuestions->setPage($this);
        }

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getMainTitle();
    }

}