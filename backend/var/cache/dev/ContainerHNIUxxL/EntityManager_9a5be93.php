<?php

namespace ContainerHNIUxxL;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5d789 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5bf2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties48da7 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getConnection', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getMetadataFactory', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getExpressionBuilder', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'beginTransaction', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getCache', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'transactional', array('func' => $func), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->transactional($func);
    }

    public function commit()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'commit', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->commit();
    }

    public function rollback()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'rollback', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'createQuery', array('dql' => $dql), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'createQueryBuilder', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'flush', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'clear', array('entityName' => $entityName), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'close', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->close();
    }

    public function persist($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'persist', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'remove', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'refresh', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'detach', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'merge', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'contains', array('entity' => $entity), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getEventManager', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getConfiguration', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'isOpen', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getUnitOfWork', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getProxyFactory', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'getFilters', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'isFiltersStateClean', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'hasFilters', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return $this->valueHolder5d789->hasFilters();
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

        $instance->initializerb5bf2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5d789) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5d789 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5d789->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__get', ['name' => $name], $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        if (isset(self::$publicProperties48da7[$name])) {
            return $this->valueHolder5d789->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d789;

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

        $targetObject = $this->valueHolder5d789;
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
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d789;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5d789;
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
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__isset', array('name' => $name), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d789;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5d789;
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
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__unset', array('name' => $name), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5d789;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5d789;
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
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__clone', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        $this->valueHolder5d789 = clone $this->valueHolder5d789;
    }

    public function __sleep()
    {
        $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, '__sleep', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;

        return array('valueHolder5d789');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5bf2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5bf2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5bf2 && ($this->initializerb5bf2->__invoke($valueHolder5d789, $this, 'initializeProxy', array(), $this->initializerb5bf2) || 1) && $this->valueHolder5d789 = $valueHolder5d789;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5d789;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5d789;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
