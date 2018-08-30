<?php
require __DIR__ . '/vendor/autoload.php';

//将json数据转换为数组格式
//$events = json_decode(file_get_contents(__DIR__.'/events.json'),true);

//下面我们使用collect来操作
$events = collect(json_decode(file_get_contents(__DIR__ . '/events.json'), true));

//使用面向对象的方式 对代码进行重构

/**
 * Class GithubScore
 */
class GithubScore {

    /**
     * @var
     */
    private $events;

    /**
     * GithubScore constructor.
     *
     * @param $events
     */
    private function __construct($events)
    {
        $this->events = $events;
    }

    /**
     * @param $events
     *
     * @return mixed
     */
    public static function score($events)
    {
        return (new static($events))->scoreEvents();
    }

    /**
     * @return mixed
     */
    private function scoreEvents()
    {
        return $this->events->pluck('type')->map(function ($eventType) {
            return $this->LookupEventScore($eventType,1);
        })->sum();
    }

    /**
     * @param $eventType
     *
     * @return mixed
     */
    private function LookupEventScore($eventType)
    {
        return collect(['PushEvent'         => 5,
                        'CreateEvent'       => 4,
                        'IssueEvent'        => 3,
                        'IssueCommentEvent' => 2])->get($eventType,1);
    }
}

dd(GithubScore::score($events));




//以下是最传统的解法
/*$eventTypes = [];
$score = 0;
foreach ($events as $event){
    $eventTypes[] = $event['type'];
}

foreach ($eventTypes as $eventType){
    switch ($eventType){
        case 'PushEvent':
            $score += 5;
            break;
        case 'CreateEvent':
            $score += 4;
            break;
        case 'IssueEvent':
            $score += 3;
            break;
        case 'IssueCommentEvent':
            $score += 2;
            break;
        default:
            $score += 1;
            break;
    }
}*/

