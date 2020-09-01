<?php
namespace Wechat\App\Service\Send;

/**
 * 发送xml消息
 */
class SendMessageSendXml extends AbstractSend
{
    /** @var null 定义body解析类，会自动解析 */
    protected $bodyClass = \Wechat\App\Service\Send\Body\BodyMessageSendXml::class;
}
