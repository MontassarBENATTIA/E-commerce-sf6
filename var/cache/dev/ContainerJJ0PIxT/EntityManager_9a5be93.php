<?php

namespace ContainerJJ0PIxT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5982d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer72ac2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties256a2 = [
        
    ];

    public function getConnection()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getConnection', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getMetadataFactory', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getExpressionBuilder', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'beginTransaction', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getCache', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'transactional', array('func' => $func), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'commit', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->commit();
    }

    public function rollback()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'rollback', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getClassMetadata', array('className' => $className), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'createQuery', array('dql' => $dql), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'createNamedQuery', array('name' => $name), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'createQueryBuilder', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'flush', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'clear', array('entityName' => $entityName), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->clear($entityName);
    }

    public function close()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'close', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->close();
    }

    public function persist($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'persist', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'remove', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'refresh', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'detach', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'merge', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'contains', array('entity' => $entity), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getEventManager', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getConfiguration', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'isOpen', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getUnitOfWork', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getProxyFactory', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'initializeObject', array('obj' => $obj), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'getFilters', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'isFiltersStateClean', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'hasFilters', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return $this->valueHolder5982d->hasFilters();
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

        $instance->initializer72ac2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder5982d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5982d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5982d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__get', ['name' => $name], $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        if (isset(self::$publicProperties256a2[$name])) {
            return $this->valueHolder5982d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5982d;

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

        $targetObject = $this->valueHolder5982d;
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
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5982d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5982d;
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
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__isset', array('name' => $name), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5982d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5982d;
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
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__unset', array('name' => $name), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5982d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5982d;
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
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__clone', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        $this->valueHolder5982d = clone $this->valueHolder5982d;
    }

    public function __sleep()
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__sleep', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        return array('valueHolder5982d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer72ac2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer72ac2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'initializeProxy', array(), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5982d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5982d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
