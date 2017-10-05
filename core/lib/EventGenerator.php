<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/5
 * Time: 14:38
 */
namespace core\lib;
/**
 * Class EventGenerator
 * @package core\lib
 * 事件发生者
 */
abstract class EventGenerator{
    /**
     * @var
     * 观察者对于事件发生者来说是不可见的
     * 他并不知道有哪些人在观察这个事件，他只知道事件发生了
     *
     */
    private $observer;
    /**
     * 增加观察者
     */
    function addObserver(Observer $observer){
        $this->observer[] = $observer;
    }
        /**
         * 通知
         * 逐个去通知所有的观察者
         */
        function notify(){
            foreach ($this->observer as $observer){
                //逐个去执行每一个观察者的update方法 让观察者在事件发生以后逐一自动更新
                $observer->update();
            }
        }
}


class Event extends EventGenerator{
    function trigger()
    {
        echo "event";
        $this->notify();
    }
}

class Observer1 implements Observer{

    function update($event_info = null)
    {
        echo "观察者1";
        // TODO: Implement update() method.
    }
}

class Observer2 implements Observer{

    function update($event_info = null)
    {
        echo "观察者2";
        // TODO: Implement update() method.
    }
}

$event = new Event();
$event->addObserver(new Observer1());
$event->addObserver(new Observer2());
$event->trigger();