<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Sanction extends \Squad\FttBundle\Entity\Sanction implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'idSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'typeSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'dateDebutSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'descriptionSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'joueurCinJoueur'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'idSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'typeSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'dateDebutSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'descriptionSanction', '' . "\0" . 'Squad\\FttBundle\\Entity\\Sanction' . "\0" . 'joueurCinJoueur'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Sanction $proxy) {
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
    public function getIdSanction()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdSanction();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdSanction', []);

        return parent::getIdSanction();
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeSanction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeSanction', []);

        return parent::getTypeSanction();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebutSanction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebutSanction', []);

        return parent::getDateDebutSanction();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptionSanction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptionSanction', []);

        return parent::getDescriptionSanction();
    }

    /**
     * {@inheritDoc}
     */
    public function getJoueurCinJoueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJoueurCinJoueur', []);

        return parent::getJoueurCinJoueur();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdSanction($idSanction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdSanction', [$idSanction]);

        return parent::setIdSanction($idSanction);
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeSanction($typeSanction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeSanction', [$typeSanction]);

        return parent::setTypeSanction($typeSanction);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebutSanction(\DateTime $dateDebutSanction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebutSanction', [$dateDebutSanction]);

        return parent::setDateDebutSanction($dateDebutSanction);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptionSanction($descriptionSanction)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptionSanction', [$descriptionSanction]);

        return parent::setDescriptionSanction($descriptionSanction);
    }

    /**
     * {@inheritDoc}
     */
    public function setJoueurCinJoueur(\Squad\FttBundle\Entity\Joueur $joueurCinJoueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJoueurCinJoueur', [$joueurCinJoueur]);

        return parent::setJoueurCinJoueur($joueurCinJoueur);
    }

}