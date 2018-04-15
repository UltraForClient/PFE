<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Table(name="environment_image")
 * @ORM\Entity(repositoryClass="App\Repository\EnvironmentImageRepository")
 * @Vich\Uploadable
 */
class EnvironmentImage
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
     * @Vich\UploadableField(mapping="environment_image", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $altPl;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $altEn;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $titlePl;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $titleEn;


    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $timePl;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $timeEn;

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

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $link;

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

    public function setTitlePl(string $titlePl): void
    {
        $this->titlePl = $titlePl;
    }

    public function getTitlePl(): ?string
    {
        return $this->titlePl;
    }

    public function setTitleEn(string $titleEn): void
    {
        $this->titleEn = $titleEn;
    }

    public function getTitleEn(): ?string
    {
        return $this->titleEn;
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

    public function setTimePl(string $timePl): void
    {
        $this->timePl = $timePl;
    }

    public function getTimePl(): ?string
    {
        return $this->timePl;
    }

    public function setTimeEn(string $timeEn): void
    {
        $this->timeEn = $timeEn;
    }

    public function getTimeEn(): ?string
    {
        return $this->timeEn;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }
}