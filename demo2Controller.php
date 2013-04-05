<?php
/*
+-----------------------------------------------------------------------------------------------------------------------
|    配置项目			默认值			类型		注释
+-----------------------------------------------------------------------------------------------------------------------
*/
$SCH['表名'] = array(
	'title' 									=> '',					// string 模块标题，			优先级1，数字越大优先级越高，优先级高的覆盖低
	'title_list'								=> '',					// string 模块列表标题，		优先级2
	'title_form' 								=> '',					// string 模块表单标题，		优先级2
	'title_form_new'							=> '',					// string 模块添加表单标题，	优先级3
	'title_form_edit'							=> '',					// string 模块编辑表单标题，	优先级3
		
	'field' => array(		
		'数据表字段名' 							=> '',					// string 字段快捷定义方式，“数据表字段名+字段名称”的键值对
		
		//例如		
		'name'=> '名称',		
		
		
		'数据表字段名' => array(		
			'label'								=> '',					// string 字段名称
			'input'								=> 'text',				// string 字段控件类型
			
			//数字 integer
			'input' 						=> array(
				'type'							=> 'integer',			
				'prefix'						=> '',					// string 前缀 
				'suffix'						=> '',					// string 后缀
				'decimal digits'				=> '',					// string 小数位数
				'decimal notation'				=> '',					// string 小数点符号
				'micrometer a symbol'			=> '',					// string 千分位符号
				'negative number'				=> '',					// string 是否可为负数
			),

			//日期时间
			'input'							=> array(
				'type'							=> 'datetime',
				'format'						=> 'Y-m-d H:i:s'		// string 日期时间格式
			),
			
			//下拉框
			'input' 						=> array(
				'type'							=> 'select',
				'item'							=> array(), 			// array 下拉框
				'remove_first'					=> false,				// bool 移出第一项（<option value="">请选择</option>）
			),
			
			//附件
			'input'							=> array(
				'path'							=> 'attach/'.date('Y-m-d'),		// string 保存路径
				'img'							=> false,						// bool 是否为图片，如果为图片可在页面上显示出来，否则显示文件名
				'img_style'						=> '',							// string 图片样式
			),
			
			//外键
			
			//--- 字段类型列举结束 ---//
			
			'default'							=> '',					// string 默认值
			'help'								=> '',					// string 帮助提示
		),
	),
);



//--- 衍生字段类型 ---//

//人民币
$IMPUT['currency_cny'] = array(
	'type'		=> 'integer',
);

//美元
$INPUT['currency_usd'] = array(
	'type'		=> 'integer',
);

//布尔值
$INPUT['bool'] = array(
	'type'		=> 'select',
	'item'		=> array(
		1			=> '是',
		2			=> '否',
	),
);


//图片，从attach衍生 **


//日期、时间，从datetime衍生 ****

//日期
$INPUT['date'] = array(
	'type'		=> 'datetime',
	'format'	=> 'Y-m-d',
);

//时间
$INPUT['time'] = array(
	'type'		=> 'datetime',
	'format'	=> 'H:i:s',
);









