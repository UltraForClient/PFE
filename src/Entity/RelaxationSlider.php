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
     * @ORM\Column(type="text")
     * @var string
     */
    private $des;

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

    public function setDes(string $des): void
    {
        $this->des = $des;
    }

    public function getDes(): ?string
    {
        return $this->des;
    }
}