<?php

require("INews.php");
require("IPlugin.php");
require("ClickPlugin.php");
class NewsDetail implements INews
{
    public $news_data;
    public $news_id=0;
    public $plugs=[];//用来保存插件
    function __construct($newsid) //伪方法，用来演示根据ID 获取某条新闻。不要纠结
    {
        //这里假设有一堆新闻是从数据库取的
        $newsFromDataBase=[
            ["news_id"=>"101","news_title"=>"Android最佳的开源库集锦","news_content"=>"工欲善其事，必先利其器。一个好的开发库可以快速提高开发者的工作效率，甚至让开发工作变得简单。本文收集了大量的Android开发库，快来切磋一下，到底哪一个最适合你。"],
            ["news_id"=>"102","news_title"=>"Javascript里常见的事件位置属性","news_content"=>"pageX指鼠标在页面上的位置，以页面左侧为参考点clientX指可视区域内离左侧的距离，以滚动条滚动到的位置为参考点。各个浏览器相同"],
        ];
        $this->news_id=$newsid; //把参数ID保存到 类变量中
        $this->news_data=$newsFromDataBase;


        $click_plugin=new ClickPlugin();
        $this->regPlug($click_plugin);
    }
    function getNews() //伪方法，用来演示根据ID 获取某条新闻。不要纠结
    {
        foreach($this->news_data as $news)
        {
            if($news["news_id"]==$this->news_id)
                return $news;
        }
    }
    function display()
    {
        $get_news=$this->getNews();
        //下面的代码 是模拟假设加载了模板，根据数据输出内容
        echo "<h2>".$get_news["news_title"]."</h2>";
        echo "<div>".$get_news["news_content"]."</div>";


        //执行插件方法
        foreach($this->plugs as $plugName=>$plugObject)
        {
            $plugObject->update($this->news_id);
        }

    }


    function regPlug(IPlugin $plug)
    {
        // TODO: Implement regPlug() method.
        $this->plugs[strval($plug)]=$plug;
    }

    function unRegPlug(IPlugin $plug)
    {
        // TODO: Implement unRegPlug() method.
    }
}