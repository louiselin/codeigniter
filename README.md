# Codeigniter

> [What is CodeIgniter](https://github.com/louiselin/codeigniter/blob/master/readme.rst)


## 改資料庫設定

```config > database.php```


|    table_name    | columns |
| ---------- | --- |
| article |  id, title, content, timestamp |
| link       |  id, title, picture, url, timestamp |
| program       |  id, title, title_content, content, timestamp |
| result       |  id, title, title_content, content, timestamp, pdflink |
| auth       |  account, password |


## Build Setup

``` bash
# 完善資料庫設定後，啟動Web服務器
php -S localhost:8000
```

## 已實現

1. 前端
    - 文章列表
2. 後台
    - 權限登入
    - 文章列表
    - 創建文章
    - 新增和编辑文章功能
