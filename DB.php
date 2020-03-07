<?
/*
创建status表
CREATE TABLE `Nok_status` ( `name` TEXT NOT NULL , `status` INT NOT NULL , `url` TEXT NOT NULL , `error` INT NOT NULL , `all` INT NOT NULL ) ENGINE = InnoDB;
插入status
CREATE TABLE `Nok_status` ( `name` TEXT NOT NULL , `status` INT NOT NULL , `url` TEXT NOT NULL , `error` INT NOT NULL , `all` INT NOT NULL ) ENGINE = InnoDB;
log表
CREATE TABLE `Nok_log` (`url` text NOT NULL,`error` int(11) NOT NULL,`mail` text NOT NULL,`time` date NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;

*/
function loadDB(){
    require 'config.php';
    $_SERVER['config']=$config;
    Medoo_connect($_SERVER['config']['db']);
  }
  function Medoo_connect($config)
    {
      require 'medoo.php';
      $_SERVER['medoo']=new Medoo($config);

    }
    loadDB();