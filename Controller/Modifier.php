<?php 
$conf = new config;
if(isset($_GET['id']) AND !empty($_GET['id'])){
    // $idd = htmlspecialchars($_GET['id']);
    // $req = $conf->connect()->prepare($conf->sqlDeleteUser);
    // $req->execute(
    //     array($idd)
    // );
    // if($req->rowCount()==1){
    //     $edit = $req->fetch();
    //     var_dump($edit);
    // }else{
    //     die("Cette variable n existe pas");
    echo $_GET['id'];

}else{
    echo 'nonon';
}