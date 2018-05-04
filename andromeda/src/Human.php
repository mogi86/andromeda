<?php
namespace App;

/**
 * コンストラクタインジェクションをすることで、
 * テストを書く際にモック化することができることを確認するためのクラス
 */
class Human
{
    /**
     * @var Clock
     */
    private $clock;

    /**
     * Human constructor.
     *
     * @param Clock $clock
     */
    public function __construct(Clock $clock)
    {
        $this->clock = $clock;
    }

    /**
     * 時計を見て現在時刻を言うメソッド
     *
     * @return string
     */
    public function sayTime()
    {
        $time = $this->clock->getCurrentTime();

        return "現在日時は{$time}です。";
    }
}
