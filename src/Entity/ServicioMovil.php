<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicioMovil
 *
 * @ORM\Table(name="servicio_movil", indexes={@ORM\Index(name="fk_servicio_movil_movil1_idx", columns={"movil_id"}), @ORM\Index(name="fk_servicio_movil_servicio1_idx", columns={"servicio_id"})})
 * @ORM\Entity
 */
class ServicioMovil
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
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio_id", referencedColumnName="ID")
     * })
     */
    private $servicio;

    /**
     * @var \Movil
     *
     * @ORM\ManyToOne(targetEntity="Movil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movil_id", referencedColumnName="ID")
     * })
     */
    private $movil;

   public function __toString() {
        return ''.$this->getMovil();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServicio(): ?Servicio
    {
        return $this->servicio;
    }

    public function setServicio(?Servicio $servicio): self
    {
        $this->servicio = $servicio;

        return $this;
    }

    public function getMovil(): ?Movil
    {
        return $this->movil;
    }

    public function setMovil(?Movil $movil): self
    {
        $this->movil = $movil;

        return $this;
    }

    


}
