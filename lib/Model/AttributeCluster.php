<?php
/**
 * AttributeCluster
 *
 * PHP version 5
 *
 * @category Class
 * @package  Boracomputer\ITScope
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ITscope - Interactive API V20
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.0
 * Contact: support@itscope.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Boracomputer\ITScope\Model;

use \ArrayAccess;
use \Boracomputer\ITScope\ObjectSerializer;

/**
 * AttributeCluster Class Doc Comment
 *
 * @category Class
 * @description Eigenschaftscluster, in denen das Produkt für Merkmalssuchen gefunden werden kann. Kann je nach Menge mehrere Eigenschaftsausprägungen in Intervallen zusammenfassen, z.B. 64-128MB RAM
 * @package  Boracomputer\ITScope
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AttributeCluster implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'attributeCluster';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'product_type_id' => 'int',
        'product_type_name' => 'string',
        'attribute_type_name' => 'string',
        'attribute_type_group_name' => 'string',
        'name' => 'string',
        'rank' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'product_type_id' => 'int64',
        'product_type_name' => null,
        'attribute_type_name' => null,
        'attribute_type_group_name' => null,
        'name' => null,
        'rank' => 'int64'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'product_type_id' => 'productTypeId',
        'product_type_name' => 'productTypeName',
        'attribute_type_name' => 'attributeTypeName',
        'attribute_type_group_name' => 'attributeTypeGroupName',
        'name' => 'name',
        'rank' => 'rank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_type_id' => 'setProductTypeId',
        'product_type_name' => 'setProductTypeName',
        'attribute_type_name' => 'setAttributeTypeName',
        'attribute_type_group_name' => 'setAttributeTypeGroupName',
        'name' => 'setName',
        'rank' => 'setRank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_type_id' => 'getProductTypeId',
        'product_type_name' => 'getProductTypeName',
        'attribute_type_name' => 'getAttributeTypeName',
        'attribute_type_group_name' => 'getAttributeTypeGroupName',
        'name' => 'getName',
        'rank' => 'getRank'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['product_type_id'] = isset($data['product_type_id']) ? $data['product_type_id'] : null;
        $this->container['product_type_name'] = isset($data['product_type_name']) ? $data['product_type_name'] : null;
        $this->container['attribute_type_name'] = isset($data['attribute_type_name']) ? $data['attribute_type_name'] : null;
        $this->container['attribute_type_group_name'] = isset($data['attribute_type_group_name']) ? $data['attribute_type_group_name'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['product_type_name']) && (strlen($this->container['product_type_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'product_type_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['product_type_name']) && (strlen($this->container['product_type_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'product_type_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['attribute_type_name']) && (strlen($this->container['attribute_type_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'attribute_type_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['attribute_type_name']) && (strlen($this->container['attribute_type_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'attribute_type_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['attribute_type_group_name']) && (strlen($this->container['attribute_type_group_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'attribute_type_group_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['attribute_type_group_name']) && (strlen($this->container['attribute_type_group_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'attribute_type_group_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) < 0)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['product_type_name']) > 255) {
            return false;
        }
        if (strlen($this->container['product_type_name']) < 0) {
            return false;
        }
        if (strlen($this->container['attribute_type_name']) > 255) {
            return false;
        }
        if (strlen($this->container['attribute_type_name']) < 0) {
            return false;
        }
        if (strlen($this->container['attribute_type_group_name']) > 255) {
            return false;
        }
        if (strlen($this->container['attribute_type_group_name']) < 0) {
            return false;
        }
        if (strlen($this->container['name']) > 255) {
            return false;
        }
        if (strlen($this->container['name']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Eindeutiger ITscope Key
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_type_id
     *
     * @return int
     */
    public function getProductTypeId()
    {
        return $this->container['product_type_id'];
    }

    /**
     * Sets product_type_id
     *
     * @param int $product_type_id Referenz auf den Produkttyp, optional
     *
     * @return $this
     */
    public function setProductTypeId($product_type_id)
    {
        $this->container['product_type_id'] = $product_type_id;

        return $this;
    }

    /**
     * Gets product_type_name
     *
     * @return string
     */
    public function getProductTypeName()
    {
        return $this->container['product_type_name'];
    }

    /**
     * Sets product_type_name
     *
     * @param string $product_type_name Name des Produkttyps, zu dem diese Eigenschaftsausprägung gehört, optional
     *
     * @return $this
     */
    public function setProductTypeName($product_type_name)
    {
        if (!is_null($product_type_name) && (strlen($product_type_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $product_type_name when calling AttributeCluster., must be smaller than or equal to 255.');
        }
        if (!is_null($product_type_name) && (strlen($product_type_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $product_type_name when calling AttributeCluster., must be bigger than or equal to 0.');
        }

        $this->container['product_type_name'] = $product_type_name;

        return $this;
    }

    /**
     * Gets attribute_type_name
     *
     * @return string
     */
    public function getAttributeTypeName()
    {
        return $this->container['attribute_type_name'];
    }

    /**
     * Sets attribute_type_name
     *
     * @param string $attribute_type_name Name einer Eigenschaft. Kann analog dem Namen aus ProductType.attributeTypeName(1..5) sein
     *
     * @return $this
     */
    public function setAttributeTypeName($attribute_type_name)
    {
        if (!is_null($attribute_type_name) && (strlen($attribute_type_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $attribute_type_name when calling AttributeCluster., must be smaller than or equal to 255.');
        }
        if (!is_null($attribute_type_name) && (strlen($attribute_type_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $attribute_type_name when calling AttributeCluster., must be bigger than or equal to 0.');
        }

        $this->container['attribute_type_name'] = $attribute_type_name;

        return $this;
    }

    /**
     * Gets attribute_type_group_name
     *
     * @return string
     */
    public function getAttributeTypeGroupName()
    {
        return $this->container['attribute_type_group_name'];
    }

    /**
     * Sets attribute_type_group_name
     *
     * @param string $attribute_type_group_name Name einer Eigenschaftsgruppe
     *
     * @return $this
     */
    public function setAttributeTypeGroupName($attribute_type_group_name)
    {
        if (!is_null($attribute_type_group_name) && (strlen($attribute_type_group_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $attribute_type_group_name when calling AttributeCluster., must be smaller than or equal to 255.');
        }
        if (!is_null($attribute_type_group_name) && (strlen($attribute_type_group_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $attribute_type_group_name when calling AttributeCluster., must be bigger than or equal to 0.');
        }

        $this->container['attribute_type_group_name'] = $attribute_type_group_name;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Bezeichner der Ausprägung (z.B. 2 GB, 15\", 80 W - 120 W)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AttributeCluster., must be smaller than or equal to 255.');
        }
        if (!is_null($name) && (strlen($name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AttributeCluster., must be bigger than or equal to 0.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rank
     *
     * @return int
     */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
     * Sets rank
     *
     * @param int $rank Rang der Eigenschaft
     *
     * @return $this
     */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


