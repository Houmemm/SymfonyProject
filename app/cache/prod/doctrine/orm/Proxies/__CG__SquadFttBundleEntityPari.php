<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Pari extends \Squad\FttBundle\Entity\Pari implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'idPari', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'montant', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'q1', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'q2', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'userUser', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'matchMatch'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'idPari', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'montant', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'q1', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'q2', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'userUser', '' . "\0" . 'Squad\\FttBundle\\Entity\\Pari' . "\0" . 'matchMatch'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Pari $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdPari()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdPari();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdPari', []);

        return parent::getIdPari();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontant($montant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontant', [$montant]);

        return parent::setMontant($montant);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontant', []);

        return parent::getMontant();
    }

    /**
     * {@inheritDoc}
     */
    public function setQ1($q1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQ1', [$q1]);

        return parent::setQ1($q1);
    }

    /**
     * {@inheritDoc}
     */
    public function getQ1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQ1', []);

        return parent::getQ1();
    }

    /**
     * {@inheritDoc}
     */
    public function setQ2($q2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQ2', [$q2]);

        return parent::setQ2($q2);
    }

    /**
     * {@inheritDoc}
     */
    public function getQ2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQ2', []);

        return parent::getQ2();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUser(\Squad\FttBundle\Entity\Utilisateur $userUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUser', [$userUser]);

        return parent::setUserUser($userUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserUser', []);

        return parent::getUserUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatchMatch(\Squad\FttBundle\Entity\Matchtennis $matchMatch = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatchMatch', [$matchMatch]);

        return parent::setMatchMatch($matchMatch);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchMatch()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchMatch', []);

        return parent::getMatchMatch();
    }

}
