# # CreatePublicApplicationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project_uuid** | **string** | The project UUID. |
**server_uuid** | **string** | The server UUID. |
**environment_name** | **string** | The environment name. You need to provide at least one of environment_name or environment_uuid. |
**environment_uuid** | **string** | The environment UUID. You need to provide at least one of environment_name or environment_uuid. |
**git_repository** | **string** | The git repository URL. |
**git_branch** | **string** | The git branch. |
**build_pack** | **string** | The build pack type. |
**ports_exposes** | **string** | The ports to expose. |
**destination_uuid** | **string** | The destination UUID. | [optional]
**name** | **string** | The application name. | [optional]
**description** | **string** | The application description. | [optional]
**domains** | **string** | The application domains. | [optional]
**git_commit_sha** | **string** | The git commit SHA. | [optional]
**docker_registry_image_name** | **string** | The docker registry image name. | [optional]
**docker_registry_image_tag** | **string** | The docker registry image tag. | [optional]
**is_static** | **bool** | The flag to indicate if the application is static. | [optional]
**static_image** | **string** | The static image. | [optional]
**install_command** | **string** | The install command. | [optional]
**build_command** | **string** | The build command. | [optional]
**start_command** | **string** | The start command. | [optional]
**ports_mappings** | **string** | The ports mappings. | [optional]
**base_directory** | **string** | The base directory for all commands. | [optional]
**publish_directory** | **string** | The publish directory. | [optional]
**health_check_enabled** | **bool** | Health check enabled. | [optional]
**health_check_path** | **string** | Health check path. | [optional]
**health_check_port** | **string** | Health check port. | [optional]
**health_check_host** | **string** | Health check host. | [optional]
**health_check_method** | **string** | Health check method. | [optional]
**health_check_return_code** | **int** | Health check return code. | [optional]
**health_check_scheme** | **string** | Health check scheme. | [optional]
**health_check_response_text** | **string** | Health check response text. | [optional]
**health_check_interval** | **int** | Health check interval in seconds. | [optional]
**health_check_timeout** | **int** | Health check timeout in seconds. | [optional]
**health_check_retries** | **int** | Health check retries count. | [optional]
**health_check_start_period** | **int** | Health check start period in seconds. | [optional]
**limits_memory** | **string** | Memory limit. | [optional]
**limits_memory_swap** | **string** | Memory swap limit. | [optional]
**limits_memory_swappiness** | **int** | Memory swappiness. | [optional]
**limits_memory_reservation** | **string** | Memory reservation. | [optional]
**limits_cpus** | **string** | CPU limit. | [optional]
**limits_cpuset** | **string** | CPU set. | [optional]
**limits_cpu_shares** | **int** | CPU shares. | [optional]
**custom_labels** | **string** | Custom labels. | [optional]
**custom_docker_run_options** | **string** | Custom docker run options. | [optional]
**post_deployment_command** | **string** | Post deployment command. | [optional]
**post_deployment_command_container** | **string** | Post deployment command container. | [optional]
**pre_deployment_command** | **string** | Pre deployment command. | [optional]
**pre_deployment_command_container** | **string** | Pre deployment command container. | [optional]
**manual_webhook_secret_github** | **string** | Manual webhook secret for Github. | [optional]
**manual_webhook_secret_gitlab** | **string** | Manual webhook secret for Gitlab. | [optional]
**manual_webhook_secret_bitbucket** | **string** | Manual webhook secret for Bitbucket. | [optional]
**manual_webhook_secret_gitea** | **string** | Manual webhook secret for Gitea. | [optional]
**redirect** | **string** | How to set redirect with Traefik / Caddy. www&lt;-&gt;non-www. | [optional]
**instant_deploy** | **bool** | The flag to indicate if the application should be deployed instantly. | [optional]
**dockerfile** | **string** | The Dockerfile content. | [optional]
**docker_compose_location** | **string** | The Docker Compose location. | [optional]
**docker_compose_raw** | **string** | The Docker Compose raw content. | [optional]
**docker_compose_custom_start_command** | **string** | The Docker Compose custom start command. | [optional]
**docker_compose_custom_build_command** | **string** | The Docker Compose custom build command. | [optional]
**docker_compose_domains** | **mixed[]** | The Docker Compose domains. | [optional]
**watch_paths** | **string** | The watch paths. | [optional]
**use_build_server** | **bool** | Use build server. | [optional]
**is_http_basic_auth_enabled** | **bool** | HTTP Basic Authentication enabled. | [optional]
**http_basic_auth_username** | **string** | Username for HTTP Basic Authentication | [optional]
**http_basic_auth_password** | **string** | Password for HTTP Basic Authentication | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
