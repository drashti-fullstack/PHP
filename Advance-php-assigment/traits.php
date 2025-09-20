<!-- Create two traits and use them in a class to demonstrate how to include multiple behaviors. -->

<?php

trait logger{
    public function log($message){
        echo "[log]: $message\n";
    }
}

trait notifier{
    public function notify($user,$message){
        echo "notifying $user:$message\n";
    }
}
class usermanager{
    use logger,notifier;

    public function create($username){
        echo "user '$username' created succesfully.\n";
        $this->log("user '$username' was created.");
        $this->notify($username,"Welcome to the system!");

    }
}

$manager=new usermanager();
$manager->create("drashti");

?>