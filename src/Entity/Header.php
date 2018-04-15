<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Table(name="header")
 * @ORM\Entity(repositoryClass="App\Repository\HeaderRepository")
 * @Vich\Uploadable
 */
class Header
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
    private $backgroundImage;

    /**
     * @Vich\UploadableField(mapping="header_background_images", fileNameProperty="background_image")
     * @var File
     */
    private $backgroundImageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $titleImage;

    /**
     * @Vich\UploadableField(mapping="header_title_images", fileNameProperty="title_image")
     * @var File
     */
    private $titleImageFile;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $titleAltPl;

    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $titleAltEn;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setBackgroundImage(string $backgroundImage): void
    {
        $this->backgroundImage = $backgroundImage;
    }

    public function getBackgroundImage(): ?string
    {
        return $this->backgroundImage;
    }

    public function setBackgroundImageFile(File $backgroundImageFile = null): void
    {
        $this->backgroundImageFile = $backgroundImageFile;
    }

    public function getBackgroundImageFile(): ?File
    {
        return $this->backgroundImageFile;
    }

    public function setTitleImageFile(File $titleImageFile = null): void
    {
        $this->titleImageFile = $titleImageFile;
    }

    public function getTitleImageFile(): ?File
    {
        return $this->titleImageFile;
    }

    public function setTitleImage(string $titleImage): void
    {
        $this->titleImage = $titleImage;
    }

    public function getTitleImage(): ?string
    {
        return $this->titleImage;
    }

    public function setTitleAltPl(string $titleAltPl): void
    {
        $this->titleAltPl = $titleAltPl;
    }

    public function getTitleAltPl(): ?string
    {
        return $this->titleAltPl;
    }

    public function setTitleAltEn(string $titleAltEn): void
    {
        $this->titleAltEn = $titleAltEn;
    }

    public function getTitleAltEn(): ?string
    {
        return $this->titleAltEn;
    }

}