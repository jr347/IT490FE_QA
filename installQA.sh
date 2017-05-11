packageNum=`./getNum.php FEpackage-v | xargs`
sudo cp /home/johnny/Desktop/feqav-$packageNum.tar.gz /var/www/html/
rm feqav-$packageNum.tar.gz
cd /var/www/html

sudo tar -zxvf feqav-$packageNum.tar.gz

