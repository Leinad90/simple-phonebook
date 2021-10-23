<?php

namespace ContainerJGU5wxq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8475c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7db0a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertieseb5b6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getConnection', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getMetadataFactory', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getExpressionBuilder', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'beginTransaction', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getCache', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'transactional', array('func' => $func), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'commit', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->commit();
    }

    public function rollback()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'rollback', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'createQuery', array('dql' => $dql), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'createQueryBuilder', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'flush', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'clear', array('entityName' => $entityName), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'close', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->close();
    }

    public function persist($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'persist', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'remove', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'refresh', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'detach', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'merge', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'contains', array('entity' => $entity), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getEventManager', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getConfiguration', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'isOpen', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getUnitOfWork', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getProxyFactory', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'getFilters', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'isFiltersStateClean', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'hasFilters', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return $this->valueHolder8475c->hasFilters();
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

        $instance->initializer7db0a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8475c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8475c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8475c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__get', ['name' => $name], $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        if (isset(self::$publicPropertieseb5b6[$name])) {
            return $this->valueHolder8475c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8475c;

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

        $targetObject = $this->valueHolder8475c;
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
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8475c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8475c;
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
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__isset', array('name' => $name), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8475c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8475c;
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
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__unset', array('name' => $name), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8475c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8475c;
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
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__clone', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        $this->valueHolder8475c = clone $this->valueHolder8475c;
    }

    public function __sleep()
    {
        $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, '__sleep', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;

        return array('valueHolder8475c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7db0a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7db0a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7db0a && ($this->initializer7db0a->__invoke($valueHolder8475c, $this, 'initializeProxy', array(), $this->initializer7db0a) || 1) && $this->valueHolder8475c = $valueHolder8475c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8475c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8475c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
