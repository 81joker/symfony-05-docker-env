# docker-compose up  -d --build


# docker exec --help

docker exec -it container-name bash

# symfony check:req

# run node with this command
1- docker exec -it container-name bash <br />
2- composer require encore <br />
3- docker-compose run --rm  node-service npm install or docker-compose run --rm  node-service yarn install<br />
4- docker-compose run --rm  node-service npm run dev OR docker-compose run --rm  node-service npm run watch<br />





<!-- docker-compose run --rm php74-service bash -->
<!-- docker-compose run --rm node-service npm run watch -->


#composer require doctrine


docker-compose run --help
## docker-compose run  --rm php symfony console make:entity
docker-compose run  --rm container-name php bin/console doctrine:database:create
docker-compose run  --rm php74-service php bin/console doctrine:database:create



<!-- Symfony Flex Component -->
<!-- composer require symfony/flex -->

<!-- mysql -uroor -psecret -->









<!-- 1- composer require doctrine
2- symfony console make:entity

3- symfony console make:migration

4- symfony console -->