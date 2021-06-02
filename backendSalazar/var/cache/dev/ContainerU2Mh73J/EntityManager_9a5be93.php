<?php

namespace ContainerU2Mh73J;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc6dbc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc36cd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8d02f = [
        
    ];

    public function getConnection()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getConnection', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getMetadataFactory', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getExpressionBuilder', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'beginTransaction', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getCache', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'transactional', array('func' => $func), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->transactional($func);
    }

    public function commit()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'commit', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->commit();
    }

    public function rollback()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'rollback', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getClassMetadata', array('className' => $className), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'createQuery', array('dql' => $dql), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'createNamedQuery', array('name' => $name), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'createQueryBuilder', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'flush', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'clear', array('entityName' => $entityName), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->clear($entityName);
    }

    public function close()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'close', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->close();
    }

    public function persist($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'persist', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'remove', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'refresh', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'detach', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'merge', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'contains', array('entity' => $entity), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getEventManager', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getConfiguration', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'isOpen', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getUnitOfWork', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getProxyFactory', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'initializeObject', array('obj' => $obj), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'getFilters', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'isFiltersStateClean', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'hasFilters', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return $this->valueHolderc6dbc->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerc36cd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc6dbc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc6dbc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc6dbc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__get', ['name' => $name], $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        if (isset(self::$publicProperties8d02f[$name])) {
            return $this->valueHolderc6dbc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6dbc;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc6dbc;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6dbc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc6dbc;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__isset', array('name' => $name), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6dbc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc6dbc;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__unset', array('name' => $name), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc6dbc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc6dbc;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__clone', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        $this->valueHolderc6dbc = clone $this->valueHolderc6dbc;
    }

    public function __sleep()
    {
        $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, '__sleep', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;

        return array('valueHolderc6dbc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc36cd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc36cd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc36cd && ($this->initializerc36cd->__invoke($valueHolderc6dbc, $this, 'initializeProxy', array(), $this->initializerc36cd) || 1) && $this->valueHolderc6dbc = $valueHolderc6dbc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc6dbc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc6dbc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
