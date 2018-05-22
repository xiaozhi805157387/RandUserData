<?php
/**
 * Created by PhpStorm.
 * User: sunsun
 * Date: 2018/5/21
 * Time: 下午4:31
 */

namespace App\Util;


class RandUserUtils
{
    /** 姓 */
    const SURNNAME = ["王", "李", "张", "刘", "陈", "杨", "赵", "黄", "周", "吴", "徐", "孙", "胡", "朱", "高", "林", "何", "郭", "马", "罗", "梁", "宋", "郑", "谢", "韩", "唐", "冯", "于", "董", "萧", "程", "柴", "袁", "邓", "许", "傅", "沈", "曾", "彭", "吕", "苏", "卢", "蒋", "蔡", "贾", "丁", "魏", "薛", "叶", "阎", "余", "潘", "杜", "戴", "夏", "钟", "汪", "田", "任", "姜", "范", "方", "石", "姚", "谭", "廖", "邹", "熊", "金", "陆", "郝", "孔", "白", "崔", "康", "毛", "邱", "秦", "江", "史", "顾", "侯", "邵", "孟", "龙", "万", "段", "曹", "钱", "汤", "尹", "黎", "易", "常", "武", "乔", "贺", "赖", "龚", "文"];
    /** 字 */
    const WORD = ["薰", "颖", "芃", "蔓", "莓", "曼", "水", "淼", "滟", "滢", "淑", "浩", "亮", "政", "谦", "亨", "奇", "固", "之", "轮", "翰", "朗", "丹", "彤", "颜", "影", "韵", "音", "银", "纯", "纹", "思", "丝", "贵", "福", "生", "龙", "元", "全", "国", "胜", "学", "祥", "才", "晨", "辰", "士", "以", "建", "家", "致", "树", "炎", "德", "行", "洁", "清", "澜", "波", "淞", "渺", "漩", "漪", "涟", "湾", "汇", "姑", "姜", "姣", "嫂", "嫦", "嫱", "姬", "娇", "娟", "嫣", "婕", "俞", "倩", "倪", "倰", "偀", "偲", "妆", "佳", "亿", "仪", "寒", "环", "珆", "珊", "珠", "玲", "珴", "瑛", "琼", "瑶", "瑾", "瑞", "岚", "嵘", "兰", "羽", "素", "云", "华", "丽", "俪", "叆", "呤", "咛", "囡", "彩", "彤", "彨", "怜", "晴", "月", "明", "晶", "昭", "珍", "琦", "玫", "琪", "琳", "环", "琬", "瑗", "琰", "薇", "珂", "芬", "芳", "芯", "花", "茜", "荭", "荷", "莲", "莉", "莹", "菊", "若", "鸣", "朋", "斌", "梁", "栋", "维", "启", "克", "伦", "翔", "诚", "先", "敬", "震", "振", "壮", "会", "思", "群", "豪", "心", "菁", "苑", "芸", "芊", "茗", "荔", "菲", "蓉", "英", "蓓", "蕾", "晓", "欢", "枫", "巧", "美", "静", "惠", "翠", "雅", "红", "春", "宜", "女", "奴", "妶", "好", "妃", "姗", "姝", "姹", "姿", "婵", "明", "永", "健", "世", "广", "志", "义", "兴", "良", "海", "山", "冰", "冷", "冽", "霜", "雪", "霞", "霖", "香", "馡", "馥", "秋", "婧", "娴", "婉", "姐", "姞", "姯", "姲", "姳", "娘", "娜", "妹", "光", "天", "达", "安", "岩", "中", "茂", "进", "林", "有", "坚", "妍", "妙", "妹", "娆", "娉", "娥", "媚", "媱", "嫔", "婷", "玟", "秀", "露", "飘", "育", "滢", "馥", "筠", "柔", "竹", "霭", "凝", "芝", "萍", "燕", "苹", "荣", "草", "蕊", "芮", "蓝", "莎", "菀"];
    /** 电话号码前缀 */
    const PHONE_BEGIN = ["134", "135", "136", "137", "138", "139", "147", "150", "151", "152", "157", "158", "159", "172", "178", "182", "183", "184", "187", "188", "198", "130", "131", "132", "145", "155", "156", "166", "171", "175", "176", "185", "186", "133", "149", "153", "173", "177", "180", "181", "189", "199", "170"];
    /** 性别 */
    const SEX = ["男", "女"];
    /** 省份 */
    const PROVINCE = ["上海","云南","内蒙古","北京","台湾","吉林","四川","天津","宁夏","安徽","山东","山西","广东","广西","新疆","江苏","江西","河北","河南","浙江","海南","湖北","湖南","澳门","甘肃","福建","西藏","贵州","辽宁","重庆","陕西","青海","香港","黑龙江"];



    private $name;  //名字
    private $phone; //电话号码
    private $sex;    //性别
    private $province; //省份
    private $birthday;  //生日

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param mixed $province
     */
    public function setProvince($province)
    {
        $this->province = $province;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }




    /**
     * 随机所有
     */
    public function rand(){
        $this->getRandName();
        $this->getRandProvince();
        $this->getRandPhone();
        $this->getRandSex();
        $this->getRandBirthday();
    }



    /**
     * 获取一个随机名字
     */
    public function getRandName()
    {
        //随机到姓的小标
        $suranname_index = rand(0, count(self::SURNNAME) - 1);
        //查看字的总数量
        $word_sum = count(self::WORD) - 1;
        //字的数量
        $word_num = rand(1, 2);

        //名字拼接
        $name = RandUserUtils::SURNNAME[$suranname_index];
        for ($i = 0; $i < $word_num; $i++) {
            $word_index = rand(0, $word_sum);
            $name .= self::WORD[$word_index];
        }

        $this->setName($name);
        return $this->getName();
    }


    /**
     * 获取电话号码
     */
    public function getRandPhone()
    {
        //随机号码头
        $phone_index = rand(0, count(self::PHONE_BEGIN) - 1);

        //获取前缀
        $phone = self::PHONE_BEGIN[$phone_index];
        for ($i = 3; $i < 11; $i++) {
            $phone .= rand(0, 9);
        }

        $this->setPhone($phone);
        return $this->getPhone();
    }


    /**
     * 获取随机男女
     */
    public function getRandSex(){
        //获取随机男女下标
        $sex_rand_index = rand(0, count(self::SEX) - 1);
        $sex = self::SEX[$sex_rand_index];

        $this->setSex($sex);
        return $this->getSex();
    }


    /**
     * 随机全国省份
     */
    public function getRandProvince(){
        $province_rand_index = rand(0, count(self::PROVINCE) - 1);
        $province = self::PROVINCE[$province_rand_index];

        $this->setProvince($province);
        return $this->getProvince();
    }


    /**
     * 随机生日
     */
    public function getRandBirthday(){
        //获取某个时间
        $time = time();
        //目前先写死要开放年龄段，20-50

        //
        $min_time = $time - 50*365*24*60*60;
        $max_time  = $time - 20*365*24*60*60;
        //随机时间
        $rand_time = rand($min_time, $max_time);

        $this->setBirthday(date('Y-m-d', $rand_time));
        return $this->getBirthday();
    }




}
