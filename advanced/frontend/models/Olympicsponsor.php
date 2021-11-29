<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "olympicsponsor".
 *
 * @property string $公司名称
 * @property string $赞助类别
 * @property string $企业简介
 * @property string $与国际奥委会交集
 */
class Olympicsponsor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'olympicsponsor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['公司名称', '赞助类别', '企业简介', '与国际奥委会交集'], 'required'],
            [['公司名称', '赞助类别'], 'string', 'max' => 50],
            [['企业简介'], 'string', 'max' => 250],
            [['与国际奥委会交集'], 'string', 'max' => 500],
            [['公司名称'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            '公司名称' => '公司名称',
            '赞助类别' => '赞助类别',
            '企业简介' => '企业简介',
            '与国际奥委会交集' => '与国际奥委会交集',
        ];
    }

    /**
     * {@inheritdoc}
     * @return OlympicsponsorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OlympicsponsorQuery(get_called_class());
    }
}
