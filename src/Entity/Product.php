<?php

namespace App\Entity;
use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[ORM\Table(name: '`product`')]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    private ?string $label = null;

    private ?float $price = null;
    private ?float $quantity = null;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getLabel(): ?string
    {
        return $this->label;
    }
    public function getPrice(): ?float{
        return $this->price;
    }
    public function getQuantity(): ?float{
        return $this->quantity;
    }
    public function setQuantity(?float $quantity): void{
        $this->quantity = $quantity;
    }
    public function setLabel(?string $label): void{
        $this->label = $label;
    }
    public function setPrice(?float $price): void{
        $this->price = $price;
    }


}