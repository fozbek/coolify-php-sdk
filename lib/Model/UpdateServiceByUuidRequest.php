<?php
/**
 * UpdateServiceByUuidRequest
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  CoolifyPHP\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Coolify
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 0.1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CoolifyPHP\Client\Model;

use \ArrayAccess;
use \CoolifyPHP\Client\ObjectSerializer;

/**
 * UpdateServiceByUuidRequest Class Doc Comment
 *
 * @category Class
 * @package  CoolifyPHP\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateServiceByUuidRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'update_service_by_uuid_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'project_uuid' => 'string',
        'environment_name' => 'string',
        'environment_uuid' => 'string',
        'server_uuid' => 'string',
        'destination_uuid' => 'string',
        'instant_deploy' => 'bool',
        'connect_to_docker_network' => 'bool',
        'docker_compose_raw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'project_uuid' => null,
        'environment_name' => null,
        'environment_uuid' => null,
        'server_uuid' => null,
        'destination_uuid' => null,
        'instant_deploy' => null,
        'connect_to_docker_network' => null,
        'docker_compose_raw' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'description' => false,
        'project_uuid' => false,
        'environment_name' => false,
        'environment_uuid' => false,
        'server_uuid' => false,
        'destination_uuid' => false,
        'instant_deploy' => false,
        'connect_to_docker_network' => false,
        'docker_compose_raw' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'name' => 'name',
        'description' => 'description',
        'project_uuid' => 'project_uuid',
        'environment_name' => 'environment_name',
        'environment_uuid' => 'environment_uuid',
        'server_uuid' => 'server_uuid',
        'destination_uuid' => 'destination_uuid',
        'instant_deploy' => 'instant_deploy',
        'connect_to_docker_network' => 'connect_to_docker_network',
        'docker_compose_raw' => 'docker_compose_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'project_uuid' => 'setProjectUuid',
        'environment_name' => 'setEnvironmentName',
        'environment_uuid' => 'setEnvironmentUuid',
        'server_uuid' => 'setServerUuid',
        'destination_uuid' => 'setDestinationUuid',
        'instant_deploy' => 'setInstantDeploy',
        'connect_to_docker_network' => 'setConnectToDockerNetwork',
        'docker_compose_raw' => 'setDockerComposeRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'project_uuid' => 'getProjectUuid',
        'environment_name' => 'getEnvironmentName',
        'environment_uuid' => 'getEnvironmentUuid',
        'server_uuid' => 'getServerUuid',
        'destination_uuid' => 'getDestinationUuid',
        'instant_deploy' => 'getInstantDeploy',
        'connect_to_docker_network' => 'getConnectToDockerNetwork',
        'docker_compose_raw' => 'getDockerComposeRaw'
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
        return self::$openAPIModelName;
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('project_uuid', $data ?? [], null);
        $this->setIfExists('environment_name', $data ?? [], null);
        $this->setIfExists('environment_uuid', $data ?? [], null);
        $this->setIfExists('server_uuid', $data ?? [], null);
        $this->setIfExists('destination_uuid', $data ?? [], null);
        $this->setIfExists('instant_deploy', $data ?? [], null);
        $this->setIfExists('connect_to_docker_network', $data ?? [], false);
        $this->setIfExists('docker_compose_raw', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['project_uuid'] === null) {
            $invalidProperties[] = "'project_uuid' can't be null";
        }
        if ($this->container['environment_name'] === null) {
            $invalidProperties[] = "'environment_name' can't be null";
        }
        if ($this->container['environment_uuid'] === null) {
            $invalidProperties[] = "'environment_uuid' can't be null";
        }
        if ($this->container['server_uuid'] === null) {
            $invalidProperties[] = "'server_uuid' can't be null";
        }
        if ($this->container['docker_compose_raw'] === null) {
            $invalidProperties[] = "'docker_compose_raw' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The service name.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The service description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets project_uuid
     *
     * @return string
     */
    public function getProjectUuid()
    {
        return $this->container['project_uuid'];
    }

    /**
     * Sets project_uuid
     *
     * @param string $project_uuid The project UUID.
     *
     * @return self
     */
    public function setProjectUuid($project_uuid)
    {
        if (is_null($project_uuid)) {
            throw new \InvalidArgumentException('non-nullable project_uuid cannot be null');
        }
        $this->container['project_uuid'] = $project_uuid;

        return $this;
    }

    /**
     * Gets environment_name
     *
     * @return string
     */
    public function getEnvironmentName()
    {
        return $this->container['environment_name'];
    }

    /**
     * Sets environment_name
     *
     * @param string $environment_name The environment name.
     *
     * @return self
     */
    public function setEnvironmentName($environment_name)
    {
        if (is_null($environment_name)) {
            throw new \InvalidArgumentException('non-nullable environment_name cannot be null');
        }
        $this->container['environment_name'] = $environment_name;

        return $this;
    }

    /**
     * Gets environment_uuid
     *
     * @return string
     */
    public function getEnvironmentUuid()
    {
        return $this->container['environment_uuid'];
    }

    /**
     * Sets environment_uuid
     *
     * @param string $environment_uuid The environment UUID.
     *
     * @return self
     */
    public function setEnvironmentUuid($environment_uuid)
    {
        if (is_null($environment_uuid)) {
            throw new \InvalidArgumentException('non-nullable environment_uuid cannot be null');
        }
        $this->container['environment_uuid'] = $environment_uuid;

        return $this;
    }

    /**
     * Gets server_uuid
     *
     * @return string
     */
    public function getServerUuid()
    {
        return $this->container['server_uuid'];
    }

    /**
     * Sets server_uuid
     *
     * @param string $server_uuid The server UUID.
     *
     * @return self
     */
    public function setServerUuid($server_uuid)
    {
        if (is_null($server_uuid)) {
            throw new \InvalidArgumentException('non-nullable server_uuid cannot be null');
        }
        $this->container['server_uuid'] = $server_uuid;

        return $this;
    }

    /**
     * Gets destination_uuid
     *
     * @return string|null
     */
    public function getDestinationUuid()
    {
        return $this->container['destination_uuid'];
    }

    /**
     * Sets destination_uuid
     *
     * @param string|null $destination_uuid The destination UUID.
     *
     * @return self
     */
    public function setDestinationUuid($destination_uuid)
    {
        if (is_null($destination_uuid)) {
            throw new \InvalidArgumentException('non-nullable destination_uuid cannot be null');
        }
        $this->container['destination_uuid'] = $destination_uuid;

        return $this;
    }

    /**
     * Gets instant_deploy
     *
     * @return bool|null
     */
    public function getInstantDeploy()
    {
        return $this->container['instant_deploy'];
    }

    /**
     * Sets instant_deploy
     *
     * @param bool|null $instant_deploy The flag to indicate if the service should be deployed instantly.
     *
     * @return self
     */
    public function setInstantDeploy($instant_deploy)
    {
        if (is_null($instant_deploy)) {
            throw new \InvalidArgumentException('non-nullable instant_deploy cannot be null');
        }
        $this->container['instant_deploy'] = $instant_deploy;

        return $this;
    }

    /**
     * Gets connect_to_docker_network
     *
     * @return bool|null
     */
    public function getConnectToDockerNetwork()
    {
        return $this->container['connect_to_docker_network'];
    }

    /**
     * Sets connect_to_docker_network
     *
     * @param bool|null $connect_to_docker_network Connect the service to the predefined docker network.
     *
     * @return self
     */
    public function setConnectToDockerNetwork($connect_to_docker_network)
    {
        if (is_null($connect_to_docker_network)) {
            throw new \InvalidArgumentException('non-nullable connect_to_docker_network cannot be null');
        }
        $this->container['connect_to_docker_network'] = $connect_to_docker_network;

        return $this;
    }

    /**
     * Gets docker_compose_raw
     *
     * @return string
     */
    public function getDockerComposeRaw()
    {
        return $this->container['docker_compose_raw'];
    }

    /**
     * Sets docker_compose_raw
     *
     * @param string $docker_compose_raw The Docker Compose raw content.
     *
     * @return self
     */
    public function setDockerComposeRaw($docker_compose_raw)
    {
        if (is_null($docker_compose_raw)) {
            throw new \InvalidArgumentException('non-nullable docker_compose_raw cannot be null');
        }
        $this->container['docker_compose_raw'] = $docker_compose_raw;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


