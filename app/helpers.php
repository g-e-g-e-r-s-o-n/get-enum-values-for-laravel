<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class General {
    public static function getEnumValues($table, $column) {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type ;
        preg_match('/^enum((.*))$/', $type, $matches);
        $enum = array();
        foreach( explode(',', substr($matches[1], 1, -1)) as $value )
        {
            $v = trim($value, "'" );
            $enum = Arr::add($enum, $v, $v);
        }
        return $enum;
    }
}
