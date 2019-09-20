解鎖資料夾權限的方法：
移動到該資料夾上一層後,輸入
sudo chown -R dw ./2019_08_15Homework
===================================================================================================
放在var/www/html資料夾中的檔案開啟方法
http://10.0.2.15/*.PHP
http://localhost/test.php
===================================================================================================
PHP var_dump() 函数
http://www.runoob.com/php/php-var_dump-function.html

PHP strip_tags() 函数
https://www.w3school.com.cn/php/func_string_strip_tags.asp

PHP基礎練習-依序取出陣列中的值
http://ps.hsuweni.idv.tw/?p=4609

PHP 陣列轉字串
https://www.itread01.com/content/1545426741.html


內含php相關連結
http://codertw.com/%E7%A8%8B%E5%BC%8F%E8%AA%9E%E8%A8%80/201978/


执行以下,即可获得完整的phpinfo输出
php -r 'phpinfo();'
Loaded Configuration File 	/etc/php/7.2/fpm/php.ini 


PHP跳轉頁面的三種方式
https://s90304a123.pixnet.net/blog/post/39295907-php%E8%B7%B3%E8%BD%89%E9%A0%81%E9%9D%A2
===================================================================================================
[PHP] $_SERVER 的詳細用法
$_SERVER['HTTP_HOST'] #當前請求的 Host: 頭部的內容。(輸入的網域名稱)
$_SERVER['SERVER_NAME'] #當前運行腳本所在服務器主機的名稱。
$_SERVER['APP_ENV']   （自定義的資料）
$_SERVER['SERVER_ADDR']  (在/etc/hosts設定的網域ip)
$_SERVER['DOCUMENT_ROOT'] #當前運行腳本所在的文檔根目錄。（運行的laravel檔案）
$_SERVER['PHP_SELF'] #當前正在執行腳本的文件名，與 document root相關。
$_SERVER['SCRIPT_FILENAME'] #當前執行腳本的絕對路徑名。
$_SERVER['REQUEST_URI'] #訪問此頁面所需的 URI。例如，「/index.html」。 
$_SERVER['REQUEST_METHOD'] #訪問頁面時的請求方法。例如：「GET」、「HEAD」，「POST」，「PUT」。）
$_SERVER['QUERY_STRING'] #查詢(query)的字符串。 



假設我們的網址是 http://www.wibibi.com/test.php?tid=333
則以上 $_SERVER 分別顯示結果會是

echo $_SERVER['HTTP_HOST'];　//顯示 www.wibibi.com
echo $_SERVER['REQUEST_URI'];　//顯示 /test.php?tid=222
echo $_SERVER['PHP_SELF'];　//顯示 /test.php
echo $_SERVER['QUERY_STRING'];　//顯示 tid=222

透過這幾個 $_SERVER，我們已經取得了網址的各個部分，接著就是把網址給組合起來
$URL='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo $URL;
這樣就可以順利取得現在的網址囉！這只是個簡單的範例而已，如果網址結構較為複雜，可以調用更多的 $_SERVER 來取得詳細的部分，請參考 php.net 的 $_SERVER 介紹
===================================================================================================
