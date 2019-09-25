<?php
namespace Entity;
/**
 * @Entity
 **/   

class Usuarios{
	/**
	 *	@var int 
	 *
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 * */
	private $Id;

	/**
	 * var string
	 * Column(length=140,name="text_large")
	 */
	//private $IdCurso;

	/**
	 * @var string
	 * @Column(length=140)
	 */
	private $Correo_Electronico;

	/**
	 * @var string
	 * @Column(length=140)
	 */
	private $Contrasena;

 



////////////////////////////////////////////////////////////////

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
     * Set idCurso.
     *
     * @param string $idCurso
     *
     * @return Usuarios
     */
    public function setIdCurso($idCurso)
    {
        $this->IdCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso.
     *
     * @return string
     */
    public function getIdCurso()
    {
        return $this->IdCurso;
    }

    /**
     * Set correoElectronico.
     *
     * @param string $correoElectronico
     *
     * @return Usuarios
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->Correo_Electronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico.
     *
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->Correo_Electronico;
    }

    /**
     * Set contrasena.
     *
     * @param string $contrasena
     *
     * @return Usuarios
     */
    public function setContrasena($contrasena)
    {
        $this->Contrasena = $contrasena;

        return $this;
    }

    /**
     * Get contrasena.
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->Contrasena;
    }
}
