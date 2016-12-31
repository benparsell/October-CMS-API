<?php namespace Inveigle\API;

use Backend;
use System\Classes\PluginBase;

/**
 * API Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'API',
            'description' => 'October CMS API endpoints',
            'author'      => 'Inveigle',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Inveigle\API\Components\api' => 'api',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'inveigle.api.some_permission' => [
                'tab' => 'API',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'api' => [
                'label'       => 'API',
                'url'         => Backend::url('inveigle/api/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['inveigle.api.*'],
                'order'       => 500,
            ],
        ];
    }

}
