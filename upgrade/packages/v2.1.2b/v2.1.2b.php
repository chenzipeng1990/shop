<?php

/**
 *v2.1.2b 升级程序
 * ============================================================================
 * 版权所有 (C) 2005-2011 北京亿商互动科技发展有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com
 * ----------------------------------------------------------------------------
 * 
 * 
 * ============================================================================
 * $Author: zp $
 * $Date: 2011-01-19 14:29:08 +0800 (星期三, 2011-01-19) $
 * $Id: v2.1.2b.php 17217 2011-01-19 06:29:08Z zp $
 */

class up_v2_1_2b
{
    var $sql_files = array('structure' => 'structure.sql',
                           'data' => 'data.sql');

    var $auto_match = true;

    function __construct(){}
    function up_v2_1_2b(){}

    function update_database_optionally(){}
    function update_files(){}
}

?>