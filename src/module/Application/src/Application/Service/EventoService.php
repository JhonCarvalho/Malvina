<?php
/**
 * Created by PhpStorm.
 * User: jhon.carvalho
 * Date: 18/08/2017
 * Time: 10:50
 */

namespace Application\Service;


use Application\Entity\Evento;
use Doctrine\ORM\EntityManager;
use Zend\ServiceManager\ServiceManager;
use Zend\Stdlib\Hydrator\ClassMethods;

class EventoService
{
    public static $entity = 'Application\Entity\Evento';

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

    public function getRepository()
    {
        return $this->getEntityManager()->getRepository(self::$entity);
    }

    public function inserir($data)
    {
        $this->getEntityManager()->persist($data);
        return $this->getEntityManager()->flush();
    }

    public function retornaById($id)
    {
        $evento = new Evento();
        $evento = $this->em->find(self::$entity, $id);

        return $evento;

    }

    public function findAll()
    {

        $lts = $this->em->getRepository(self::$entity)->findAll();
        $hydrator = new ClassMethods(true);
        $evento = array();

        foreach ($lts as $e) {
            //var_dump($e->getDtEvento());
            $evento [] = $hydrator->extract($e);
        }

        //var_dump($evento);exit;
        echo json_encode($evento);
    }
}