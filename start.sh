echo "1/4-Downloading scss base" &&
git clone git@gitlab.com:workable_packages/asset_bases.git ./resources/asset_bases > /dev/null &&
sudo rm -Rf ./resources/asset_bases/.git  > /dev/null
#echo "2/4-Building images" &&
#docker-compose build  > /dev/null &&
#echo "3/4-Starting containers" &&
#docker-compose up -d  > /dev/null &&
#echo "4/4-Running composer install" &&
#docker-compose exec php composer install > /dev/null &&
#cp ./source/.env.example ./source/.env  > /dev/null &&
#docker-compose exec php artisan key:generate > /dev/null &&
#echo "Sucessfully Installed Laravel on containers"
