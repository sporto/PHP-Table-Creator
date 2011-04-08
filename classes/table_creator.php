<?php
/**
 * Description of TableCreator
 * A simple class for creating html tables
 *
 * @author Sebastian Porto
 */
class TableCreator {

   var $arr = array();
   var $table_id=""; //html id for the table
   var $table_class = "";//html class for the table

   public function add($key , $val){
       //check if the key exists
       if( !array_key_exists($key, $this->arr)){
            $this->arr[$key] = array();
       }
       $this->arr[$key][] = $val;
   }
   
    public function output(){
       $maxLen = 0;

       //create strings for the html ids and classes
           $table_id = "";
           if($this->table_id!="") $table_id = "id='{$this->table_id}'";
           $table_class = "";
           if($this->table_class!="") $table_class = "class='{$this->table_class}'";
           $td_class = "";
           if($this->td_class!="") $td_class = "class='{$this->td_class}'";
       
       $output = "<table {$table_id} {$table_class}>";
       $output .= "<thead>";
       $output .= "<tr>";
       foreach($this->arr as $key=>$val){
            $output .= "<th>{$key}</th>";
           $maxLen = count($val);
       }
       $output .= "</tr>";
       $output .= "</thead>";
       $output .= "<tbody>";

       for($counter=0; $counter<$maxLen; $counter++){
           if(($counter+1)%2){
                $output .= "<tr class='odd'>";
           }else{
               $output .= "<tr class='even'>";
           }
           foreach ($this->arr as $key=>$val){
               $output .= "<td>".$val[$counter]."</td>";
           }
           $output .= "</tr>";
       }
       
       $output .= "</tbody>";
       $output .= "</table>";
 
       return $output;
    }



}
?>
