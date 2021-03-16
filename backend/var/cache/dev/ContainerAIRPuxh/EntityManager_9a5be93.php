<?php

namespace ContainerAIRPuxh;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc0074 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78233 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5f469 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getConnection', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getMetadataFactory', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getExpressionBuilder', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'beginTransaction', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getCache', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'transactional', array('func' => $func), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->transactional($func);
    }

    public function commit()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'commit', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->commit();
    }

    public function rollback()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'rollback', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getClassMetadata', array('className' => $className), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'createQuery', array('dql' => $dql), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'createNamedQuery', array('name' => $name), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'createQueryBuilder', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'flush', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'clear', array('entityName' => $entityName), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->clear($entityName);
    }

    public function close()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'close', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->close();
    }

    public function persist($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'persist', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'remove', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'refresh', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'detach', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'merge', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'contains', array('entity' => $entity), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getEventManager', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getConfiguration', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'isOpen', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getUnitOfWork', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getProxyFactory', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'initializeObject', array('obj' => $obj), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'getFilters', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'isFiltersStateClean', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'hasFilters', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return $this->valueHolderc0074->hasFilters();
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

        $instance->initializer78233 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc0074) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc0074 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc0074->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__get', ['name' => $name], $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        if (isset(self::$publicProperties5f469[$name])) {
            return $this->valueHolderc0074->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0074;

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

        $targetObject = $this->valueHolderc0074;
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
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0074;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc0074;
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
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__isset', array('name' => $name), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0074;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc0074;
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
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__unset', array('name' => $name), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc0074;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc0074;
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
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__clone', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        $this->valueHolderc0074 = clone $this->valueHolderc0074;
    }

    public function __sleep()
    {
        $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, '__sleep', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;

        return array('valueHolderc0074');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78233 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78233;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78233 && ($this->initializer78233->__invoke($valueHolderc0074, $this, 'initializeProxy', array(), $this->initializer78233) || 1) && $this->valueHolderc0074 = $valueHolderc0074;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc0074;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc0074;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
