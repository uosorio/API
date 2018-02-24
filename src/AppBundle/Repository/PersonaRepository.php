<?php

namespace AppBundle\Repository;

/**
 * PersonaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PersonaRepository extends \Doctrine\ORM\EntityRepository
{
    
    public function buscarmayores(){
        $query="select p from AppBundle:Persona as p where p.edad > 20";
                
        return $this->getEntityManager('ursula')->createQuery($query)->getResult();
    }
}