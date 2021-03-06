<?php

namespace Anytime\ORM\Tests\Stub\Generated\Entity;

use Anytime\ORM\EntityManager\Entity;

class FooComposite extends Entity
{
    const TABLENAME = 'foo_entity';
    const PRIMARY_KEYS = ['id', 'id2'];

    protected $data = [
	    'id' => 0,
        'id2' => 0,
	    'some_field' => ''
    ];

    protected $dataSetterUsed = [
        'id' => false,
        'some_field' => false
    ];

    protected static $sqlFieldStruct = [
        'id' => array (  'tableName' => 'foo',  'fieldName' => 'id',  'type' => 'int',  'allowNull' => false,  'keyType' => 'PRI',  'defaultValue' => NULL,  'dateFormat' => ''),
        'id2' => array (  'tableName' => 'foo',  'fieldName' => 'id2',  'type' => 'int',  'allowNull' => false,  'keyType' => 'PRI',  'defaultValue' => NULL,  'dateFormat' => ''),
        'some_field' => array (  'tableName' => 'foo',  'fieldName' => 'some_field',  'type' => 'string',  'allowNull' => true,  'keyType' => '',  'defaultValue' => 'default value',  'dateFormat' => '')
    ];

    public function setSomeField($value): FooComposite
    {
        $this->data['some_field'] = $value;
        $this->dataSetterUsed['some_field'] = true;
        return $this;
    }

    /**
     * @param int $value
     * @return FooComposite
     */
    public function setId(int $value): FooComposite
    {
        $this->data['id'] = $value;
        $this->dataSetterUsed['id'] = true;
        return $this;
    }

    /**
     * @param int $value
     * @return FooComposite
     */
    public function setId2(int $value): FooComposite
    {
        $this->data['id2'] = $value;
        $this->dataSetterUsed['id2'] = true;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->data['id'];
    }

    /**
     * @return int
     */
    public function getId2(): int
    {
        return (int)$this->data['id2'];
    }

    /**
     * @return string
     */
    public function getSomeField(): string
    {
        return (string)$this->data['some_field'];
    }
};
