<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\CurlHelper;
use app\models\Valutes;
use yii\console\Controller;
use yii\console\ExitCode;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class CurrensiesController extends Controller
{
    const URL_CURRENSIES = 'http://www.cbr.ru/scripts/XML_daily.asp';

    /**
     * @return bool
     */
    public function actionIndex()
    {
        $res = false;
        $response = CurlHelper::getCurlSimpleData(self::URL_CURRENSIES);
        if ($response) {
            $xml = simplexml_load_string($response);
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);
            $currensies = $array['Valute'];
            foreach ($currensies as $item) {
                $oldValue = Valutes::find()->where(['num_code' => $item['NumCode']])->one();
                if ($oldValue) {
                    $oldCurrency = $oldValue->new_value;
                    $oldValue->name = $item['Name'];
                    $oldValue->num_code = $item['NumCode'];
                    $oldValue->char_code = $item['CharCode'];
                    $oldValue->old_value = $oldCurrency;
                    $oldValue->new_value = $item['Value'];
                    $oldValue->updated_date = date("Y-m-d H:i:s");
                    $res = $oldValue->save(false);
                } else {
                    $model = new Valutes();
                    $model->name = $item['Name'];
                    $model->num_code = $item['NumCode'];
                    $model->char_code = $item['CharCode'];
                    $model->old_value = $item['Value'];
                    $model->new_value = $item['Value'];
                    $model->created_date = date("Y-m-d H:i:s");
                    $res = $model->save(false);
                }
            }
        }

        return $res;
    }
}
