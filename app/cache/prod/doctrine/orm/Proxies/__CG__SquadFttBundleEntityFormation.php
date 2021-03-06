<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Formation extends \Squad\FttBundle\Entity\Formation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'idFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'libelleFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'grade', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateDebutFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateFinFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateDebutPostilation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateFinPostilation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'fraisFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'userUser'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'idFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'libelleFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'grade', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateDebutFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateFinFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateDebutPostilation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'dateFinPostilation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'fraisFormation', '' . "\0" . 'Squad\\FttBundle\\Entity\\Formation' . "\0" . 'userUser'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Formation $proxy) {
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
    public function getIdFormation()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdFormation();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdFormation', []);

        return parent::getIdFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleFormation($libelleFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleFormation', [$libelleFormation]);

        return parent::setLibelleFormation($libelleFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleFormation', []);

        return parent::getLibelleFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setGrade($grade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGrade', [$grade]);

        return parent::setGrade($grade);
    }

    /**
     * {@inheritDoc}
     */
    public function getGrade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGrade', []);

        return parent::getGrade();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutFormation($dateDebutFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutFormation', [$dateDebutFormation]);

        return parent::setDateDebutFormation($dateDebutFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutFormation', []);

        return parent::getDateDebutFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinFormation($dateFinFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinFormation', [$dateFinFormation]);

        return parent::setDateFinFormation($dateFinFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinFormation', []);

        return parent::getDateFinFormation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutPostilation($dateDebutPostilation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutPostilation', [$dateDebutPostilation]);

        return parent::setDateDebutPostilation($dateDebutPostilation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutPostilation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutPostilation', []);

        return parent::getDateDebutPostilation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFinPostilation($dateFinPostilation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFinPostilation', [$dateFinPostilation]);

        return parent::setDateFinPostilation($dateFinPostilation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFinPostilation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFinPostilation', []);

        return parent::getDateFinPostilation();
    }

    /**
     * {@inheritDoc}
     */
    public function setFraisFormation($fraisFormation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFraisFormation', [$fraisFormation]);

        return parent::setFraisFormation($fraisFormation);
    }

    /**
     * {@inheritDoc}
     */
    public function getFraisFormation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFraisFormation', []);

        return parent::getFraisFormation();
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

}
