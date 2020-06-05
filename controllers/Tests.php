<?php namespace PopovN\BigBuyAPI\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use PopovN\BigBuyAPI\Classes\Catalog\Catalog;
use PopovN\BigBuyAPI\Classes\Module\Module;
use PopovN\BigBuyAPI\Classes\Order\Order;
use PopovN\BigBuyAPI\Classes\Shipping\Shipping;
use PopovN\BigBuyAPI\Classes\Tracking\Tracking;
use PopovN\BigBuyAPI\Classes\User\User;
use PopovN\BigBuyAPI\Models\Test;
use Redirect;
use ReflectionMethod;

class Tests extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'api_settings'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('PopovN.BigBuyAPI', 'bigbuy-api');
    }

    public function onTestAllAvailableCatalogFunctions()
    {
        $bigBuy = new Catalog();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new Catalog();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }

    public function onTestAllAvailableModuleFunctions()
    {
        $bigBuy = new Module();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new Module();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }

    public function onTestAllAvailableShippingFunctions()
    {
        $bigBuy = new Shipping();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new Shipping();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }

    public function onTestAllAvailableTrackingFunctions()
    {
        $bigBuy = new Tracking();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new Tracking();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }

    public function onTestAllAvailableUserFunctions()
    {
        $bigBuy = new User();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new User();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }

    public function onTestAllAvailableOrderFunctions()
    {
        $bigBuy = new Order();
        foreach (get_class_methods($bigBuy) as $method) {
            if ($method == "__construct") {
                continue;
            }
            $bigBuy = new Order();
            $r = new ReflectionMethod($bigBuy, $method);
            $params = $r->getParameters();
            $allOptional = true;
            foreach ($params as $param) {
                if (!$param->isOptional()) {
                    $allOptional = false;
                }
            }
            if (!$allOptional) {
                continue;
            }
            $output = json_encode($bigBuy->{$method}());

            $model = new Test();
            $model->command = $method;
            $model->result = $output;
            $model->url = $bigBuy->urlPrefix;
            $model->save();
        }

        return Redirect::refresh();
    }
}
