<h1>Tugas Kelompok PJPB - Smart Contracts</h1>

<h2>Anggota kelompok</h2>

<ul>
  <li>Arina Salma Salsabila (20/459170/PA/19831)</li>
  <li>Gabriel Possenti Kheisa Drianasta (19/442374/PA/19123)</li>
  <li>Gregorius Adi Pradana (20/455382/PA/19597)</li>
  <li>Haikal Abdurrahman (19/445563/PA/19387)</li>
  <li>Timothy Cleytus Gultom (20/455390/PA/19605)</li>
</ul>

<h2>Teknologi</h2>

<ul>
  <li>Back end: PHP 7.2 (vanilla)</li>
  <li>Database: MySQL</li>
  <li>Hosting: DigitalOcean</li>
</ul>


<h2>URL frontend: <a href="https://testapp.pjpb.gabrielkheisa.xyz/login.php">https://testapp.pjpb.gabrielkheisa.xyz/login.php</a></h2>

<h2>Video demonstrasi dan penjelasan: <a href="https://drive.google.com/drive/u/1/folders/1L0w71TZnqa41XFDGfoZ3mM8ILZQeZeXE">https://drive.google.com/drive/u/1/folders/1L0w71TZnqa41XFDGfoZ3mM8ILZQeZeXE</a></h2>

<h2>Instalasi menggunakan <a href="https://github.com/adhocore/docker-lemp">Docker LEMP Stack</a>:</h2>
<h3>1. Buat file dengan nama <b>docker-compose.yml</b>, isi file dengan konfigurasi berikut:</h3>

```yaml
# ./docker-compose.yml
version: '3'

services:
  app:
    image: adhocore/lemp:7.4
    # For different app you can use different names. (eg: )
    container_name: some-app
    volumes:
      # app source code
      - ./web:/var/www/html
      # db data persistence
      - db_data:/var/lib/mysql
      # Here you can also volume php ini settings
      # - /path/to/zz-overrides:/usr/local/etc/php/conf.d/zz-overrides.ini
    ports:
      - 8080:80
    environment:
      MYSQL_ROOT_PASSWORD: supersecurepwd
      MYSQL_DATABASE: appdb
      MYSQL_USER: dbusr
      MYSQL_PASSWORD: securepwd
      # for postgres you can pass in similar env as for mysql but with PGSQL_ prefix

volumes:
  db_data: {}
```

<h3>2. Kemudian, compose </h3>

<pre>
docker-compose up -d
</pre>


<h3>3. Navigasi menuju folder <b>web</b> </h3>

<pre>
cd web
</pre>

<h3>4. Clone repository berikut, kemudian ganti branch ke <b>docker</b> </h3>

<pre>
git clone https://github.com/gabrielkheisa/tugas-pjpb.git
cd tugas-pjpb
git checkout docker
</pre>

<h3>5. Bash ke container untuk melakukan beberapa konfigurasi database: </h3>



<pre>
docker exec -u root -t -i some-app /bin/bash
</pre>

<h3>6. Login ke MySQL sebagai <b>root</b> dengan password <b>supersecurepwd</b></h3>

<pre>
mysql -u root -p
</pre>

<h3>7. Tambahkan tabel berikut, beserta user Admin:</h3>
<pre>
USE appdb;
CREATE TABLE `user_pjpb` (
	`nama` VARCHAR(30),
	`email` VARCHAR(30),
	`hash` VARCHAR(70),
	`public_key` VARCHAR(70),
	`url` TEXT(70),
	`id` INT(11) AUTO_INCREMENT,
	PRIMARY KEY (`id`)
);
</pre>

<h3>7. Berikan akses <b>dbusr</b> ke <b>appdb</b>:</h3>
<pre>
GRANT ALL PRIVILEGES ON appdb.* TO 'dbusr'@'localhost' WITH GRANT OPTION;
exit;
</pre>

<h3>Aplikasi dapat diakses melalui <b>http://{ip-address}:8080/login.php</b>, untuk registrasi melalui <b>http://{ip-address}:8080/register.php</b></h3>

