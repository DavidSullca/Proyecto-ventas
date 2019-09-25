<?php
namespace Entity;
/**
 * @Entity 
 **/
class Comidas{
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
	 * @Column(length=140)
	 */
	private $IdCursos;

	/**
	 * @var string
	 * @Column(length=140)
	 */
	private $Comida;

	/**
	 * @var string
	 * @Column(length=140)
	 */
	private $Precio;
	

    /**
     * @var string
     * @Column(length=140)
     */
    private $Img;

        /**
     * @var string
     * @Column(length=140)
     */
    private $Descripcion;


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
     * Set idCursos.
     *
     * @param string $idCursos
     *
     * @return Comidas
     */
    public function setIdCursos($idCursos)
    {
        $this->IdCursos = $idCursos;

        return $this;
    }

    /**
     * Get idCursos.
     *
     * @return string
     */
    public function getIdCursos()
    {
        return $this->IdCursos;
    }

    /**
     * Set comida.
     *
     * @param string $comida
     *
     * @return Comidas
     */
    public function setComida($comida)
    {
        $this->Comida = $comida;

        return $this;
    }

    /**
     * Get comida.
     *
     * @return string
     */
    public function getComida()
    {
        return $this->Comida;
    }

    /**
     * Set precio.
     *
     * @param string $precio
     *
     * @return Comidas
     */
    public function setPrecio($precio)
    {
        $this->Precio = $precio;

        return $this;
    }

    /**
     * Get precio.
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->Precio;
    }

    /**
     * Get img.
     *
     * @return string
     */
    public function getImg()
    {
        return $this->Img;
    }

    /**
     * Get descripcion.
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set img.
     *
     * @param string $img
     *
     * @return Comidas
     */
    public function setImg($img)
    {
        $this->Img = $img;

        return $this;
    }

    /**
     * Set descripcion.
     *
     * @param string $descripcion
     *
     * @return Comidas
     */
    public function setDescripcion($descripcion)
    {
        $this->Descripcion = $descripcion;

        return $this;
    }
}
