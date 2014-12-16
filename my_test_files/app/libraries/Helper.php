<?php

namespace App\Libraries;

use URL,
    Cache,
    Log,
    GuzzleHttp\Client,
    Config;

class Helper {

    /**
     * @brief   assets wrapper to have custom path / CDN
     *
     * @param   string $path
     * @return  string URL
     */
    public static function asset($path) {
        $path = Config::get('app.asset_prefix') . $path;

        return URL::asset($path);
    }


    public static function globalMenu() {
        $menuString = '<ul class="nav navbar-nav globalnav-list">';
        $menus = self::menuItems();
        foreach ($menus as $menuLevelOne) {
            $menuString .= "
            <li class='dropdown user-dropdown'>\n
                <a href = 'javascript:void(0);' class='dropdown-toggle' data-toggle='dropdown'>
                    {$menuLevelOne['title']}
                    <i class='fa fa-angle-down'></i>
                </a>\n";

            if (count($menuLevelOne['children'])) {
                $menuString .= "\n<ul class='dropdown-menu new_submenu_list'>";

                if (!empty($menuLevelOne['url'])) {
                    $menuString .= "<li><a href = '{$menuLevelOne['url']}'> {$menuLevelOne['title']} Home
                </a></li>\n";
                }

                foreach ($menuLevelOne['children'] as $menuLevelTwo) {
                    $menuString .= "<li><a href = '{$menuLevelTwo['url']}'>{$menuLevelTwo['title']}</a></li>\n";
                }
                $menuString .= '</ul>';
            }

            $menuString .= '</li>';
        }
        $menuString .= '</ul>';

        return $menuString;
    }

    public static function globalMenuModal() {
        $menuString = '';
        $menus = self::menuItems();

        foreach ($menus as $menuLevelOne) {
            $menuString .= <<<LEVELONE
            <div class="popup-menu-list item">
                <b>
                    <a href=" {$menuLevelOne['url']}"> {$menuLevelOne['title']}</a>
                </b>
LEVELONE;

            if (count($menuLevelOne['children'])) {
                $menuString .= "\n<ul class=\"list-unstyled popup_submenu_list\">";
                foreach ($menuLevelOne['children'] as $menuLevelTwo) {
                    $menuString .= "<li><a href = '{$menuLevelTwo['url']}'>{$menuLevelTwo['title']}</a></li>\n";
                }
                $menuString .= '</ul>';
            }

            $menuString .= ' </div>';
        }

        return $menuString;
    }

    private static function menuItems($noCache = false) {
        $menuItems = [];

        if ((true === $noCache) OR ( !$menuItems = Cache::get('GlobalMenu'))) {
            try {
                $client = new Client();
                $response = $client->get(Config::get('app.adoption_url') . '/header.json');
                $menuItems = $response->json();

                Cache::put('GlobalMenu', $menuItems, $ttl = 600);
            } catch (\GuzzleHttp\Exception\ParseException $e) {
                Log::error(__METHOD__ . ' : ' . $e->getMessage());
            }
        }

        return (array) $menuItems;
    }

    
}
