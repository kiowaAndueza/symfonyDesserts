<?php

namespace ContainerNqwUFEM;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere3964 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer506c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa4004 = [
        
    ];

    public function getConnection()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getConnection', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getMetadataFactory', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getExpressionBuilder', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'beginTransaction', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getCache', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getCache();
    }

    public function transactional($func)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'transactional', array('func' => $func), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'wrapInTransaction', array('func' => $func), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'commit', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->commit();
    }

    public function rollback()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'rollback', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getClassMetadata', array('className' => $className), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'createQuery', array('dql' => $dql), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'createNamedQuery', array('name' => $name), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'createQueryBuilder', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'flush', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'clear', array('entityName' => $entityName), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->clear($entityName);
    }

    public function close()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'close', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->close();
    }

    public function persist($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'persist', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'remove', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'refresh', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'detach', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'merge', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getRepository', array('entityName' => $entityName), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'contains', array('entity' => $entity), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getEventManager', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getConfiguration', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'isOpen', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getUnitOfWork', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getProxyFactory', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'initializeObject', array('obj' => $obj), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'getFilters', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'isFiltersStateClean', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'hasFilters', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return $this->valueHoldere3964->hasFilters();
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

        $instance->initializer506c4 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHoldere3964) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere3964 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere3964->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__get', ['name' => $name], $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        if (isset(self::$publicPropertiesa4004[$name])) {
            return $this->valueHoldere3964->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3964;

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

        $targetObject = $this->valueHoldere3964;
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
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3964;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere3964;
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
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__isset', array('name' => $name), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3964;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere3964;
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
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__unset', array('name' => $name), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3964;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere3964;
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
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__clone', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        $this->valueHoldere3964 = clone $this->valueHoldere3964;
    }

    public function __sleep()
    {
        $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, '__sleep', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;

        return array('valueHoldere3964');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer506c4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer506c4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer506c4 && ($this->initializer506c4->__invoke($valueHoldere3964, $this, 'initializeProxy', array(), $this->initializer506c4) || 1) && $this->valueHoldere3964 = $valueHoldere3964;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3964;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3964;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
