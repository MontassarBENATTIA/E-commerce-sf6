<?php

namespace ContainerJJ0PIxT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate(mixed $target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        if ($this->valueHolder5982d === $returnValue = $this->valueHolder5982d->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer72ac2 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder5982d) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder5982d = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer72ac2 && ($this->initializer72ac2->__invoke($valueHolder5982d, $this, '__get', ['name' => $name], $this->initializer72ac2) || 1) && $this->valueHolder5982d = $valueHolder5982d;

        if (isset(self::$publicProperties256a2[$name])) {
            return $this->valueHolder5982d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
