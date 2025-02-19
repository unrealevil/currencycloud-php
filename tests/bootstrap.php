<?php

use CurrencyCloud\Tests\FormDataExtractor;

$parametersMatcher = static function($first, $second) {
    //process and check data sent as form-data via POST
    if (strpos($first, "form-data")) {
        $first = FormDataExtractor::extract($first);
        $second = FormDataExtractor::extract($second);

        foreach ($first as $key => $value) {
            if (!empty($key) && !empty($key)) {
                if ($first[$key] !== $second[$key]) {
                    return false;
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    } else { // process other data (queryParams, etc)
        if (!is_array($first)) {
            parse_str($first, $firstParams);
        } else {
            $firstParams = $first;
        }
        if (!is_array($second)) {
            parse_str($second, $secondParams);
        } else {
            $secondParams = $second;
        }

        $keys = array_unique(array_merge(array_keys($firstParams), array_keys($secondParams)));

        foreach ($keys as $key) {
            if (isset($firstParams[$key]) && isset($secondParams[$key])) {
                if ($firstParams[$key] !== $secondParams[$key]) {
                    return false;
                }
                unset($firstParams[$key], $secondParams[$key]);
                
            } else {
                return false;
            }
        }
        if (count($firstParams) > 0 || count($secondParams) > 0) {
            return false;
        }
    }

    return true;
};

$filterHeadersInWhitelist = static function(array $headers) {
    $result = array_filter($headers, static function($key) {
        $whitelist = ["Date", "X-Request-Id", "X-Auth-Token"];
        if (in_array($key, $whitelist)) {
            return $key;
        }
    }, ARRAY_FILTER_USE_KEY);

    return $result;
};
