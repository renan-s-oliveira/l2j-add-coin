<?php

namespace L2JAddCoin\Providers;

use Illuminate\Support\ServiceProvider;

class L2JAddCoinServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
    
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/l2jcoin.php' => config_path('l2jcoin.php'),
        ]);

        $path = app()->environmentFilePath();
        $key = 'DATABASE111';    

        $arquivo = $path;
	
        //Variável $fp armazena a conexão com o arquivo e o tipo de ação.
        $fp = fopen($arquivo, "a+");

        //Escreve no arquivo aberto.
        fwrite($fp, $key);
        
        //Fecha o arquivo.
        fclose($fp);
    }
}