<?php

namespace ContainerDCnD1aU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6f159 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer746f7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties412fa = [
        
    ];

    public function getConnection()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getConnection', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getMetadataFactory', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getExpressionBuilder', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'beginTransaction', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getCache', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getCache();
    }

    public function transactional($func)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'transactional', array('func' => $func), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'wrapInTransaction', array('func' => $func), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'commit', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->commit();
    }

    public function rollback()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'rollback', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getClassMetadata', array('className' => $className), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'createQuery', array('dql' => $dql), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'createNamedQuery', array('name' => $name), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'createQueryBuilder', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'flush', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'clear', array('entityName' => $entityName), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->clear($entityName);
    }

    public function close()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'close', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->close();
    }

    public function persist($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'persist', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'remove', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'refresh', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'detach', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'merge', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getRepository', array('entityName' => $entityName), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'contains', array('entity' => $entity), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getEventManager', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getConfiguration', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'isOpen', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getUnitOfWork', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getProxyFactory', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'initializeObject', array('obj' => $obj), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'getFilters', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'isFiltersStateClean', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'hasFilters', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return $this->valueHolder6f159->hasFilters();
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

        $instance->initializer746f7 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder6f159) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6f159 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6f159->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__get', ['name' => $name], $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        if (isset(self::$publicProperties412fa[$name])) {
            return $this->valueHolder6f159->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f159;

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

        $targetObject = $this->valueHolder6f159;
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
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f159;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6f159;
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
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__isset', array('name' => $name), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f159;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6f159;
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
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__unset', array('name' => $name), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6f159;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6f159;
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
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__clone', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        $this->valueHolder6f159 = clone $this->valueHolder6f159;
    }

    public function __sleep()
    {
        $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, '__sleep', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;

        return array('valueHolder6f159');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer746f7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer746f7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer746f7 && ($this->initializer746f7->__invoke($valueHolder6f159, $this, 'initializeProxy', array(), $this->initializer746f7) || 1) && $this->valueHolder6f159 = $valueHolder6f159;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6f159;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6f159;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
