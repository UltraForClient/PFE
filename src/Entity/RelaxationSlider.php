<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Table(name="relaxation_slider")
 * @ORM\Entity(repositoryClass="App\Repository\RelaxationSliderRepository")
 * @Vich\Uploadable
 */
class RelaxationSlider
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
    private $image;

    /**
     * @Vich\UploadableField(mapping="relaxation_slider_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $alt;

    /**
     * @ORM\ManyToOne(targetEntity="Relaxation", inversedBy="sliders")
     * @ORM\JoinColumn(name="relaxation_slider_id", referencedColumnName="id")
     */
    private $relaxation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setImage(string $image = null): void
    {
        $this->image = $image;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImageFile(File $imageFile): void
    {
        $this->imageFile = $imageFile;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setRelaxation(Relaxation $relaxation): void
    {
        $this->relaxation = $relaxation;
    }

    public function getRelaxation(): ?Relaxation
    {
        return $this->relaxation;
    }

    public function __toString(): string
    {
        return $this->alt;
    }
}