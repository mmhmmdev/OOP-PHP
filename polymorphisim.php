<?php


/*
    Polymorphisim
    -Have Methods Without Body Code
 */

interface DBConnects {
    public function getUsers();
    public function getArticles();
    public function showStats();
}
class MySQL implements DBConnects
{
    public $name;
    
    public function getUsers(){
        echo 'SELECT * FROM users';
    }
    public function getArticles(){
        echo 'SELECT * FROM articles';
        
    }
    public function showStats(){
        echo 'SELECT * FROM stats';
        
    }
    // public function pressHome(){
    //     echo 'You Will See Opend Applications';
    // }

}

$sql = new MySQL();
$sql->getUsers();
$sql->getArticles();
$sql->showStats();
echo '<pre>';
print_r($sql);
echo '</pre>';

?>