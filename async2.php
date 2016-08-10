<?php
//declare(strict_types=1);

require 'vendor/autoload.php';
require dirname(__FILE__) . '/helloworld.php';

use Avalonia\Component\Async\Core\PcntlAsyncRunner;

function greet($name = "1", $wt = 1)
{
    $client = new helloworld\GreeterClient('localhost:50051', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
    ]);
    $request = new helloworld\HelloRequest1();
    $request->setName($name);
    $request->setWaitMinutes($wt);
    list($reply, $status) = $client->SayHello($request);
    $message = $reply->getMessage();
    //print_r( $status);
    echo "\n" . $message;
}

class Task extends stdClass
{
    protected $callable;
    protected $params;

    /**
     * Item constructor.
     * @param $callable
     * @param $params
     */
    public function __construct($callable, $params)
    {
        $this->callable = $callable;
        $this->params = $params;
    }


    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @return mixed
     */
    public function getCallable()
    {
        return $this->callable;
    }
}

$queue = [];
$completed = 0;
$start = microtime(1);
$queue [] = new Task('greet', ['joe', 2]);
$queue [] = new Task('greet', ['nick', 2]);


class Runner
{
    protected $runners = [];
    protected $promises = [];
    protected $completed = 0;

    public function run($queue)
    {
        foreach ($queue as $key => $item) {
            $this->runners [$key] = new PcntlAsyncRunner();
            /** @var Avalonia\Component\Async\Promise $promise */
            $this->promises [$key] = $this->runners [$key]->run(function () use ($item) {
                call_user_func_array($item->getCallable(), $item->getparams());
                $this->completed++;
            })
                ->then(function ($res) {
                    $this->completed++;
                    echo "res" . $res;
                });
        }

    }

    /**
     * @return int
     */
    public function getCompleted()
    {
        return $this->completed;
    }
}

$runner = new Runner();
$runner->run($queue);

sleep(4);
echo "------" . $runner->getCompleted();

echo "\n\n total: " . (microtime(1) - $start);

