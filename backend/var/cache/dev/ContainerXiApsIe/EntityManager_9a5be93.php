<?php

namespace ContainerXiApsIe;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd97ae = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41882 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6d16a = [
        
    ];

    public function getConnection()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getConnection', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getMetadataFactory', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getExpressionBuilder', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'beginTransaction', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getCache', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getCache();
    }

    public function transactional($func)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'transactional', array('func' => $func), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->transactional($func);
    }

    public function commit()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'commit', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->commit();
    }

    public function rollback()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'rollback', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getClassMetadata', array('className' => $className), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'createQuery', array('dql' => $dql), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'createNamedQuery', array('name' => $name), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'createQueryBuilder', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'flush', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'clear', array('entityName' => $entityName), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->clear($entityName);
    }

    public function close()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'close', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->close();
    }

    public function persist($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'persist', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'remove', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'refresh', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'detach', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'merge', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'contains', array('entity' => $entity), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getEventManager', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getConfiguration', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'isOpen', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getUnitOfWork', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getProxyFactory', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'initializeObject', array('obj' => $obj), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'getFilters', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'isFiltersStateClean', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'hasFilters', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return $this->valueHolderd97ae->hasFilters();
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

        $instance->initializer41882 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd97ae) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd97ae = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd97ae->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__get', ['name' => $name], $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        if (isset(self::$publicProperties6d16a[$name])) {
            return $this->valueHolderd97ae->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd97ae;

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

        $targetObject = $this->valueHolderd97ae;
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
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd97ae;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd97ae;
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
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__isset', array('name' => $name), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd97ae;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd97ae;
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
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__unset', array('name' => $name), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd97ae;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd97ae;
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
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__clone', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        $this->valueHolderd97ae = clone $this->valueHolderd97ae;
    }

    public function __sleep()
    {
        $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, '__sleep', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;

        return array('valueHolderd97ae');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41882 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41882;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer41882 && ($this->initializer41882->__invoke($valueHolderd97ae, $this, 'initializeProxy', array(), $this->initializer41882) || 1) && $this->valueHolderd97ae = $valueHolderd97ae;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd97ae;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd97ae;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
