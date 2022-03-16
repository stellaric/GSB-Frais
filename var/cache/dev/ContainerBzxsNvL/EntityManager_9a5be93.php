<?php

namespace ContainerBzxsNvL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfb182 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb78a5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties04495 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getConnection', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getMetadataFactory', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getExpressionBuilder', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'beginTransaction', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getCache', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'transactional', array('func' => $func), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'commit', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->commit();
    }

    public function rollback()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'rollback', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getClassMetadata', array('className' => $className), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'createQuery', array('dql' => $dql), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'createNamedQuery', array('name' => $name), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'createQueryBuilder', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'flush', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'clear', array('entityName' => $entityName), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->clear($entityName);
    }

    public function close()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'close', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->close();
    }

    public function persist($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'persist', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'remove', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'refresh', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'detach', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'merge', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'contains', array('entity' => $entity), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getEventManager', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getConfiguration', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'isOpen', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getUnitOfWork', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getProxyFactory', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'initializeObject', array('obj' => $obj), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'getFilters', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'isFiltersStateClean', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'hasFilters', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return $this->valueHolderfb182->hasFilters();
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

        $instance->initializerb78a5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfb182) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb182 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfb182->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__get', ['name' => $name], $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        if (isset(self::$publicProperties04495[$name])) {
            return $this->valueHolderfb182->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb182;

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

        $targetObject = $this->valueHolderfb182;
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
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb182;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfb182;
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
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__isset', array('name' => $name), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb182;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfb182;
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
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__unset', array('name' => $name), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb182;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfb182;
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
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__clone', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        $this->valueHolderfb182 = clone $this->valueHolderfb182;
    }

    public function __sleep()
    {
        $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, '__sleep', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;

        return array('valueHolderfb182');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb78a5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb78a5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb78a5 && ($this->initializerb78a5->__invoke($valueHolderfb182, $this, 'initializeProxy', array(), $this->initializerb78a5) || 1) && $this->valueHolderfb182 = $valueHolderfb182;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb182;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb182;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
