<?php
/**
 * This file is part of Randomizer plugin for FacturaScripts
 * Copyright (C) 2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Plugins\Randomizer\Lib\Random;

use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\FormaPago;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Dinamic\Model\Pais;
use FacturaScripts\Dinamic\Model\Retencion;
use FacturaScripts\Dinamic\Model\Serie;
use FacturaScripts\Dinamic\Model\Tarifa;
use FacturaScripts\Dinamic\Model\User;
use Faker\Generator;

/**
 * Description of NewItems
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
abstract class NewItems
{

    use ComercialContactTrait,
        ProductosTrait;

    /**
     * @var Empresa[]
     */
    private static $companies;

    /**
     * @var Pais[]
     */
    private static $countries;

    /**
     * @var DataBase
     */
    private static $database;

    /**
     * @var FormaPago[]
     */
    private static $payments;

    /**
     * @var Tarifa[]
     */
    private static $rates;

    /**
     * @var Retencion[]
     */
    private static $retentions;

    /**
     * @var Serie[]
     */
    private static $series;

    /**
     * @var Impuesto[]
     */
    private static $taxes;

    /**
     * @var User[]
     */
    private static $users;

    /**
     * @param int $number
     *
     * @return int
     */
    abstract public static function create(int $number = 50): int;

    /**
     * @return string
     */
    protected static function cifnif(): string
    {
        $number = mb_substr(str_shuffle('0123456789'), 0, mt_rand(8, 9));
        $letter = mb_substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 1);
        $letter2 = mb_substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 1);

        $separators = ['', ' ', '-', '.', ','];
        shuffle($separators);

        switch (mt_rand(0, 5)) {
            case 0:
                return '';

            case 1:
                return $number;

            case 2:
                return $letter . $separators[0] . $number;

            case 3:
                return $letter . $separators[0] . $number . $separators[0] . $letter2;

            default:
                return $number . $separators[0] . $letter;
        }
    }

    /**
     * @param int $maxlen
     * @param string $use
     *
     * @return string
     */
    protected static function code(int $maxlen, string $use = '-_.'): string
    {
        $size = mt_rand(1, $maxlen);
        $code = mb_substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz0123456789' . $use), 0, $size);
        switch (mt_rand(0, 5)) {
            case 0:
                return mb_substr(str_shuffle('0123456789012345678901234567890123456789' . $use), 0, $size);

            case 1:
                return strtoupper($code);

            default:
                return $code;
        }

        return mt_rand(0, 1) ? $code : strtoupper($code);
    }

    /**
     * @param int $maxlen
     * @param string $use
     *
     * @return string
     */
    protected static function codeOrNull(int $maxlen, string $use = '-_.')
    {
        switch (mt_rand(0, 5)) {
            case 0:
            case 1:
                return static::code($maxlen, $use);

            default:
                return null;
        }
    }

    /**
     * @return string
     */
    protected static function codimpuesto()
    {
        if (null === self::$taxes) {
            $tax = new Impuesto();
            self::$taxes = $tax->all();
        }

        shuffle(self::$taxes);
        return mt_rand(0, 2) === 0 ? self::$taxes[0]->codimpuesto : AppSettings::get('default', 'codimpuesto');
    }

    /**
     * @return string
     */
    protected static function codpais()
    {
        if (null === self::$countries) {
            $country = new Pais();
            self::$countries = $country->all();
        }

        shuffle(self::$countries);
        return mt_rand(0, 3) === 0 ? self::$countries[0]->codpais : AppSettings::get('default', 'codpais');
    }

    /**
     * @return string
     */
    protected static function codpago()
    {
        if (null === self::$payments) {
            $payment = new FormaPago();
            self::$payments = $payment->all();
        }

        shuffle(self::$payments);
        return mt_rand(0, 1) === 0 ? self::$payments[0]->codpago : AppSettings::get('default', 'codpago');
    }

    /**
     * @return string
     */
    protected static function codretencion()
    {
        if (null === self::$retentions) {
            $retention = new Retencion();
            self::$retentions = $retention->all();
        }

        shuffle(self::$retentions);
        return mt_rand(0, 2) === 0 ? self::$retentions[0]->codretencion : AppSettings::get('default', 'codretencion');
    }

    /**
     * @return string
     */
    protected static function codserie()
    {
        if (null === self::$series) {
            $serie = new Serie();
            $where = [
                new DataBaseWhere('codserie', AppSettings::get('default', 'codserierec'), '<>'),
            ];
            self::$series = $serie->all($where);
        }

        shuffle(self::$series);
        return mt_rand(0, 1) === 0 ? self::$series[0]->codserie : AppSettings::get('default', 'codserie');
    }

    /**
     * @return string
     */
    protected static function codtarifa()
    {
        if (null === self::$rates) {
            $tarifa = new Tarifa();
            self::$rates = $tarifa->all();
        }

        shuffle(self::$rates);
        return empty(self::$rates) || mt_rand(0, 1) === 0 ? null : self::$rates[0]->codtarifa;
    }

    /**
     * @return DataBase
     */
    protected static function dataBase()
    {
        if (null === self::$database) {
            self::$database = new DataBase();
        }

        return self::$database;
    }

    /**
     * @return string
     */
    protected static function fecha(): string
    {
        $days = mt_rand(0, 1999);
        return date(Serie::DATE_STYLE, strtotime('-' . $days . ' days'));
    }

    /**
     * @return string
     */
    protected static function fechaHora(): string
    {
        $days = mt_rand(0, 1999);
        return date(Serie::DATETIME_STYLE, strtotime('-' . $days . ' days'));
    }

    /**
     * @return string
     */
    protected static function hora(): string
    {
        $minutes = mt_rand(0, 1429);
        return date(Serie::HOUR_STYLE, strtotime('-' . $minutes . ' minutes'));
    }

    /**
     * @return int
     */
    protected static function idempresa()
    {
        if (null === self::$companies) {
            $company = new Empresa();
            self::$companies = $company->all();
        }

        shuffle(self::$companies);
        return mt_rand(0, 2) === 0 ? self::$companies[0]->idempresa : AppSettings::get('default', 'idempresa');
    }

    /**
     * @param bool $null
     *
     * @return string
     */
    protected static function nick(bool $null = false)
    {
        if (null === self::$users) {
            $user = new User();
            self::$users = $user->all();
        }

        shuffle(self::$users);
        return false === $null || mt_rand(0, 3) > 0 ?
            self::$users[0]->nick :
            null;
    }

    /**
     * @param Generator $faker
     *
     * @return string
     */
    protected static function web(&$faker)
    {
        $web = $faker->optional()->url;
        return strlen($web) > 100 ? substr($web, 0, 100) : $web;
    }
}
