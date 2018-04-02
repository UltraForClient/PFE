<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="relaxation")
 * @ORM\Entity(repositoryClass="App\Repository\RelaxationRepository")
 */
class Relaxation
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $text;

    /**
     * @ORM\OneToMany(
     *     targetEntity="RelaxationSlider",
     *     mappedBy="relaxation",
     *     orphanRemoval=true,
     *     cascade="persist")
     * )
     */
    private $sliders;

    public function __construct()
    {
        $this->sliders = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setSliders(RelaxationSlider $sliders): void
    {
        $this->sliders->clear();
        $this->sliders = new ArrayCollection($sliders);
        $sliders->setRelaxation($this);
    }

    public function addSlider(RelaxationSlider $slider): Relaxation
    {
        $this->sliders[] = $slider;

        return $this;
    }

    public function removeSlider(RelaxationSlider $slider): bool
    {
        return $this->sliders->removeElement($slider);
    }

    public function getSliders(): Collection
    {
        return $this->sliders;
    }
}