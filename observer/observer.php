<?php


class Observer{
    public $storename = "Apple Store";
    public $subscribers = array();
    public $news;
    

 
    //Method for Storename
    public function StoreName(){
        return $this->storename ;

     }

    //Add new subscribers to the list
    public function attach($subscriber){
        $this->subscribers[] = $subscriber;
    }

    //Remove subscribers
    public function detuch($subscriber){
        $findSubscriber = array_search($subscriber, $this->subscribers, true);

        if($findSubscriber){
            unset($this->subscribers[$findSubscriber] );
        }
    }

    //New Updates
    public function newUpdates($updateNews){
        $this->news = $updateNews;

        $this->Notification();

    }


    //Get the News
    public function getNewUpdates(){
        return $this->news;
    }

    //Notify Everyone
    public function Notification(){
      foreach ($this->subscribers as $value) {
        $value->sendNewsLetter($this);
      }
    }
}




