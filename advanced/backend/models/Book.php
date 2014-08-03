<?php
namespace backend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property string $id
 * @property integer $udk1
 * @property integer $udk2
 * @property integer $udk3
 * @property string $avtor
 * @property string $io
 * @property string $avtor2
 * @property string $io2
 * @property string $nazva
 * @property integer $tip
 * @property string $izdat
 * @property string $god
 * @property integer $str
 */
class Book extends \yii\db\ActiveRecord{
    /**
     * @inheritdoc
     */
    public static function tableName(){
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules(){
        return [
            [['udk1', 'avtor', 'io', 'nazva', 'tip', 'izdat', 'god', 'str'], 'required'],
            [['udk1', 'udk2', 'udk3', 'tip', 'str'], 'integer'],
            [['god'], 'safe'],
            [['avtor', 'avtor2'], 'string', 'max' => 20],
            [['io', 'io2'], 'string', 'max' => 2],
            [['nazva'], 'string', 'max' => 100],
            [['izdat'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'udk1' => 'Udk1',
            'udk2' => 'Udk2',
            'udk3' => 'Udk3',
            'avtor' => 'Avtor',
            'io' => 'Io',
            'avtor2' => 'Avtor2',
            'io2' => 'Io2',
            'nazva' => 'Nazva',
            'tip' => 'Tip',
            'izdat' => 'Izdat',
            'god' => 'God',
            'str' => 'Str',
        ];
    }
}
