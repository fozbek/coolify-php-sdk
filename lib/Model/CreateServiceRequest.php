<?php
/**
 * CreateServiceRequest
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
 * CreateServiceRequest Class Doc Comment
 *
 * @category Class
 * @package  CoolifyPHP\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateServiceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_service_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'name' => 'string',
        'description' => 'string',
        'project_uuid' => 'string',
        'environment_name' => 'string',
        'environment_uuid' => 'string',
        'server_uuid' => 'string',
        'destination_uuid' => 'string',
        'instant_deploy' => 'bool',
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
        'type' => null,
        'name' => null,
        'description' => null,
        'project_uuid' => null,
        'environment_name' => null,
        'environment_uuid' => null,
        'server_uuid' => null,
        'destination_uuid' => null,
        'instant_deploy' => null,
        'docker_compose_raw' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'name' => false,
        'description' => false,
        'project_uuid' => false,
        'environment_name' => false,
        'environment_uuid' => false,
        'server_uuid' => false,
        'destination_uuid' => false,
        'instant_deploy' => false,
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
        'type' => 'type',
        'name' => 'name',
        'description' => 'description',
        'project_uuid' => 'project_uuid',
        'environment_name' => 'environment_name',
        'environment_uuid' => 'environment_uuid',
        'server_uuid' => 'server_uuid',
        'destination_uuid' => 'destination_uuid',
        'instant_deploy' => 'instant_deploy',
        'docker_compose_raw' => 'docker_compose_raw'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'name' => 'setName',
        'description' => 'setDescription',
        'project_uuid' => 'setProjectUuid',
        'environment_name' => 'setEnvironmentName',
        'environment_uuid' => 'setEnvironmentUuid',
        'server_uuid' => 'setServerUuid',
        'destination_uuid' => 'setDestinationUuid',
        'instant_deploy' => 'setInstantDeploy',
        'docker_compose_raw' => 'setDockerComposeRaw'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'name' => 'getName',
        'description' => 'getDescription',
        'project_uuid' => 'getProjectUuid',
        'environment_name' => 'getEnvironmentName',
        'environment_uuid' => 'getEnvironmentUuid',
        'server_uuid' => 'getServerUuid',
        'destination_uuid' => 'getDestinationUuid',
        'instant_deploy' => 'getInstantDeploy',
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

    public const TYPE_ACTIVEPIECES = 'activepieces';
    public const TYPE_APPSMITH = 'appsmith';
    public const TYPE_APPWRITE = 'appwrite';
    public const TYPE_AUTHENTIK = 'authentik';
    public const TYPE_BABYBUDDY = 'babybuddy';
    public const TYPE_BUDGE = 'budge';
    public const TYPE_CHANGEDETECTION = 'changedetection';
    public const TYPE_CHATWOOT = 'chatwoot';
    public const TYPE_CLASSICPRESS_WITH_MARIADB = 'classicpress-with-mariadb';
    public const TYPE_CLASSICPRESS_WITH_MYSQL = 'classicpress-with-mysql';
    public const TYPE_CLASSICPRESS_WITHOUT_DATABASE = 'classicpress-without-database';
    public const TYPE_CLOUDFLARED = 'cloudflared';
    public const TYPE_CODE_SERVER = 'code-server';
    public const TYPE_DASHBOARD = 'dashboard';
    public const TYPE_DIRECTUS = 'directus';
    public const TYPE_DIRECTUS_WITH_POSTGRESQL = 'directus-with-postgresql';
    public const TYPE_DOCKER_REGISTRY = 'docker-registry';
    public const TYPE_DOCUSEAL = 'docuseal';
    public const TYPE_DOCUSEAL_WITH_POSTGRES = 'docuseal-with-postgres';
    public const TYPE_DOKUWIKI = 'dokuwiki';
    public const TYPE_DUPLICATI = 'duplicati';
    public const TYPE_EMBY = 'emby';
    public const TYPE_EMBYSTAT = 'embystat';
    public const TYPE_FIDER = 'fider';
    public const TYPE_FILEBROWSER = 'filebrowser';
    public const TYPE_FIREFLY = 'firefly';
    public const TYPE_FORMBRICKS = 'formbricks';
    public const TYPE_GHOST = 'ghost';
    public const TYPE_GITEA = 'gitea';
    public const TYPE_GITEA_WITH_MARIADB = 'gitea-with-mariadb';
    public const TYPE_GITEA_WITH_MYSQL = 'gitea-with-mysql';
    public const TYPE_GITEA_WITH_POSTGRESQL = 'gitea-with-postgresql';
    public const TYPE_GLANCE = 'glance';
    public const TYPE_GLANCES = 'glances';
    public const TYPE_GLITCHTIP = 'glitchtip';
    public const TYPE_GRAFANA = 'grafana';
    public const TYPE_GRAFANA_WITH_POSTGRESQL = 'grafana-with-postgresql';
    public const TYPE_GROCY = 'grocy';
    public const TYPE_HEIMDALL = 'heimdall';
    public const TYPE_HOMEPAGE = 'homepage';
    public const TYPE_JELLYFIN = 'jellyfin';
    public const TYPE_KUZZLE = 'kuzzle';
    public const TYPE_LISTMONK = 'listmonk';
    public const TYPE_LOGTO = 'logto';
    public const TYPE_MEDIAWIKI = 'mediawiki';
    public const TYPE_MEILISEARCH = 'meilisearch';
    public const TYPE_METABASE = 'metabase';
    public const TYPE_METUBE = 'metube';
    public const TYPE_MINIO = 'minio';
    public const TYPE_MOODLE = 'moodle';
    public const TYPE_N8N = 'n8n';
    public const TYPE_N8N_WITH_POSTGRESQL = 'n8n-with-postgresql';
    public const TYPE_NEXT_IMAGE_TRANSFORMATION = 'next-image-transformation';
    public const TYPE_NEXTCLOUD = 'nextcloud';
    public const TYPE_NOCODB = 'nocodb';
    public const TYPE_ODOO = 'odoo';
    public const TYPE_OPENBLOCKS = 'openblocks';
    public const TYPE_PAIRDROP = 'pairdrop';
    public const TYPE_PENPOT = 'penpot';
    public const TYPE_PHPMYADMIN = 'phpmyadmin';
    public const TYPE_POCKETBASE = 'pocketbase';
    public const TYPE_POSTHOG = 'posthog';
    public const TYPE_REACTIVE_RESUME = 'reactive-resume';
    public const TYPE_ROCKETCHAT = 'rocketchat';
    public const TYPE_SHLINK = 'shlink';
    public const TYPE_SLASH = 'slash';
    public const TYPE_SNAPDROP = 'snapdrop';
    public const TYPE_STATUSNOOK = 'statusnook';
    public const TYPE_STIRLING_PDF = 'stirling-pdf';
    public const TYPE_SUPABASE = 'supabase';
    public const TYPE_SYNCTHING = 'syncthing';
    public const TYPE_TOLGEE = 'tolgee';
    public const TYPE_TRIGGER = 'trigger';
    public const TYPE_TRIGGER_WITH_EXTERNAL_DATABASE = 'trigger-with-external-database';
    public const TYPE_TWENTY = 'twenty';
    public const TYPE_UMAMI = 'umami';
    public const TYPE_UNLEASH_WITH_POSTGRESQL = 'unleash-with-postgresql';
    public const TYPE_UNLEASH_WITHOUT_DATABASE = 'unleash-without-database';
    public const TYPE_UPTIME_KUMA = 'uptime-kuma';
    public const TYPE_VAULTWARDEN = 'vaultwarden';
    public const TYPE_VIKUNJA = 'vikunja';
    public const TYPE_WEBLATE = 'weblate';
    public const TYPE_WHOOGLE = 'whoogle';
    public const TYPE_WORDPRESS_WITH_MARIADB = 'wordpress-with-mariadb';
    public const TYPE_WORDPRESS_WITH_MYSQL = 'wordpress-with-mysql';
    public const TYPE_WORDPRESS_WITHOUT_DATABASE = 'wordpress-without-database';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ACTIVEPIECES,
            self::TYPE_APPSMITH,
            self::TYPE_APPWRITE,
            self::TYPE_AUTHENTIK,
            self::TYPE_BABYBUDDY,
            self::TYPE_BUDGE,
            self::TYPE_CHANGEDETECTION,
            self::TYPE_CHATWOOT,
            self::TYPE_CLASSICPRESS_WITH_MARIADB,
            self::TYPE_CLASSICPRESS_WITH_MYSQL,
            self::TYPE_CLASSICPRESS_WITHOUT_DATABASE,
            self::TYPE_CLOUDFLARED,
            self::TYPE_CODE_SERVER,
            self::TYPE_DASHBOARD,
            self::TYPE_DIRECTUS,
            self::TYPE_DIRECTUS_WITH_POSTGRESQL,
            self::TYPE_DOCKER_REGISTRY,
            self::TYPE_DOCUSEAL,
            self::TYPE_DOCUSEAL_WITH_POSTGRES,
            self::TYPE_DOKUWIKI,
            self::TYPE_DUPLICATI,
            self::TYPE_EMBY,
            self::TYPE_EMBYSTAT,
            self::TYPE_FIDER,
            self::TYPE_FILEBROWSER,
            self::TYPE_FIREFLY,
            self::TYPE_FORMBRICKS,
            self::TYPE_GHOST,
            self::TYPE_GITEA,
            self::TYPE_GITEA_WITH_MARIADB,
            self::TYPE_GITEA_WITH_MYSQL,
            self::TYPE_GITEA_WITH_POSTGRESQL,
            self::TYPE_GLANCE,
            self::TYPE_GLANCES,
            self::TYPE_GLITCHTIP,
            self::TYPE_GRAFANA,
            self::TYPE_GRAFANA_WITH_POSTGRESQL,
            self::TYPE_GROCY,
            self::TYPE_HEIMDALL,
            self::TYPE_HOMEPAGE,
            self::TYPE_JELLYFIN,
            self::TYPE_KUZZLE,
            self::TYPE_LISTMONK,
            self::TYPE_LOGTO,
            self::TYPE_MEDIAWIKI,
            self::TYPE_MEILISEARCH,
            self::TYPE_METABASE,
            self::TYPE_METUBE,
            self::TYPE_MINIO,
            self::TYPE_MOODLE,
            self::TYPE_N8N,
            self::TYPE_N8N_WITH_POSTGRESQL,
            self::TYPE_NEXT_IMAGE_TRANSFORMATION,
            self::TYPE_NEXTCLOUD,
            self::TYPE_NOCODB,
            self::TYPE_ODOO,
            self::TYPE_OPENBLOCKS,
            self::TYPE_PAIRDROP,
            self::TYPE_PENPOT,
            self::TYPE_PHPMYADMIN,
            self::TYPE_POCKETBASE,
            self::TYPE_POSTHOG,
            self::TYPE_REACTIVE_RESUME,
            self::TYPE_ROCKETCHAT,
            self::TYPE_SHLINK,
            self::TYPE_SLASH,
            self::TYPE_SNAPDROP,
            self::TYPE_STATUSNOOK,
            self::TYPE_STIRLING_PDF,
            self::TYPE_SUPABASE,
            self::TYPE_SYNCTHING,
            self::TYPE_TOLGEE,
            self::TYPE_TRIGGER,
            self::TYPE_TRIGGER_WITH_EXTERNAL_DATABASE,
            self::TYPE_TWENTY,
            self::TYPE_UMAMI,
            self::TYPE_UNLEASH_WITH_POSTGRESQL,
            self::TYPE_UNLEASH_WITHOUT_DATABASE,
            self::TYPE_UPTIME_KUMA,
            self::TYPE_VAULTWARDEN,
            self::TYPE_VIKUNJA,
            self::TYPE_WEBLATE,
            self::TYPE_WHOOGLE,
            self::TYPE_WORDPRESS_WITH_MARIADB,
            self::TYPE_WORDPRESS_WITH_MYSQL,
            self::TYPE_WORDPRESS_WITHOUT_DATABASE,
        ];
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('project_uuid', $data ?? [], null);
        $this->setIfExists('environment_name', $data ?? [], null);
        $this->setIfExists('environment_uuid', $data ?? [], null);
        $this->setIfExists('server_uuid', $data ?? [], null);
        $this->setIfExists('destination_uuid', $data ?? [], null);
        $this->setIfExists('instant_deploy', $data ?? [], false);
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

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The one-click service type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
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
     * @param string|null $name Name of the service.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CreateServiceRequest., must be smaller than or equal to 255.');
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
     * @param string|null $description Description of the service.
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
     * @param string $project_uuid Project UUID.
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
     * @param string $environment_name Environment name. You need to provide at least one of environment_name or environment_uuid.
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
     * @param string $environment_uuid Environment UUID. You need to provide at least one of environment_name or environment_uuid.
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
     * @param string $server_uuid Server UUID.
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
     * @param string|null $destination_uuid Destination UUID. Required if server has multiple destinations.
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
     * @param bool|null $instant_deploy Start the service immediately after creation.
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
     * Gets docker_compose_raw
     *
     * @return string|null
     */
    public function getDockerComposeRaw()
    {
        return $this->container['docker_compose_raw'];
    }

    /**
     * Sets docker_compose_raw
     *
     * @param string|null $docker_compose_raw The Docker Compose raw content.
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


