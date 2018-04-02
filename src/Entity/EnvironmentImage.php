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
    private $alt;


    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $title;


    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $time;


    /**
     * @ORM\Column(type="text")
     * @var string
     */
    private $text;


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

    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
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

    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    public function getTime(): ?string
    {
        return $this->time;
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