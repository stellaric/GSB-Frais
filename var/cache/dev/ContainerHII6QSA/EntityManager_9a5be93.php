<?php

namespace ContainerHII6QSA;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1e2cf = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerab259 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese5af7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getConnection', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getMetadataFactory', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getExpressionBuilder', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'beginTransaction', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getCache', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getCache();
    }

    public function transactional($func)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'transactional', array('func' => $func), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'wrapInTransaction', array('func' => $func), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'commit', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->commit();
    }

    public function rollback()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'rollback', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getClassMetadata', array('className' => $className), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'createQuery', array('dql' => $dql), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'createNamedQuery', array('name' => $name), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'createQueryBuilder', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'flush', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'clear', array('entityName' => $entityName), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->clear($entityName);
    }

    public function close()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'close', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->close();
    }

    public function persist($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'persist', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'remove', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'refresh', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'detach', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'merge', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getRepository', array('entityName' => $entityName), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'contains', array('entity' => $entity), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getEventManager', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getConfiguration', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'isOpen', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getUnitOfWork', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getProxyFactory', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'initializeObject', array('obj' => $obj), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'getFilters', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'isFiltersStateClean', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'hasFilters', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return $this->valueHolder1e2cf->hasFilters();
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

        $instance->initializerab259 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1e2cf) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1e2cf = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1e2cf->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__get', ['name' => $name], $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        if (isset(self::$publicPropertiese5af7[$name])) {
            return $this->valueHolder1e2cf->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e2cf;

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

        $targetObject = $this->valueHolder1e2cf;
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
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e2cf;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1e2cf;
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
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__isset', array('name' => $name), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e2cf;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1e2cf;
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
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__unset', array('name' => $name), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1e2cf;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1e2cf;
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
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__clone', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        $this->valueHolder1e2cf = clone $this->valueHolder1e2cf;
    }

    public function __sleep()
    {
        $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, '__sleep', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;

        return array('valueHolder1e2cf');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerab259 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerab259;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerab259 && ($this->initializerab259->__invoke($valueHolder1e2cf, $this, 'initializeProxy', array(), $this->initializerab259) || 1) && $this->valueHolder1e2cf = $valueHolder1e2cf;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1e2cf;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1e2cf;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
