<?php
namespace App\Services\Scout;
//use Algolia\AlgoliaSearch\SearchClient
//    ;
//use AlgoliaSearch\Client as Algolia;
//use AlgoliaSearch\Version as AlgoliaUserAgent;
use Algolia\AlgoliaSearch\Algolia;
use Algolia\AlgoliaSearch\Config\SearchConfig;
use Algolia\AlgoliaSearch\SearchClient;
use Laravel\Scout\EngineManager as BaseEngineManager;
use Laravel\Scout\Engines\AlgoliaEngine;


class EngineManager extends BaseEngineManager
{
    public function createAlgoliaDriver()
    {
//        AlgoliaUserAgent::addSuffixUserAgentSegment('Laravel Scout', '3.0.7');
            $searcj = SearchClient::create( config('scout.algolia.id'), config('scout.algolia.secret'));
        $config = SearchConfig::class;
        dd($config);
//        SearchClient::createWithConfig();
//        $config = ClientConfig::create('L9FXUGLV5T', '
//••••••••••••••••••••••••••••••••');
//        $config->setConnectTimeout(2);
//        $config->setReadTimeout(30);
//        $config->setWriteTimeout(30);
//
        SearchClient::createWithConfig($config);

        $algolia = new Algolia(
            config('scout.algolia.id'), config('scout.algolia.secret')
        );
        // 设置连接超时时间
        $algolia->setConnectTimeout(30);
        return new AlgoliaEngine($algolia);
    }
}
