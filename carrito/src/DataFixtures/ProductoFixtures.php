<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Producto;

class ProductoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
 {
 // creamos 10 productos
 for ($i = 0; $i < 10; $i++) {
 $producto = new Producto();
 $producto->setNombre('product '.$i);
 $producto->setDescripcion('i');
 $producto->setImagen('i');
 $producto->setPrecio(mt_rand(10, 100));
 $manager->persist($producto);
 }
 $manager->flush();
 }

}
