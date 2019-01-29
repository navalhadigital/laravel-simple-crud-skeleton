<?php

namespace App\Helpers;

use App\Models\Config;
use App\Models\Menu;
use App\Models\Banner;
use App\Models\Rede;
use App\Models\Post;
use App\Models\Portfolio;
use App\Models\Palestrante;

class Helper
{
    public static function config($slug)
    {
        $data = session()->forget($slug);
        $data = session()->get($slug);

        if(!$data) {

          $config = Config::where('slug', $slug)->get();

          if($config->isNotEmpty()) {
            $data = $config->first()->valor;
          }

          session()->put($slug, $data);

        }

        return $data;
    }

    public static function configData($slug)
    {
        $key = $slug.'data';

        $data = session()->forget($key);
        $data = session()->get($key);

        if(!$data) {

          $config = Config::where('slug', $slug)->get();

          if($config->isNotEmpty()) {
            $data = $config->first();
          }

          session()->put($key, $data);

        }

        return $data;
    }

    public static function banners()
    {
        $key = 'banners';

        $banners = session()->forget($key);
        $banners = session()->get($key);

        if(empty($banners)) {

          $banners = Banner::where('ativo', true)->get();

          session()->put($key, $banners);

        }

        return $banners;
    }

    public static function menus()
    {
        $key = 'menus';

        $itens = session()->forget($key);
        $itens = session()->get($key);

        if(empty($itens)) {

          $itens = Menu::where('ativo',true)->get();

          session()->put($key, $itens);

        }

        return $itens;
    }

    public static function redes()
    {
        $key = 'redes';

        $redes = session()->forget($key);
        $redes = session()->get($key);

        if(empty($redes)) {

          $redes = Rede::where('ativo', true)->get();
          session()->put($key, $redes);

        }

        return $redes;
    }

    public static function posts()
    {
        $key = 'posts';

        $posts = session()->forget($key);
        $posts = session()->get($key);

        if(empty($posts)) {

          $posts = Post::where('ativo', true)->orderBy('created_at')->take(3)->get();

          session()->put($key, $posts);

        }

        return $posts;
    }

    public static function palestrantes()
    {
        $key = 'palestrantes';

        $palestrantes = session()->forget($key);
        $palestrantes = session()->get($key);

        if(empty($palestrantes)) {

          $palestrantes = Palestrante::where('ativo', true)->get();

          session()->put($key, $palestrantes);

        }

        return $palestrantes;
    }
}
