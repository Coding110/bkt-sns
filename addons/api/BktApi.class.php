<?php
class BktApi extends Api{

   function __construct(){
     parent::__construct(true);
   }

	function show(){
		return "Hello world";
	}
}
