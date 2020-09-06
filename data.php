<?php

class Restaurant{
    private $menuDetailList;

    public function __construct(array $menuDetailList){
        if (sizeof($menuDetailList)>0){
            $this->menuDetailList=$menuDetailList;
        }        
        else{
            throw new Exception("No menu item details present");
        }
    }

    public function getList(){
        $list=array();
        foreach($this->menuDetailList as $detail){
            $key=$detail['id'];
            $list[$key]=$detail['name'];
        }
        return json_encode($list);

    }

    public function getDetails($name){
        $block=["In-Valid item"];
        if($name) {
            
            foreach ($this->menuDetailList as $detail) {
                if($name==$detail['id']){
                    $block=$detail;
                    break;
                }
            }
        }
        return json_encode($block);
    }
}
?>