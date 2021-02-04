<?php
namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="test", schema="www")
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     */
    private $no;
}
