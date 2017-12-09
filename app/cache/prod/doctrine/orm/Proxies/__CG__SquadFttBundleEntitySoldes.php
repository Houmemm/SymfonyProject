<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Soldes extends \Squad\FttBundle\Entity\Soldes implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'idTransaction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'valeur', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'dateAjout', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'preuve', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'typeTransaction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'userUser'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'idTransaction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'valeur', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'dateAjout', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'preuve', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'typeTransaction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Soldes' . "\0" . 'userUser'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Soldes $proxy) {
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
    public function getIdTransaction()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdTransaction();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdTransaction', []);

        return parent::getIdTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getValeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValeur', []);

        return parent::getValeur();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateAjout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateAjout', []);

        return parent::getDateAjout();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreuve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreuve', []);

        return parent::getPreuve();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeTransaction', []);

        return parent::getTypeTransaction();
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
    public function setIdTransaction($idTransaction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdTransaction', [$idTransaction]);

        return parent::setIdTransaction($idTransaction);
    }

    /**
     * {@inheritDoc}
     */
    public function setValeur($valeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValeur', [$valeur]);

        return parent::setValeur($valeur);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateAjout(\DateTime $dateAjout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateAjout', [$dateAjout]);

        return parent::setDateAjout($dateAjout);
    }

    /**
     * {@inheritDoc}
     */
    public function setPreuve($preuve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreuve', [$preuve]);

        return parent::setPreuve($preuve);
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeTransaction($typeTransaction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeTransaction', [$typeTransaction]);

        return parent::setTypeTransaction($typeTransaction);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUser(\Squad\FttBundle\Entity\Utilisateur $userUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUser', [$userUser]);

        return parent::setUserUser($userUser);
    }

}
