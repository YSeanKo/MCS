<?php

// protected/components/MyActiveRecord.php

class MyActiveRecord extends CActiveRecord
{

    private static $dbsmstaf = null;

    protected static function getSmstafDbConnection()
    {
        if (self::$dbsmstaf !== null)
            return self::$dbsmstaf;
        else {
            self::$dbsmstaf = Yii::app()->dbsmstaf;
            if (self::$dbsmstaf instanceof CDbConnection) {
                self::$dbsmstaf->setActive(true);
                return self::$dbsmstaf;
            } else
                throw new CDbException(Yii::t('yii', 'Active Record requires a "db" CDbConnection application component.'));
        }
    }
}
?>