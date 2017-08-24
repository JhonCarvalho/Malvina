<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 18/08/2017
 * Time: 10:50
 */

namespace Application\Service;


use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceManager;

class EquipeService
{
    public static $entity = 'Application\Entity\Equipe';

    protected $sm;
    protected $em;

    public function __construct(ServiceManager $serviceManager, EntityManager $entityManger)
    {
      $this->sm = $serviceManager;
        $this->em = $entityManger;
    }
    public function getServiceManager()
    {
        return $this->sm;
    }

    public function getEntityManager()
    {
        return $this->em;
    }

    public function getRepository(){
        return $this->getEntityManager()->getRepository(self::$entity);
    }

    public function inserir($data){
        $this->getEntityManager()->persist($data);
        return $this->getEntityManager()->flush();
    }

}