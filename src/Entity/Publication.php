<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="id_perssonne", columns={"id_perssonne"})})
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="publication", type="string", length=255, nullable=false)
     * @Assert\NotBlank (message="veuillez remplir tous les champs")
     */
    private $publication;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     * @Assert\NotBlank (message="veuillez remplir tous les champs")
     */
    private $titre;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrCommentaire", type="integer", nullable=true)
     */
    private $nbrcommentaire;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=true)
     */
    private $image;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrLike", type="integer", nullable=true)
     */
    private $nbrlike;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_perssonne", referencedColumnName="id")
     * })
     */
    private $idPerssonne;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublication(): ?string
    {
        return $this->publication;
    }

    public function setPublication(string $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNbrcommentaire(): ?int
    {
        return $this->nbrcommentaire;
    }

    public function setNbrcommentaire(?int $nbrcommentaire): self
    {
        $this->nbrcommentaire = $nbrcommentaire;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNbrlike(): ?int
    {
        return $this->nbrlike;
    }

    public function setNbrlike(?int $nbrlike): self
    {
        $this->nbrlike = $nbrlike;

        return $this;
    }

    public function getIdPerssonne(): ?Personne
    {
        return $this->idPerssonne;
    }

    public function setIdPerssonne(?Personne $idPerssonne): self
    {
        $this->idPerssonne = $idPerssonne;

        return $this;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->titre;
    }   

}
