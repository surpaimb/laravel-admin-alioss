alioss-upload extension  for laravel-admin
======
扩展laravel-admin的表单，实现web直传阿里OSS

## 截图
![](https://github.com/surpaimb/surpaimb/laravel-admin-alioss/blob/master/1.png?raw=true)

## 安装
```
composer require surpaimb/laravel-admin-alioss
php artisan vendor:publish --provider=Surpaimb\AliOssUpload\AliOssUploadServiceProvider
```
## 配置
在config/admin.php文件的extensions，加上属于这个扩展的一些配置
```php
'extensions' => [
        'alioss-upload' => [
            'OSS_ACCESS_ID' => '*****',
            'OSS_ACCESS_KEY' => '**************',
            'OSS_ENDPOINT' => 'oss-cn-shanghai.aliyuncs.com',
            'OSS_BUCKET' => '*****',
            'OSS_HOST' => 'http://****.oss-cn-shanghai.aliyuncs.com',
            'OSS_URL' => 'http://***.oss-cn-shanghai.aliyuncs.com' // 自定义域名（CDN）
        ]
    ],
```
## 使用
在form表单中使用它
```php
$form->aliOss('pic', '图片')->attribute('image');  // 单图（默认）
$form->aliOss('pic2', '图片2')->attribute('images'); // 多图
$form->aliOss('pic3', '图片2')->attribute('file'); // 多图
```

