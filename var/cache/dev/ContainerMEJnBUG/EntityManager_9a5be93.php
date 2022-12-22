<?php

namespace ContainerMEJnBUG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder74ed3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer901f3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2a5ae = [
        
    ];

    public function getConnection()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getConnection', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getMetadataFactory', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getExpressionBuilder', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'beginTransaction', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getCache', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'transactional', array('func' => $func), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'commit', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->commit();
    }

    public function rollback()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'rollback', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getClassMetadata', array('className' => $className), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'createQuery', array('dql' => $dql), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'createNamedQuery', array('name' => $name), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'createQueryBuilder', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'flush', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'clear', array('entityName' => $entityName), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->clear($entityName);
    }

    public function close()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'close', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->close();
    }

    public function persist($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'persist', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'remove', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'refresh', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'detach', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'merge', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'contains', array('entity' => $entity), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getEventManager', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getConfiguration', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'isOpen', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getUnitOfWork', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getProxyFactory', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'initializeObject', array('obj' => $obj), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'getFilters', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'isFiltersStateClean', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'hasFilters', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return $this->valueHolder74ed3->hasFilters();
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

        $instance->initializer901f3 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder74ed3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder74ed3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder74ed3->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__get', ['name' => $name], $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        if (isset(self::$publicProperties2a5ae[$name])) {
            return $this->valueHolder74ed3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ed3;

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

        $targetObject = $this->valueHolder74ed3;
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
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ed3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder74ed3;
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
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__isset', array('name' => $name), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ed3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder74ed3;
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
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__unset', array('name' => $name), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder74ed3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder74ed3;
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
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__clone', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        $this->valueHolder74ed3 = clone $this->valueHolder74ed3;
    }

    public function __sleep()
    {
        $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, '__sleep', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;

        return array('valueHolder74ed3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer901f3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer901f3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer901f3 && ($this->initializer901f3->__invoke($valueHolder74ed3, $this, 'initializeProxy', array(), $this->initializer901f3) || 1) && $this->valueHolder74ed3 = $valueHolder74ed3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder74ed3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder74ed3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
