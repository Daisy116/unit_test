解鎖資料夾權限的方法：
移動到該資料夾上一層後,輸入
sudo chown -R dw ./2019_08_15Homework

下載gitlab專案的方法
ssh-add -k ~/.ssh/id_daisy.4096
輸入私鑰密碼(電話)
git clone ssh://git@rd1-gitlab.vir888.com:16688/......
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
PHP常用與數據庫連結技巧
https://www.jb51.net/Special/231.htm


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
Simple PHP try catch example
https://stackify.com/php-try-catch-php-exception-tutorial/   !!!!!!!!!!!!!!
http://asika.windspeaker.co/post/3503-php-exceptions         未看

try {
    // 要執行的程式碼放這
}
catch (exception $e) {
    // 處理exception的程式碼放這
}
finally {
    // finally可寫可不寫，此處程式碼一定會執行
}
--------------------------------------------------------------------------------------------------
try塊包含可能引發異常的代碼。將執行try塊中的所有代碼，直到可能引發異常為止。
throw關鍵字用於表示PHP異常的發生。然後，PHP運行時將嘗試查找catch語句來處理該異常。
catch僅當try代碼塊中發生異常時，才會調用此代碼塊。catch塊中的代碼必須處理引發的異常。
finally是在PHP 5.5中，才有的語句。無論是否已引發異常，並且在正常執行恢復之前，finally塊中的代碼將始終在try和catch塊之後執行。這對於諸如無論是否發生異常都關閉數據庫連接之類的方案很有用。finally不僅用於異常處理，還用於執行清除代碼，例如關閉文件，關閉數據庫連接等。當try catch塊退出時，finally塊總是執行。這樣可以確保即使發生意外異常，也可以執行finally塊。
---------------------------------------------------------------------------------------------------
PHP支持在try catch中使用多個catch塊。這使我們可以根據引發的異常類型來自定義代碼。對於自定義向用戶顯示錯誤消息的方式，或者自定義重試首次失敗的內容時，這很有用。
try {
    // 要執行的程式碼放這
}
catch (Exception $e) {
    echo $e->getMessage();
}
catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
--------------------------------------------------------------------------------------------------
創建自定義PHP異常類型，自定義異常類繼承自PHP的Exception類的屬性，您可以向其添加自定義函數。
自定義異常用於可能不希望向用戶顯示異常的所有詳細信息，或者可以顯示用戶友好的消息並在內部記錄錯誤消息以進行監視。
class DivideByZeroException extends Exception {};
==================================================================================================






待看
https://stackify.com/php-error-handling-guide/
https://stackify.com/php-frameworks-development/
