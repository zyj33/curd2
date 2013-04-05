<?php

/*
+-------------------------
| Template
+-------------------------
*/
$_SCH = array(
    'table' => array(
        'name'                              => '',              //标题
        'name_form'                         => '',              //表单的标题
        'name_form_new'                     => '',              //添加表单的标题
        'name_form_edit'                    => '',              //编辑表单的标题
        'name_list'                         => '',              //列表的标题
        
        'button_list_new'                   => array(           //列表的添加按钮
            'name'                              => '',
            'uri'                               => '',
        ),
        'button_list_edit'                  => array(),         //列表的编辑链接
        'button_list_del'                   => array(),         //列表的删除链接
        //'button_form_back'                  => array(),       //表单的返回按钮

        'list_query_condition'              => '',              //string  列表的查询条件
        'list_disable_query'                => false,           //bool    关闭搜索器
        'list_disable_action'              => false,            //bool    关闭编辑、删除操作
        'list_disable_action_edit'         => false,            //bool    关闭编辑操作
        'list_disable_action_del'          => false,            //bool    关闭删除操作
        'list_disable_action_detail'
        'list_disable_add'                  => false,           //bool    关闭添加操作
        'list_disable_batch'                => false,           //bool    关闭批处理
        'list_sort'                         => false,           //bool    开启排序操作（0-否、1-是）
        'list_action_detail'
        'list_action' => array(                                 //array   添加一组新的动作
            0 => array(
                'name'                      => '批准',
                'uri'                       => '',
            ),
        ),
        'list_action_edit' => array(                            //array   自定义编辑动作
            'name'                          => '编辑',
            'uri'                           => '',
        ),
        'list_action_del' => array(                             //array   自定义删除动作
            'name'                          => '删除',        
            'uri'                           => '',
        ),
        'list_action_detail' => array(                          //array   自定义详细动作
            'name'                          => '详细',
            'uri'                           => '',
        ),

        //'form_column'                       => 1,               //int     表单字段的列数
        'form_submit_uri'                   => '',              //string  提交表单的URI
        'form_post_before_callback'         => '',              //string  表单提交之前的回调函数  
        'form_post_before_callback_param'   => array(),         //array   回调函数的参数
        'form_post_after_callback'          => '',              //string  表单提交之后的回调函数
        'form_post_after_callback_param'    => array(           //array   回调函数的参数
            '{current_table}'                   => '',              //string  当前表
            '{current_field}'                   => '',              //string  当前字段
            '{last_id}'                         => 0,               //int     插入的ID
        ),
        
        'field' => array(
            'name'                          => '',              //string  VARCHAR(255)  字段标签名
            'input'                         => 'text',          //string  VARCHAR(255)  数据类型（text-文本、num-数字、date-日期、time-时间、datetime-日期时间、bool-布尔、note-备注、attach-附件）
            
            'default'                       => '',              //string  VARCHAR(255)  默认值
            'comment'                       => '',              //string  TEXT          备注
            'readonly'                      => false,           //bool    TINYINT(1)    只读（0-否、1-是）
            'required'                      => false,           //bool    TINYINT(1)    必填（0-否、1-是）
            'reduplicate'                   => true,            //bool    TINYINT(1)    不允许重复（0-否、1-是）
            'filter'                        => true,            //bool    TINYINT(1)    作为查询条件（0-否、1-是）
            'hidden'                        => false,           //bool    TINYINT(1)    隐藏，包括列表和表单（0-否、1-是）
            'hidden_list'                   => false,           //bool    TINYINT(1)    只在列表中隐藏（0-否、1-是）
            'hidden_form'                   => false,           //bool    TINYINT(1)    只在表单中隐藏（0-否、1-是）

            'link_table'                    => '',              //string  VARCHAR(255)  连结表
            'link_field'                    => '',              //string  VARCHAR(255)  连结表的字段
            'link_vendor_table'             => '',              //string  VARCHAR(255)  连结第三方表
            'link_vendor_column'            => '',              //string  VARCHAR(255)  连结第三方表的字段
            'link_condition'                => '',              //string  TEXT          连接条件
            'sync_column_id'                => 0,               //int     INT(10)       外键，同步的数据项目ID 
            'sync_condition'                => '',              //string  TEXT          同步条件 
            'save_condition'                => '',              //string  TEXT          保存条件 
            'save_comment'                  => '',              //string  TEXT          保存条件说明
            'width'                         => 'auto',          //string  INT(10)       控件宽度（纯数字，不带单位px）
            'render'                        => '',              //string  TEXT          定制显示控件
            'post_before'                   => '',              //string  TEXT          字段提交之前的处理
            'post_after'                    => '',              //string  TEXT          字段提交之后的处理

            'input_text_dict_id'            => 0,               //int     INT(10)       字典ID
            'input_text_mulit'              => false,           //bool    TINYINT(1)    多选（0-否、1-是）
            'input_text_sync'               => false,           //bool    TINYINT(1)    同步（0-否、1-是）
            'input_text_autonum'            => '',              //string  VARCHAR(255)  自动编号（''-无、general-普通编号、serial-流水号）
            'input_text_autonum_format'     => '',              //string  VARCHAR(255)  水流号格式（YYYYMMDD、YYYYMD...）
            'input_text_autonum_prefix'     => '',              //string  VARCHAR(255)  编号前缀
            'input_text_autonum_length'     => 0,               //string  VARCHAR(255)  编号长度
            'input_text_autonum_default'    => '',              //string  VARCHAR(255)  缺省编号
            'input_num_type'                => 'general',       //string  VARCHAR(255)  数字类型（general-常规、currency-货币）
            'input_num_integer_length'      => 0,               //int     TINYINT(6)    整数位数
            'input_num_float_length'        => 0,               //int     TINYINT(6)    小数位数
            'input_num_currency_symbol'     => '￥',            //string  VARCHAR(255)  货币符号（cny-￥、usd-$） 
            'input_num_statistics'          => '',              //string  VARCHAR(255)  统计（sum-合计、avg-平均、max-最大、min-最小）  
            'input_num_range_gt'            => 0,               //int     INT(8)        大于 
            'input_num_range_gt_eq'         => 0,               //int     INT(8)        大于等于
            'input_num_range_lt'            => 0,               //int     INT(8)        小于
            'input_num_range_lt_eq'         => 0,               //int     INT(8)        小于等于
            'input_num_range_eq'            => 0,               //int     INT(8)        等于 
            'input_num_range_not_eq'        => 0,               //int     INT(8)        不等于
            'input_date_format'             => 'YYYY-MM-DD',    //string  VARCHAR(255)  日期格式（YYYYMMDD、YYYY-MM-DD...）
            'input_attach'                  => '',              //string  VARCHAR(255)  pic-图片、attach-附件）
            'input_attach_id'               => 0,               //int     INT(10)       附件ID
            'select_value'                  => array(),         //array select-下拉框类型字段的选项值

            'column'                        => 0,               //bool    TINYINT(1)    不在列当中显示（0-否、1-是）
            'column_width'                  => 0,               //int     INT(8)        列宽度
            'column_order'                  => 0,               //int     TINYINT(6)    列排序   
            'column_bgcolor'                => '',              //string  VARCHAR(255)  背景颜色 
        ),
    ),
);



+-------------------------
| Explame
+-------------------------

$_SCH['auto'] = array(  //-- 表名，键名即表名
    'name' => '车辆档案',
    'field' => array(
        'plate_number' => array(  //-- 字段名，键名即字段名
            'name'                         => '车牌号',
            'default'                      => '川A',
            'required'                     => true,
            'reduplicate'                  => true,
            'filter'                       => true,
        ),
        'type' => array(
            'name'                         => '车辆类型',
            'required'                     => true,
            'filter'                       => true,
            'input_text_dict_id'           => 40,
        ),
        'engine_no' => '发动机号',  //-- 如果字段为默认配置（字符串类型），则可省略数组，直接写标签名
        'frame_no'  => '车架号',
    ),
);
*/

