<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Table(name="environment_text")
 * @ORM\Entity(repositoryClass="App\Repository\EnvironmentTextRepository")
 * @Vich\Uploadable
 */
class EnvironmentText
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int
     */
    private $id;

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