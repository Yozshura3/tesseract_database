<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity()
 */

class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $content;

    /**
     * @ORM\Column(type="decimal", precision= 10, scale=2)
     */
    private $price;


    /**
     * @ORM\Column(type="boolean", options={"default":"0"})
     */
    private $instock;
}