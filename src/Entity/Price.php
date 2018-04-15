<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Table(name="price")
 * @ORM\Entity(repositoryClass="App\Repository\PriceRepository")
 * @Vich\Uploadable
 */
class Price
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
     * @Vich\UploadableField(mapping="price_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $altPl;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $altEn;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $textPl;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $textEn;

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

    public function setAltPl(string $altPl): void
    {
        $this->altPl = $altPl;
    }

    public function getAltPl(): ?string
    {
        return $this->altPl;
    }

    public function setAltEn(string $altEn): void
    {
        $this->altEn = $altEn;
    }

    public function getAltEn(): ?string
    {
        return $this->altEn;
    }

    public function setTextPl(string $textPl): void
    {
        $this->textPl = $textPl;
    }

    public function getTextPl(): ?string
    {
        return $this->textPl;
    }

    public function setTextEn(string $textEn): void
    {
        $this->textEn = $textEn;
    }

    public function getTextEn(): ?string
    {
        return $this->textEn;
    }
}