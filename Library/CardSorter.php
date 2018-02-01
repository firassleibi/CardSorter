<?php
/**
 * CardSorter API
 * @author      Firas Sleibi
 * @version     v.1.0 (01/02/2018)
 * @copyright   Copyright (c) 2018, Firas Sleibi
 * 
 */
 
/**
 * Class CardSorter
 * This Class can sort any provided Transportations cards
 * 
 */
Class CardSorter{
    /**
     * Cards Array
     */
    private $trips = array();
    
    /**
     * Class Constructer accepts initial Cards array as Input
     * @param Array $trips
     * Array Structure {Number - From - To - Transportation - Seat(Optional) - Gate(Optional)}
     */
    public function __construct(array $trips){
        $this->trips = $trips;
    }
    
    /**
     * Sort Method
     * Will Sort the provided cards array
     */
    public function sort(){
        $this->findFirstLast();
        $this->orderBySequence();
        $this->printCards();
        return $this->trips;
    }
    
    /** Will detect the first and last cards
     */
    private function findFirstLast(){
        for($i = 0; $i<count($this->trips); $i++){
            
            $isFirst = true;
            $isLast = true;
            
            
            foreach($this->trips as $trip){
                if($this->trips[$i]['From'] == $trip['To']){
                    $isFirst = false;
                    break;
                }
            }
            
            foreach($this->trips as $trip){
                if($this->trips[$i]['To'] == $trip['From']){
                    $isLast = false;
                    break;
                }
            }
            
            if($isFirst){
                array_unshift($this->trips,$this->trips[$i]);
                unset($this->trips[$i]);
            }
            if($isLast){
                array_push($this->trips,$this->trips[$i]);
                unset($this->trips[$i]);
            }
           
        }
        $this->trips = array_merge($this->trips);
        
    }
    
    /**
     * Order by Sequence Method
     * Will reorder the cards by sequence
     */
    private function orderBySequence(){
        for($i = 1; $i<count($this->trips)-1;$i++){
    
        if($this->trips[$i]['To']!=$this->trips[$i+1]['From']){
            $temp = $this->trips[$i];
            $this->trips[$i] = $this->trips[$i+1];
            $this->trips[$i+1] = $temp;
        }
        
        }
    }
    
    /** Print Cards Method
     * Will print the sorted cards Array in a human readable format
     */
    private function printCards(){
        foreach($this->trips as $trip){
            $message =  "Take ".$trip["Transportation"]." ".$trip["Number"]." from ".$trip["From"]." to ".$trip["To"].".";
            
            if(isset($trip["Gate"])){
                $message .= " Take Gate ".$trip["Gate"].".";
            }
            
            if(isset($trip["Seat"])){
                $message .= " Sit in seat ".$trip["Seat"].".";
            }
            
            
            $message .= "<br/>";
            
            echo $message;
            
        }
        echo "You have arrived at your final destination.";
        
    }
}
?>