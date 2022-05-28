<?php
/**
* 2007-2021 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2021 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class TvcmsVerticalMenuData
{
    public function initData()
    {
        $return = true;
        $languages = Language::getLanguages(true);
        $id_shop = Configuration::get('PS_SHOP_DEFAULT');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu`
                (`id_tvcmsverticalmenu`, `type_link`, `dropdown`, `type_icon`, `icon`, `align_sub`, 
                    `width_sub`, `class`, `active`) VALUES
        (1, 0, 0, 0, "", "wt-sub-auto", "col-sm-12", "", 1),
        (2, 0, 1, 0, "", "wt-sub-auto", "col-sm-4", "", 1),
        (3, 0, 0, 0, "", "wt-sub-auto", "col-sm-5", "", 1),
        (4, 0, 0, 0, "", "wt-sub-right", "col-sm-12", "menu-comectic", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_shop`
            (`id_tvcmsverticalmenu`, `id_shop`, `type_link`, `dropdown`, `type_icon`, `icon`, `align_sub`,
                `width_sub`, `class`, `active`) VALUES
        (1, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "col-sm-12", "", 1),
        (2, '.$id_shop.', 0, 1, 0, "", "wt-sub-auto", "col-sm-4", "", 1),
        (3, '.$id_shop.', 0, 0, 0, "", "wt-sub-auto", "col-sm-5", "", 1),
        (4, '.$id_shop.', 0, 0, 0, "", "wt-sub-right", "col-sm-12", "menu-comectic", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_row`
            (`id_row`, `id_tvcmsverticalmenu`, `class`, `active`) VALUES
        (1, 3, "", 1),
        (2, 4, "", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_row_shop`
            (`id_row`, `id_tvcmsverticalmenu`, `id_shop`,`class`, `active`) VALUES
        (1, 3, '.$id_shop.', "", 1),
        (2, 4, '.$id_shop.', "", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_column`
            (`id_column`, `id_row`, `width`, `class`, `active`) VALUES
        (1, 1, "col-sm-6", "", 1),
        (2, 1, "col-sm-6", "", 1),
        (3, 2, "col-sm-4", "", 1),
        (4, 2, "col-sm-4", "", 1),
        (7, 2, "col-sm-4", "", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_column_shop`
            (`id_column`, `id_row`, `id_shop`, `width`, `class`, `active`) VALUES
        (1, 1, '.$id_shop.', "col-sm-6", "", 1),
        (2, 1, '.$id_shop.', "col-sm-6", "", 1),
        (3, 2, '.$id_shop.', "col-sm-12", "", 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_item`
            (`id_item`, `id_column`, `type_link`, `type_item`, `id_product`, `active`) VALUES
        (1, 1, 1, "1", 0, 1),
        (3, 1, 1, "2", 0, 1),
        (6, 1, 1, "2", 0, 1),
        (9, 2, 1, "1", 0, 1),
        (10, 2, 1, "2", 0, 1),
        (17, 3, 1, "1", 0, 1),
        (18, 3, 1, "2", 0, 1),
        (19, 3, 1, "2", 0, 1);');
        
        $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_item_shop`
            (`id_item`, `id_column`, `id_shop`, `type_link`, `type_item`, `id_product`, `active`) VALUES
        (1, 1, '.$id_shop.', 1, "1", 0, 1),
        (3, 1, '.$id_shop.', 1, "2", 0, 1),
        (6, 1, '.$id_shop.', 1, "2", 0, 1),
        (9, 2, '.$id_shop.', 1, "1", 0, 1),
        (10, 2, '.$id_shop.', 1, "2", 0, 1),
        (17, 3, '.$id_shop.', 1, "1", 0, 1),
        (18, 3, '.$id_shop.', 1, "2", 0, 1),
        (19, 3, '.$id_shop.', 1, "2", 0, 1);');
        
        foreach ($languages as $language) {
            $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_lang`
                (`id_tvcmsverticalmenu`, `id_shop`, `id_lang`, `title`, `link`, `subtitle`,`style`) VALUES
            (1, '.$id_shop.', '.$language['id_lang'].', "PAGindex", "PAGindex", "","background:#c0cd01;color:#fff;"),
            (2, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", "","background:#c0cd01;color:#fff;"),
            (3, '.$id_shop.', '.$language['id_lang'].', "CAT4", "CAT4", "","background:#c0cd01;color:#fff;"),
            (4, '.$id_shop.', '.$language['id_lang'].', "CAT8", "CAT8", "hot","background:#c0cd01;color:#fff;")');
            
            $return &= Db::getInstance()->Execute('INSERT IGNORE INTO `'._DB_PREFIX_.'tvcmsverticalmenu_item_lang`
                (`id_item`, `id_shop`, `id_lang`, `title`, `link`, `text`) VALUES
            (1, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
            (3, '.$id_shop.', '.$language['id_lang'].', "CAT9", "CAT9", ""),
            (6, '.$id_shop.', '.$language['id_lang'].', "CAT7", "CAT7", ""),
            (9, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
            (10, '.$id_shop.', '.$language['id_lang'].', "CAT9", "CAT9", ""),
            (17, '.$id_shop.', '.$language['id_lang'].', "CAT3", "CAT3", ""),
            (18, '.$id_shop.', '.$language['id_lang'].', "CAT5", "CAT5", ""),
            (19, '.$id_shop.', '.$language['id_lang'].', "CAT10", "CAT10", "");');
        }
        return $return;
    }
}
