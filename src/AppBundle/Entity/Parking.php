<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Parking
 *
 * @ORM\Table(name="parking")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParkingRepository")
 */
class Parking
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="Le nom du parking n'est pas renseigné.")
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     * @Assert\NotBlank(message="L'adresse n'est pas renseignée.")
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var string
     * @Assert\GreaterThan(value=0, message="Le code postal est invalide.")
     * @Assert\LessThan(value=99999, message="Le code postal est invalide.")
     * @Assert\NotBlank(message="Le code postal n'est pas renseigné.")
     * @ORM\Column(name="code", type="decimal", precision=10, scale=0)
     */
    private $code;

    /**
     * @var string
     * @Assert\NotBlank(message="Le pays n'est pas renseigné.")
     * 
     * @ORM\Column(name="pays", type="string", length=50)
     */
    private $pays;

    /**
     * @var string
     * @Assert\NotBlank(message="La latitude n'est pas renseignée.")
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=0)
     */
    private $latitude;

    /**
     * @var string
     * @Assert\NotBlank(message="La longitude n'est pas renseignée.")
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=0)
     */
    private $longitude;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Parking
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Parking
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Parking
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Parking
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Parking
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Parking
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}

