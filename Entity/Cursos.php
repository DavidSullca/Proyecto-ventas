<?php
namespace Entity;
/**
 * @Entity 
 **/
class Cursos{
	/**
	 *	@var int 
	 *
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 * */
	private $Id;

	/**
	 * @var string
	 * @Column(length=140,name="NombreDelCurso")
	 */
	private $Nombre;

	/**
	 * @var string
	 * @Column(length=140)
	 */
	private $Anio;

    /**
    * @OneToMany(targetEntity="Usuarios",mappedBy="curso")
    *
    */
    private $usuarios;

////////////////////////////////////////////////////////
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set nombre.
     *
     * @param string $nombre
     *
     * @return Cursos
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre.
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set año.
     *
     * @param string $año
     *
     * @return Cursos
     */
    public function setAño($año)
    {
        $this->Año = $año;

        return $this;
    }

    /**
     * Get año.
     *
     * @return string
     */
    public function getAño()
    {
        return $this->Año;
    }

    /**
     * Set anio.
     *
     * @param string $anio
     *
     * @return Cursos
     */
    public function setAnio($anio)
    {
        $this->Anio = $anio;

        return $this;
    }

    /**
     * Get anio.
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->Anio;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuarios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuario.
     *
     * @param \Entity\Usuarios $usuario
     *
     * @return Cursos
     */
    public function addUsuario(\Entity\Usuarios $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario.
     *
     * @param \Entity\Usuarios $usuario
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeUsuario(\Entity\Usuarios $usuario)
    {
        return $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
