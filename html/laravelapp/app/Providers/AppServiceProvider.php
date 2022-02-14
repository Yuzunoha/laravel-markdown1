<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // https://blog.capilano-fw.com/?p=4668
        // 指定されたテキストからビューを取得し「そのまま」コードを取得します ※
        // パッケージを使ってMarkdownをHTMLへ変換
        // 変換したコードを返す
        Blade::directive('markdown', function ($expression) {
            $markdown = view(
                str_replace('\'', '', $expression)
            )->render();
            $Parsedown = new \Parsedown();
            return $Parsedown->text($markdown);
        });
    }
}
