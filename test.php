<?php

/**
 * 假设有一个复杂的判断流程，检查一个人是否符合参加某项比赛的条件
 * 条件包括：
 *   1. 年龄必须大于等于18岁；
 *   2. 身高必须大于等于170cm；
 *   3. 体重必须在60kg~80kg之间；
 *   4. 必须有一定的运动能力，包括50米短跑必须在10秒以内、100米游泳必须在2分钟以内、50米自行车骑行必须在15秒以内。
 */
interface Handler
{
    public function handle($request);
}

abstract class AbstractHandler implements Handler
{
    protected $successor;

    public function setSuccessor(Handler $successor)
    {
        $this->successor = $successor;
    }

    public function handle($request)
    {
        if ($this->process($request) && $this->successor) {
            $this->successor->handle($request);
        }
    }

    abstract protected function process($request);
}

class AgeHandler extends AbstractHandler
{
    protected function process($request)
    {
        if ($request['age'] < 18) {
            echo "年龄必须大于等于18岁。";
            return false;
        }

        return true;
    }
}

class HeightHandler extends AbstractHandler
{
    protected function process($request)
    {
        if ($request['height'] < 170) {
            echo "身高必须大于等于170cm。";
            return false;
        }

        return true;
    }
}

class WeightHandler extends AbstractHandler
{
    protected function process($request)
    {
        if ($request['weight'] < 60 || $request['weight'] > 80) {
            echo "体重必须在60kg~80kg之间。";
            return false;
        }

        return true;
    }
}

class SkillHandler extends AbstractHandler
{
    protected function process($request)
    {
        if ($request['running'] > 10 || $request['swimming'] > 120 || $request['biking'] > 15) {
            echo "必须有一定的运动能力，包括50米短跑必须在10秒以内、100米游泳必须在2分钟以内、50米自行车骑行必须在15秒以内。";
            return false;
        }

        return true;
    }
}

$ageHandler = new AgeHandler();
$heightHandler = new HeightHandler();
$weightHandler = new WeightHandler();
$skillHandler = new SkillHandler();

$ageHandler->setSuccessor($heightHandler);
$heightHandler->setSuccessor($weightHandler);
$weightHandler->setSuccessor($skillHandler);

$request = [
    'age' => 18,
    'height' => 170,
    'weight' => 90,
    'running' => 11,
    'swimming' => 110,
    'biking' => 14
];

$ageHandler->handle($request);
