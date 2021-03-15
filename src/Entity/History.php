<?php

namespace App\Entity;

use App\Repository\HistoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HistoryRepository::class)
 */
class History
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Joueur::class, mappedBy="history" , cascade={"all"}, fetch="EAGER")
     */
    private $joueurs;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateHistory;

    public function __construct()
    {
        $this->joueurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Joueur[]
     */
    public function getJoueurs(): Collection
    {
        return $this->joueurs;
    }

    public function addJoueur(Joueur $joueur): self
    {
        if (!$this->joueurs->contains($joueur)) {
            $this->joueurs[] = $joueur;
            $joueur->setHistory($this);
        }

        return $this;
    }

    public function removeJoueur(Joueur $joueur): self
    {
        if ($this->joueurs->removeElement($joueur)) {
            // set the owning side to null (unless already changed)
            if ($joueur->getHistory() === $this) {
                $joueur->setHistory(null);
            }
        }

        return $this;
    }

    public function getDateHistory(): ?\DateTimeInterface
    {
        return $this->dateHistory;
    }

    public function setDateHistory(\DateTimeInterface $dateHistory): self
    {
        $this->dateHistory = $dateHistory;

        return $this;
    }
}
