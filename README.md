# docker-compose up  -d --build


# docker exec --help

docker exec -it container-name bash

# symfony check:req


#composer require doctrine


docker-compose run --help
## docker-compose run  --rm php symfony console make:entity
docker-compose run  --rm container-name php bin/console doctrine:database:create
docker-compose run  --rm php74-service php bin/console doctrine:database:create



<!-- Symfony Flex Component -->
<!-- composer require symfony/flex -->

<!-- mysql -uroor -psecret -->

<!-- composer require encore -->


<!-- 1- composer require doctrine
2- symfony console make:entity

3- symfony console make:migration

4- symfony console -->