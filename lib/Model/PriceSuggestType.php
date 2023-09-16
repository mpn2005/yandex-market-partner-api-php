<?php
/**
 * PriceSuggestType
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
 * PriceSuggestType Class Doc Comment
 *
 * @category Class
 * @description Тип цены:      * &#x60;BUYBOX&#x60; — самая низкая цена на товар, по которой он продается сейчас.      Эта цена обновляется в режиме реального времени. Если вы установите цену ниже, начнет показываться ваше предложение.      Если для этого значения в параметре &#x60;price&#x60; указана цена, которая совпадает с вашей, значит, ваш товар уже показывается на витрине. Если кроме вас этот товар продают другие продавцы по такой же цене, их предложения также будут отображаться вместе с вашими по очереди.      * &#x60;DEFAULT_OFFER&#x60; — рекомендованная Маркетом цена, которая привлекает покупателей. Рассчитывается только для популярных на сервисе товаров и обновляется раз в четыре часа.      * &#x60;MIN_PRICE_MARKET&#x60; — минимальная цена на Маркете. Самая низкая цена среди всех предложений товара на Маркете во всех регионах, включая те, которые не видны на витрине.      Эта цена обновляется в режиме реального времени и обеспечивает большее количество показов на Маркете, чем самая низкая или рекомендованная цена.      * &#x60;MAX_DISCOUNT_BASE&#x60; — максимальная цена товара без скидки (старая цена), при которой он может быть показан со скидкой. Данная цена рассчитывается автоматически на основе SKU на Яндексе.      {% note info %}      Если цена типа &#x60;MAX_DISCOUNT_BASE&#x60; не возвращается, скидка на товар не будет показана, так как для него еще не накопилась история цен.      {% endnote %}      * &#x60;MARKET_OUTLIER_PRICE&#x60; — максимальная цена товара, которая обеспечивает показы на Маркете. Если ваша цена выше указанной, товар будет скрыт, так как цена превышает рекомендованную Маркетом на 40% или больше.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PriceSuggestType
{
    /**
     * Possible values of this enum
     */
    public const BUYBOX = 'BUYBOX';

    public const DEFAULT_OFFER = 'DEFAULT_OFFER';

    public const MIN_PRICE_MARKET = 'MIN_PRICE_MARKET';

    public const MAX_DISCOUNT_BASE = 'MAX_DISCOUNT_BASE';

    public const MARKET_OUTLIER_PRICE = 'MARKET_OUTLIER_PRICE';

    public const MAX_DISCOUNT_PRICE = 'MAX_DISCOUNT_PRICE';

    public const PROMO = 'PROMO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUYBOX,
            self::DEFAULT_OFFER,
            self::MIN_PRICE_MARKET,
            self::MAX_DISCOUNT_BASE,
            self::MARKET_OUTLIER_PRICE,
            self::MAX_DISCOUNT_PRICE,
            self::PROMO
        ];
    }
}


