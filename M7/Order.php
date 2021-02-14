<?php
class Order{
   private $id;
   private $date;
   private $username;
   private $total;

   /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

/**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

/**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->user_id;
    }


/**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

/**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

/**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

/**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }


/**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

function __construct($id, $date, $username, $total){
       $this->id = $id;
       $this->date = $date;
       $this->user_id = $username;

       $this->total = $total;
   }
   
   
   

}
?>