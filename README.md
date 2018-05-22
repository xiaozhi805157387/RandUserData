#### 更新内容
> 2018年05月22日
`
为开发者节省虚拟添加数据而浪费时间而开发，后续支持其他语言
`

#### php版随机生成一个用户数据
> 简单使用
```php
$randUser  = new RandUserUtils();
//进行随机
$randUser->rand();

//获取随机后名字（不执行rand不会更改值）
$name = $randuser->getName();

//获取随机后的手机号码
$phone = $randUser->getPhone();

//获取随机后性别
$sex = $randUser->getSex();

//获取随机后的省份
$province = $randUser->getProvince();


//获取随机后的生日
$birthday = $randUser->getBirthday();
```

> 只随机姓名
```php
$name = $user->getRandName();
```


> 只随机电话号码
```
$phone = $user->getRandPhone();
```

> 只随机省份
```
$province = $user->getRandProvince();
```

> 之随机生日年月份
```
$birthday = $user->getRandBirthday();
```
