<?php
//meitu xiuxiu api
class XiuxiuApi extends Api{
   //calling from local 
   function __construct(){
     parent::__construct(true);
   }

   /* receive processed picture raw post from meitu xiuxiu editor and save it
    * @param $save_path ie '/data/xx.jpg'
    * @return boolean
    */
   function upload(){
     $upload = model('Attach');
     $pic_info = $upload->upload(array('attach_type'=>'feed_image','upload_type'=>'image'));
     if($pic_info['status']){
       //return var_export($pic_info);
       return array('attach_id'=>$pic_info['info'][0]['attach_id'],'url'=>'/data/upload/'.$pic_info['info'][0]['save_path'].$pic_info['info'][0]['save_name']);
    }
    //    return file_put_contents($save_path,@file_get_contents('php://input'));
  }
}