<?php

namespace App\Entity;

use App\Repository\JobRepository;
use App\Traits\TimeStampTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JobRepository::class)]
class Job
{
    use TimeStampTrait; // Utilisation d'un trait pour gérer les timestamps de création et de mise à jour

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null; // Désignation du travail

    #[ORM\OneToMany(mappedBy: 'job', targetEntity: Editor::class)]
    private Collection $editors; // Collection d'éditeurs associés à ce travail

    public function __construct()
    {
        $this->editors = new ArrayCollection(); // Initialisation de la collection d'éditeurs dans le constructeur
    }

    public function getId(): ?int
    {
        return $this->id; // Méthode pour obtenir l'ID du travail
    }

    public function getDesignation(): ?string
    {
        return $this->designation; // Méthode pour obtenir la désignation du travail
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation; // Méthode pour définir la désignation du travail

        return $this;
    }

    /**
     * @return Collection<int, Editor>
     */
    public function getEditors(): Collection
    {
        return $this->editors; // Méthode pour obtenir la collection d'éditeurs associés à ce travail
    }

    public function addEditor(Editor $editor): self
    {
        if (!$this->editors->contains($editor)) {
            $this->editors->add($editor);
            $editor->setJob($this);
        }

        return $this;
    }

    public function removeEditor(Editor $editor): self
    {
        if ($this->editors->removeElement($editor)) {
            // set the owning side to null (unless already changed)
            if ($editor->getJob() === $this) {
                $editor->setJob(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->designation; // Méthode pour obtenir une représentation textuelle du travail (utile par exemple dans les formulaires)
    }
}
