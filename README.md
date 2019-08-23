yii2 swoole
===============================

让yii2运行在swoole上，不用修改一句代码。

安装
---------------
1. 使用composer
     composer的安装以及国内镜像设置请点击[此处](http://www.phpcomposer.com/)
     
     ```bash
     $ cd /path/to/yii2-app
     $ composer require "easyinfo/yii2-swoole"
     $ composer install -vvv
     ```
 

调试
-------------
var_dump、echo都是输出到控制台，不方便调试。可以使用\feehi\swoole\Util::dump()，输出数组、对象、字符串、布尔值到浏览器
