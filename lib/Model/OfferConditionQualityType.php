<?php
/**
 * OfferConditionQualityType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * OfferConditionQualityType Class Doc Comment
 *
 * @category Class
 * @description Внешний вид товара:  * &#x60;PERFECT&#x60; — идеальный. * &#x60;EXCELLENT&#x60; — отличный. * &#x60;GOOD&#x60; — хороший.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferConditionQualityType
{
    /**
     * Possible values of this enum
     */
    public const PERFECT = 'PERFECT';

    public const EXCELLENT = 'EXCELLENT';

    public const GOOD = 'GOOD';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PERFECT,
            self::EXCELLENT,
            self::GOOD
        ];
    }
}


