<?php
class XiuxiuHooks extends Hooks{


  function account_bind_after($arg=null){
    $this->display('account_bind_after');
  }
  function alipay_index($arg=null){
    $this->display('alipay_index');
  }
  function core_display_tpl($arg=null){
    $this->display('core_display_tpl');
  }
  function core_filter_error_message($arg=null){
    $this->display('core_filter_error_message');
  }
  function core_filter_init_action($arg=null){
    $this->display('core_filter_init_action');
  }
  function core_filter_init_api($arg=null){
    $this->display('core_filter_init_api');
  }
  function core_filter_init_app($arg=null){
    $this->display('core_filter_init_app');
  }
  function core_filter_init_site($arg=null){
    $this->display('core_filter_init_site');
  }
  function core_filter_init_user($arg=null){
    $this->display('core_filter_init_user');
  }
  function core_filter_init_widget($arg=null){
    $this->display('core_filter_init_widget');
  }
  function core_filter_set_title($arg=null){
    $this->display('core_filter_set_title');
  }
  function core_filter_success_message($arg=null){
    $this->display('core_filter_success_message');
  }
  function header_account_dropmenu($arg=null){
    $this->display('header_account_dropmenu');
  }
  function header_message_dropmenu($arg=null){
    $this->display('header_message_dropmenu');
  }
  function home_account_bind_bottom($arg=null){
    $this->display('home_account_bind_bottom');
  }
  function home_index_left_feedtop($arg=null){
    $this->display('home_index_left_feedtop');
  }
  function home_index_left_top($arg=null){
    $this->display('home_index_left_top');
  }
  function home_index_middle_publish($arg=null){
    $this->display('home_index_middle_publish');
  }
  function home_index_middle_publish_type($arg=null){
    $this->display('home_index_middle_publish_type');
  }
  function home_index_right_bottom($arg=null){
    $this->display('home_index_right_bottom');
  }
  function home_index_right_top($arg=null){
    $this->display('home_index_right_top');
  }
  function login_input_footer($arg=null){
    $this->display('login_input_footer');
  }
  function login_input_footer_title($arg=null){
    $this->display('login_input_footer_title');
  }
  function public_footer($arg=null){
    $this->display('public_footer');
  }
  function public_head($arg=null){
    $this->display('public_head');
  }
  function public_meta($arg=null){
    $this->display('public_meta');
  }
  function show_ad_space($arg=null){
    $this->display('show_ad_space');
  }
  function tipoff_send_box_tab($arg=null){
    $this->display('tipoff_send_box_tab');
  }
  function weibo_publish_after($arg=null){
    $this->display('weibo_publish_after');
  }
  function weibo_publish_content($arg=null){
    $this->display('weibo_publish_content');
  }
  function weibo_send_box_tab($arg=null){
    $this->display('weibo_send_box_tab');
  }
  function weibo_syn_middle_publish($arg=null){
    $this->display('weibo_syn_middle_publish');
  }
  function weibo_type($arg=null){
    $this->display('weibo_type');
  }
  function widget_upload_after_save($arg=null){
    $this->display('widget_upload_after_save');
  }
  function widget_upload_before_save($arg=null){
    $this->display('widget_upload_before_save');
  }
}