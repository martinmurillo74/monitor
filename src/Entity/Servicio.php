<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio", indexes={@ORM\Index(name="IDX_CB86F22A8790FA60", columns={"tipocli"})})
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="NROCASO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $nrocaso = NULL;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CLIENTEID", referencedColumnName="ID")
     * })
     */
    private $clienteid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nombre = NULL;

    /**
     * @var \Tiposervicio
     *
     * @ORM\ManyToOne(targetEntity="Tiposervicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="TIPOID", referencedColumnName="ID")
     * })
     */
    private $tipoid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TIPO", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $tipo = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DENUNCIANTE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $denunciante = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOMINIO", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $dominio = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MARCA", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $marca = NULL;
    
    /**
     * @var \Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marcaid", referencedColumnName="ID")
     * })
     */
    private $marcaid = NULL;


    /**
     * @var string|null
     *
     * @ORM\Column(name="COLOR", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $color = NULL;
    
    /**
     * @var \Color
     *
     * @ORM\ManyToOne(targetEntity="Color")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colorid", referencedColumnName="ID")
     * })
     */
    private $colorid = NULL;    
    

    /**
     * @var string|null
     *
     * @ORM\Column(name="FALLA", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $falla = NULL;
    
    /**
     * @var \Falla
     *
     * @ORM\ManyToOne(targetEntity="Falla")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fallaid", referencedColumnName="ID")
     * })
     */
    private $fallaid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CALLE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $calle = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMERO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numero = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DEPTO", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $depto = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CASA", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $casa = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOTE", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $lote = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MANZANA", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $manzana = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOCALIDAD", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $localidad = NULL;
    
    /**
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidadid", referencedColumnName="ID")
     * })
     */
    private $localidadid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $provincia = NULL;
    
    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provinciaid", referencedColumnName="ID")
     * })
     */
    private $provinciaid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DESTINO", type="string", length=80, nullable=true, options={"default"="NULL"})
     */
    private $destino = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOCALIDADDEST", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $localidaddest = NULL;
    
    
    /**
     * @var \Localidad
     *
     * @ORM\ManyToOne(targetEntity="Localidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localidaddestid", referencedColumnName="ID")
     * })
     */
    private $localidaddestid = NULL;
    

    /**
     * @var int|null
     *
     * @ORM\Column(name="KILOMETROS", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kilometros = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEFONO", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $telefono = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PISO", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $piso = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROVINCIADEST", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $provinciadest = NULL;
    
 
    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provinciadestid", referencedColumnName="ID")
     * })
     */
    private $provinciadestid = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSLLAMADA", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsllamada = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSASIGNACION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsasignacion = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSARRIBO", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsarribo = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSFINALIZACION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsfinalizacion = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ESTADO", type="string", length=1, nullable=true, options={"default"="NULL"})
     */
    private $estado = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="MES", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $mes = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ANIO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $anio = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OPINI", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $opini = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OPFIN", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $opfin = NULL;

    /**
     * @ORM\OneToMany(targetEntity="ServicioMovil", mappedBy="servicio", cascade={"all"}, orphanRemoval=true)
     */
    private $movilId;

    /**
     * @var \Chofer
     *
     * @ORM\ManyToOne(targetEntity="Chofer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="choferid", referencedColumnName="ID")
     * })
     */
    private $choferid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOVIL", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $movil = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CHOFER", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $chofer = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMINI", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmini = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMFIN", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmfin = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CODAUT", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $codaut = NULL;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresaid", referencedColumnName="ID")
     * })
     */
    private $empresaid = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="EMPRESA", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $empresa = NULL;

    /**
     * @var \Distancia
     *
     * @ORM\ManyToOne(targetEntity="Distancia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipodist", referencedColumnName="id")
     * })
     */
    private $tipodist = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBS", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $obs = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABRLOC1", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $abrloc1 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABRLOC2", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $abrloc2 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOVILNRO", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $movilnro = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABRCHOF", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $abrchof = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SERVFIN", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $servfin = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IMPCOB", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $impcob = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMREAL", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmreal = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMAJU1", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmaju1 = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMAJU2", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmaju2 = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMTOT", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmtot = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PERF", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $perf = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSLIQ", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsliq = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MODELO", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $modelo = NULL;
    
    
    /**
     * @var \Modelo
     *
     * @ORM\ManyToOne(targetEntity="Modelo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="modeloid", referencedColumnName="ID")
     * })
     */
    private $modeloid = NULL;
    

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSALTA", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsalta = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="INACTIVO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $inactivo = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CIERMEC", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ciermec = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="MECFECHA", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $mecfecha = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="OPCIERRE", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $opcierre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CERRADO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $cerrado = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSPROGRAMACION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsprogramacion = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="IMPBASE", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $impbase = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="SEGUNDOS", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $segundos = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TABLAMODIFICADA", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $tablamodificada = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USUARIO", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $usuario = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="REVISAR", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $revisar = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PORQUE", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $porque = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="FACTURAID", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $facturaid = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="CIERMOV", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $ciermov = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OTROS", type="string", length=254, nullable=true, options={"default"="NULL"})
     */
    private $otros = NULL;

    /**
     * @var \Tipocliente
     *
     * @ORM\ManyToOne(targetEntity="Tipocliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipocli", referencedColumnName="ID")
     * })
     */
    private $tipocli;
    
    /**
     * @var \Tipoestado
     *
     * @ORM\ManyToOne(targetEntity="Tipoestado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipoestado", referencedColumnName="ID")
     * })
     */
    private $tipoestado;    
    
    public function __construct()
    {
        $this->movilId = new ArrayCollection();
    }
    

    public function getNrocaso()
    {
        return $this->nrocaso.'-'.$this->mes.'-'.$this->anio;
    }

    public function setNrocaso(?int $nrocaso): self
    {
        $this->nrocaso = $nrocaso;

        return $this;
    }

    public function getClienteid()
    {
        return $this->clienteid;
    }

    public function setClienteid($clienteid): self
    {
        $this->clienteid = $clienteid;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTipoid()
    {
        return $this->tipoid;
    }

    public function setTipoid($tipoid)
    {
        $this->tipoid = $tipoid;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDenunciante(): ?string
    {
        return $this->denunciante;
    }

    public function setDenunciante(?string $denunciante): self
    {
        $this->denunciante = $denunciante;

        return $this;
    }

    public function getDominio(): ?string
    {
        return $this->dominio;
    }

    public function setDominio(?string $dominio): self
    {
        $this->dominio = $dominio;

        return $this;
    }

    public function getMarca(): ?string
    {
        return $this->marca;
    }

    public function setMarca(?string $marca): self
    {
        $this->marca = $marca;

        return $this;
    }
    
    public function getMarcaid()
    {
        return $this->marcaid;
    }

    public function setMarcaid($marcaid): self
    {
        $this->marcaid = $marcaid;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }
    
    public function getColorid()
    {
        return $this->colorid;
    }

    public function setColorid($colorid): self
    {
        $this->colorid = $colorid;

        return $this;
    }

    public function getFalla(): ?string
    {
        return $this->falla;
    }

    public function setFalla(?string $falla): self
    {
        $this->falla = $falla;

        return $this;
    }
    
    public function getFallaid()
    {
        return $this->fallaid;
    }

    public function setFallaid($fallaid): self
    {
        $this->fallaid = $fallaid;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(?string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getDepto(): ?string
    {
        return $this->depto;
    }

    public function setDepto(?string $depto): self
    {
        $this->depto = $depto;

        return $this;
    }

    public function getCasa(): ?string
    {
        return $this->casa;
    }

    public function setCasa(?string $casa): self
    {
        $this->casa = $casa;

        return $this;
    }

    public function getLote(): ?string
    {
        return $this->lote;
    }

    public function setLote(?string $lote): self
    {
        $this->lote = $lote;

        return $this;
    }

    public function getManzana(): ?string
    {
        return $this->manzana;
    }

    public function setManzana(?string $manzana): self
    {
        $this->manzana = $manzana;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }
    
    public function getLocalidadid()
    {
        return $this->localidadid;
    }

    public function setLocalidadid($localidadid): self
    {
        $this->localidadid = $localidadid;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }
    
    public function getProvinciaid()
    {
        return $this->provinciaid;
    }

    public function setProvinciaid($provinciaid): self
    {
        $this->provinciaid = $provinciaid;

        return $this;
    }    

    public function getDestino(): ?string
    {
        return $this->destino;
    }

    public function setDestino(?string $destino): self
    {
        $this->destino = $destino;

        return $this;
    }

    public function getLocalidaddest(): ?string
    {
        return $this->localidaddest;
    }

    public function setLocalidaddest(?string $localidaddest): self
    {
        $this->localidaddest = $localidaddest;

        return $this;
    }
    
    public function getLocalidaddestid()
    {
        return $this->localidaddestid;
    }

    public function setLocalidaddestid($localidaddestid)
    {
        $this->localidaddestid = $localidaddestid;

        return $this;
    }

    public function getKilometros(): ?int
    {
        return $this->kilometros;
    }

    public function setKilometros(?int $kilometros): self
    {
        $this->kilometros = $kilometros;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPiso(): ?string
    {
        return $this->piso;
    }

    public function setPiso(?string $piso): self
    {
        $this->piso = $piso;

        return $this;
    }

    public function getProvinciadest(): ?string
    {
        return $this->provinciadest;
    }

    public function setProvinciadest(?string $provinciadest): self
    {
        $this->provinciadest = $provinciadest;

        return $this;
    }
    
    public function getProvinciadestid()
    {
        return $this->provinciadestid;
    }

    public function setProvinciadestid($provinciadestid)
    {
        $this->provinciadestid = $provinciadestid;

        return $this;
    }

    public function getHsllamada(): ?\DateTimeInterface
    {
        return $this->hsllamada;
    }

    public function setHsllamada(?\DateTimeInterface $hsllamada): self
    {
        $this->hsllamada = $hsllamada;

        return $this;
    }

    public function getHsasignacion(): ?\DateTimeInterface
    {
        return $this->hsasignacion;
    }

    public function setHsasignacion(?\DateTimeInterface $hsasignacion): self
    {
        $this->hsasignacion = $hsasignacion;

        return $this;
    }

    public function getHsarribo(): ?\DateTimeInterface
    {
        return $this->hsarribo;
    }

    public function setHsarribo(?\DateTimeInterface $hsarribo): self
    {
        $this->hsarribo = $hsarribo;

        return $this;
    }

    public function getHsfinalizacion(): ?\DateTimeInterface
    {
        return $this->hsfinalizacion;
    }

    public function setHsfinalizacion(?\DateTimeInterface $hsfinalizacion): self
    {
        $this->hsfinalizacion = $hsfinalizacion;

        return $this;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(?string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getMes(): ?int
    {
        return $this->mes;
    }

    public function setMes(?int $mes): self
    {
        $this->mes = $mes;

        return $this;
    }

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(?int $anio): self
    {
        $this->anio = $anio;

        return $this;
    }

    public function getOpini(): ?string
    {
        return $this->opini;
    }

    public function setOpini(?string $opini): self
    {
        $this->opini = $opini;

        return $this;
    }

    public function getOpfin(): ?string
    {
        return $this->opfin;
    }

    public function setOpfin(?string $opfin): self
    {
        $this->opfin = $opfin;

        return $this;
    }

    /**
     * @return Collection|ServicioMovil[]
     */
    public function getMovilId(): Collection
    {
        return $this->movilId;
    }
    
    public function setMovilId($movilId) {
        $this->movilId = $movilId;
        foreach ($movilId as $item) {
            $item->setServicio($this);
        }
    }

    public function addMovilId(ServicioMovil $movilId): self
    {
        if (!$this->movilId->contains($movilId)) {
            $this->movilId[] = $movilId;
            $movilId->setServicio($this);
        }

        return $this;
    }

    public function removeMovilId(ServicioMovil $movilId): self
    {
        if ($this->movilId->contains($movilId)) {
            $this->movilId->removeElement($movilId);
            // set the owning side to null (unless already changed)
            if ($movilId->getServicio() === $this) {
                $movilId->setServicio(null);
            }
        }

        return $this;
    }

    public function getChoferid()
    {
        return $this->choferid;
    }

    public function setChoferid($choferid): self
    {
        $this->choferid = $choferid;

        return $this;
    }

    public function getMovil(): ?string
    {
        return $this->movil;
    }

    public function setMovil(?string $movil): self
    {
        $this->movil = $movil;

        return $this;
    }

    public function getChofer(): ?string
    {
        return $this->chofer;
    }

    public function setChofer(?string $chofer): self
    {
        $this->chofer = $chofer;

        return $this;
    }

    public function getKmini(): ?int
    {
        return $this->kmini;
    }

    public function setKmini(?int $kmini): self
    {
        $this->kmini = $kmini;

        return $this;
    }

    public function getKmfin(): ?int
    {
        return $this->kmfin;
    }

    public function setKmfin(?int $kmfin): self
    {
        $this->kmfin = $kmfin;

        return $this;
    }

    public function getCodaut(): ?string
    {
        return $this->codaut;
    }

    public function setCodaut(?string $codaut): self
    {
        $this->codaut = $codaut;

        return $this;
    }

    public function getEmpresaid()
    {
        return $this->empresaid;
    }

    public function setEmpresaid($empresaid): self
    {
        $this->empresaid = $empresaid;

        return $this;
    }

    public function getEmpresa(): ?string
    {
        return $this->empresa;
    }

    public function setEmpresa(?string $empresa): self
    {
        $this->empresa = $empresa;

        return $this;
    }

    public function getTipodist()
    {
        return $this->tipodist;
    }

    public function setTipodist($tipodist)
    {
        $this->tipodist = $tipodist;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getAbrloc1(): ?string
    {
        return $this->abrloc1;
    }

    public function setAbrloc1(?string $abrloc1): self
    {
        $this->abrloc1 = $abrloc1;

        return $this;
    }

    public function getAbrloc2(): ?string
    {
        return $this->abrloc2;
    }

    public function setAbrloc2(?string $abrloc2): self
    {
        $this->abrloc2 = $abrloc2;

        return $this;
    }

    public function getMovilnro(): ?string
    {
        return $this->movilnro;
    }

    public function setMovilnro(?string $movilnro): self
    {
        $this->movilnro = $movilnro;

        return $this;
    }

    public function getAbrchof(): ?string
    {
        return $this->abrchof;
    }

    public function setAbrchof(?string $abrchof): self
    {
        $this->abrchof = $abrchof;

        return $this;
    }

    public function getServfin(): ?int
    {
        return $this->servfin;
    }

    public function setServfin(?int $servfin): self
    {
        $this->servfin = $servfin;

        return $this;
    }

    public function getImpcob(): ?float
    {
        return $this->impcob;
    }

    public function setImpcob(?float $impcob): self
    {
        $this->impcob = $impcob;

        return $this;
    }

    public function getKmreal(): ?int
    {
        return $this->kmreal;
    }

    public function setKmreal(?int $kmreal): self
    {
        $this->kmreal = $kmreal;

        return $this;
    }

    public function getKmaju1(): ?int
    {
        return $this->kmaju1;
    }

    public function setKmaju1(?int $kmaju1): self
    {
        $this->kmaju1 = $kmaju1;

        return $this;
    }

    public function getKmaju2(): ?int
    {
        return $this->kmaju2;
    }

    public function setKmaju2(?int $kmaju2): self
    {
        $this->kmaju2 = $kmaju2;

        return $this;
    }

    public function getKmtot(): ?int
    {
        return $this->kmtot;
    }

    public function setKmtot(?int $kmtot): self
    {
        $this->kmtot = $kmtot;

        return $this;
    }

    public function getPerf(): ?string
    {
        return $this->perf;
    }

    public function setPerf(?string $perf): self
    {
        $this->perf = $perf;

        return $this;
    }

    public function getHsliq(): ?\DateTimeInterface
    {
        return $this->hsliq;
    }

    public function setHsliq(?\DateTimeInterface $hsliq): self
    {
        $this->hsliq = $hsliq;

        return $this;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(?string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getModeloid()
    {
        return $this->modeloid;
    }

    public function setModeloid($modeloid): self
    {
        $this->modeloid = $modeloid;

        return $this;
    }    
    
    public function getHsalta(): ?\DateTimeInterface
    {
        return $this->hsalta;
    }

    public function setHsalta(?\DateTimeInterface $hsalta): self
    {
        $this->hsalta = $hsalta;

        return $this;
    }

    public function getInactivo(): ?int
    {
        return $this->inactivo;
    }

    public function setInactivo(?int $inactivo): self
    {
        $this->inactivo = $inactivo;

        return $this;
    }

    public function getCiermec(): ?int
    {
        return $this->ciermec;
    }

    public function setCiermec(?int $ciermec): self
    {
        $this->ciermec = $ciermec;

        return $this;
    }

    public function getMecfecha(): ?\DateTimeInterface
    {
        return $this->mecfecha;
    }

    public function setMecfecha(?\DateTimeInterface $mecfecha): self
    {
        $this->mecfecha = $mecfecha;

        return $this;
    }

    public function getOpcierre(): ?int
    {
        return $this->opcierre;
    }

    public function setOpcierre(?int $opcierre): self
    {
        $this->opcierre = $opcierre;

        return $this;
    }

    public function getCerrado(): ?int
    {
        return $this->cerrado;
    }

    public function setCerrado(?int $cerrado): self
    {
        $this->cerrado = $cerrado;

        return $this;
    }

    public function getHsprogramacion(): ?\DateTimeInterface
    {
        return $this->hsprogramacion;
    }

    public function setHsprogramacion(?\DateTimeInterface $hsprogramacion): self
    {
        $this->hsprogramacion = $hsprogramacion;

        return $this;
    }

    public function getImpbase(): ?float
    {
        return $this->impbase;
    }

    public function setImpbase(?float $impbase): self
    {
        $this->impbase = $impbase;

        return $this;
    }

    public function getSegundos(): ?int
    {
        return $this->segundos;
    }

    public function setSegundos(?int $segundos): self
    {
        $this->segundos = $segundos;

        return $this;
    }

    public function getTablamodificada(): ?int
    {
        return $this->tablamodificada;
    }

    public function setTablamodificada(?int $tablamodificada): self
    {
        $this->tablamodificada = $tablamodificada;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getRevisar(): ?int
    {
        return $this->revisar;
    }

    public function setRevisar(?int $revisar): self
    {
        $this->revisar = $revisar;

        return $this;
    }

    public function getPorque(): ?string
    {
        return $this->porque;
    }

    public function setPorque(?string $porque): self
    {
        $this->porque = $porque;

        return $this;
    }

    public function getFacturaid(): ?int
    {
        return $this->facturaid;
    }

    public function setFacturaid(?int $facturaid): self
    {
        $this->facturaid = $facturaid;

        return $this;
    }

    public function getCiermov(): ?int
    {
        return $this->ciermov;
    }

    public function setCiermov(?int $ciermov): self
    {
        $this->ciermov = $ciermov;

        return $this;
    }

    public function getOtros(): ?string
    {
        return $this->otros;
    }

    public function setOtros(?string $otros): self
    {
        $this->otros = $otros;

        return $this;
    }

    public function getTipocli(): ?Tipocliente
    {
        return $this->tipocli;
    }

    public function setTipocli(?Tipocliente $tipocli): self
    {
        $this->tipocli = $tipocli;

        return $this;
    }

    public function getTipoestado(): ?Tipoestado
    {
        return $this->tipoestado;
    }

    public function setTipoestado(?Tipoestado $tipoestado): self
    {
        $this->tipoestado = $tipoestado;

        return $this;
    }

}
