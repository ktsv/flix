<?php

namespace app\basemodels;

use Yii;

/**
 * This is the model class for table "link".
 *
 * @property string $short
 * @property string $long
 * @property integer $clicked
 */
class Link extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['short', 'long'], 'required'],
            [['clicked'], 'integer'],
            [['short'], 'string', 'max' => 8],
            [['long'], 'string', 'max' => 2048],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'short' => 'Short',
            'long' => 'Long',
            'clicked' => 'Clicked',
        ];
    }
}
