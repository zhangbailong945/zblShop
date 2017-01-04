<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class pages{
    
    private $each_page_nums;//每页显示数据行
    private $sum_nums; //总行数
    private $current_page; //当前页
    private $sub_pages; //每次显示的页数
    private $page_nums; //总页数
    private $page_array=array(); //用来构造分页的数组
    private $subpage_link; //每个分页的链接
    private $subpage_type; //显示分页类型 1.普通分页 2.逐步分页
    
    function __construct($each_page_nums,$sum_nums,$current_page,$sub_pages,$subpage_link,$subpage_type) {
        $this->each_page_nums= intval($each_page_nums);
        $this->sum_nums= intval($sum_nums);
        if(!$current_page)
        {
            $this->current_page=1;
        }
        else
        {
            $this->$current_page=intval($current_page);
        }
        $this->sub_pages= intval($sub_pages);
        $this->page_nums= ceil($sum_nums/$each_page_nums);
        $this->subpage_link=$subpage_link;
        $this->show_PageType($subpage_type);
    }
    
    function __destruct() {
        unset($each_page_nums);
        unset($sum_nums);
        unset($current_page);
        unset($sub_pages);
        unset($page_nums);
        unset($page_array);
        unset($subpage_link);
        unset($subpage_type);
    }
    
    /**
     * 显示分页类型
     * @param type $subpage_type 分类类型
     */
    function show_Page_Type($subpage_type)
    {
        switch ($subpage_type)
        {
           case 1:
               $this->show_Page_Style1();
               break;
           case 2:
               $this->show_Page_Style2();
               break;
           default :
               $this->show_Page_Style1();
        }
    }
    
    /**
     * 初始化分页的数组函数
     * @return Array
     */
    function init_Array(){
        for($i=0;i<$this->sub_pages;$i++)
        {
            $this->page_array[$i]=$i;
        }
        return $this->page_array;
    }
    
    function construct_num_page()
    {
        //如果总页数小于显示页数
        if($this->page_nums<$this->sub_pages)
        {
            $current_array();
            for($i=0;$i<$this->$page_nums;$i++)
            {
                $current_array[$i]=$i+1;
            }
        }
        else
        {
            $current_array=$this->init_Array();
            if($this->current_page<=3)
            {
                for($i=0;$i<count($current_array);$i++)
                {
                    
                }
           
            }
        }
        
    }
            
            
}
