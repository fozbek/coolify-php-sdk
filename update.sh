docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i https://raw.githubusercontent.com/coollabsio/coolify/refs/heads/v4.x/openapi.yaml \

  -g php -o /local \
  --additional-properties=composerPackageName=fozbek/CoolifyPHP,invokerPackage=CoolifyPHP\\Client