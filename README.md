# docker-compose up  -d --build


# docker exec --help
docker exec -it container-name bash

# symfony check:req



# run node with this command
1- docker exec -it container-name bash <br />
2- composer require encore <br />
3- docker-compose run --rm  node-service npm install or docker-compose run --rm  node-service yarn install<br />
4- docker-compose run --rm  node-service npm run dev OR docker-compose run --rm  node-service npm run watch<br />



# Twig Bundle Component
composer require symfony/twig-bundle<br /><br />



<!-- docker-compose run --rm php74-service bash -->
<!-- docker-compose run --rm node-service npm run watch -->


# configration database
composer require doctrine
docker-compose run --help
symfony console make:entity
symfony console make:migration
## docker-compose run  --rm php symfony console make:entity
docker-compose run  --rm container-name php bin/console doctrine:database:create
docker-compose run  --rm php74-service php bin/console doctrine:database:create



<!-- Symfony Flex Component -->
<!-- composer require symfony/flex -->




# Enter mysql in container
docker exec -it container-name  bash
mysql -uroot -psecret 


# input data in database
<!-- docker-compose run --rm php74-service php bin/console doctrine:fixtures:load -->









