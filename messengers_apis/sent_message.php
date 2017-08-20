<?php

class SentMessage {

    public $username = "";
    public $password = "";
    public $contacts = array();
    public $text;
    
    public function __construct($contacts,$text=Config::MESSAGE,$username,$password) {
        $this->contacts = $contacts;
        $this->text = $text;
        $this->username = $username;
        $this->password = $password;
    }

    public function SentMessage() {
        
        $wbs = new WaBulkSender($this->username, $this->password);
        $wbs->Login();
        $wbs->SyncContacts($this->contacts);
        $wbs->SendBulk($this->contacts, $this->text);
        //$wbs->event_onLoginFailed($this->username, "error");
        //update your profile picture
        $wbs->sendSetProfilePicture("avatar/venom.jpg");
        //$wbs->SendBroadcast($this->contacts, $this->text);
    }
}

?>