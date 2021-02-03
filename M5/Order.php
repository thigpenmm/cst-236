<?php
class Order{
   private $id;
   private $date;
   private $user_id;
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
    public function getUser_id()
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
     * @param mixed $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }


/**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

function __construct($id, $date, $user_id, $address_id, $total){
       $this->id = $id;
       $this->date = $date;
       $this->user_id = $user_id;

       $this->total = $total;
   }
   
   
   

}
?>