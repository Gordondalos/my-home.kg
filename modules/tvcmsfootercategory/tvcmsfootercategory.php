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

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once('classes/tvcmsfootercategory_status.class.php');

class TvcmsFooterCategory extends Module
{
    public function __construct()
    {
        $this->name = 'tvcmsfootercategory';
        $this->tab = 'front_office_features';
        $this->version = '3.0.0';
        $this->author = 'HRX Template';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('HRXTemplate - Footer Category');
        $this->description = $this->l('Its Show Footer Cateogry in Front Side');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
        $this->module_key = '';

        $this->confirmUninstall = $this->l('Warning: all the data saved in your database will be deleted.'.
            ' Are you sure you want uninstall this module?');
    }


    public function install()
    {
        $this->installTab();
        $this->createVariable();
        return parent::install()
            // && $this->registerHook('displayBackOfficeHeader')
             // && $this->registerHook('displayFooterBefore')
            && $this->registerHook('displayFooterPart1');
            // && $this->registerHook('displayFooterPart2');
    }

    public function installTab()
    {
        $response = true;

        // First check for parent tab
        $parentTabID = Tab::getIdFromClassName('AdminHRXTemplate');

        if ($parentTabID) {
            $parentTab = new Tab($parentTabID);
        } else {
            $parentTab = new Tab();
            $parentTab->active = 1;
            $parentTab->name = array();
            $parentTab->class_name = "AdminHRXTemplate";
            foreach (Language::getLanguages() as $lang) {
                $parentTab->name[$lang['id_lang']] = "HRXTemplate Extension";
            }
            $parentTab->id_parent = 0;
            $parentTab->module = $this->name;
            $response &= $parentTab->add();
        }
        
        // Check for parent tab2
        $parentTab_2ID = Tab::getIdFromClassName('AdminHRXTemplateModules');
        if ($parentTab_2ID) {
            $parentTab_2 = new Tab($parentTab_2ID);
        } else {
            $parentTab_2 = new Tab();
            $parentTab_2->active = 1;
            $parentTab_2->name = array();
            $parentTab_2->class_name = "AdminHRXTemplateModules";
            foreach (Language::getLanguages() as $lang) {
                $parentTab_2->name[$lang['id_lang']] = "HRXTemplate Configure";
            }
            $parentTab_2->id_parent = $parentTab->id;
            $parentTab_2->module = $this->name;
            $response &= $parentTab_2->add();
        }
        // Created tab
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = 'Admin'.$this->name;
        $tab->name = array();
        foreach (Language::getLanguages() as $lang) {
            $tab->name[$lang['id_lang']] = "Footer Cateogry";
        }
        $tab->id_parent = $parentTab_2->id;
        $tab->module = $this->name;
        $response &= $tab->add();

        return $response;
    }

    public function createVariable()
    {
        $all_categories = Category::getAllCategoriesName();
        unset($all_categories[0]);
        unset($all_categories[1]);

        $number_of_category_default = 4;
        $i = 1;
        $category_list = array();
        foreach ($all_categories as $category) {
            if ($i<= $number_of_category_default) {
                $category_list[] = $category['id_category'];
            }
            $i++;
        }

        $category_list = implode(',', $category_list);
        Configuration::updateValue('TVCMSFOOTERCATEGORY_CATEGOEY_LIST', $category_list);

        $languages = Language::getLanguages();
        $result = array();
        foreach ($languages as $lang) {
            $result['TVCMSFOOTERCATEGORY_TITLE'][$lang['id_lang']] = 'Category';
        }

        Configuration::updateValue('TVCMSFOOTERCATEGORY_TITLE', $result['TVCMSFOOTERCATEGORY_TITLE']);
        if (empty($category_list)) {
            Configuration::updateValue('TVCMSFOOTERCATEGORY_STATUS', 0);
        } else {
            Configuration::updateValue('TVCMSFOOTERCATEGORY_STATUS', 1);
        }
    }

    public function uninstall()
    {
        $this->uninstallTab();
        $this->deleteVariable();
        return parent::uninstall();
    }

    public function deleteVariable()
    {
        Configuration::deleteByName('TVCMSFOOTERCATEGORY_TITLE');
        Configuration::deleteByName('TVCMSFOOTERCATEGORY_STATUS');
    }

    public function uninstallTab()
    {
        $id_tab = Tab::getIdFromClassName('Admin'.$this->name);
        $tab = new Tab($id_tab);
        $tab->delete();
        return true;
    }

    public function getContent()
    {
        $message = $this->postProcess();
        $output = $message
                .$this->renderForm();
        return $output;
    }

    public function postProcess()
    {
        $message = '';
        $result = array();

        if (Tools::isSubmit('submittvcmsFooterCategoryMainTitleForm') && Tools::getValue('TVCMSFOOTERCATEGORY_CATEGOEY_LIST')) {
            $languages = Language::getLanguages();
            foreach ($languages as $lang) {
                $tmp = Tools::getValue('TVCMSFOOTERCATEGORY_TITLE_'.$lang['id_lang']);
                $result['TVCMSFOOTERCATEGORY_TITLE'][$lang['id_lang']] = $tmp;
            }
            Configuration::updateValue('TVCMSFOOTERCATEGORY_TITLE', $result['TVCMSFOOTERCATEGORY_TITLE']);


            $tmp = Tools::getValue('TVCMSFOOTERCATEGORY_CATEGOEY_LIST');
            $tmp = implode(',', $tmp);
            Configuration::updateValue('TVCMSFOOTERCATEGORY_CATEGOEY_LIST', $tmp);
            
            $tmp = Tools::getValue('TVCMSFOOTERCATEGORY_STATUS');
            Configuration::updateValue('TVCMSFOOTERCATEGORY_STATUS', $tmp);

            $this->clearCustomSmartyCache('tvcmsfootercategory_display_home.tpl');
            $message .= $this->displayConfirmation($this->l("Footer Cateogry is Updated."));
        } else {
            $message .= $this->displayError($this->l("Please select at least one category."));
        }
        return $message;
    }

    public function clearCustomSmartyCache($cache_id)
    {
        if (Cache::isStored($cache_id)) {
            Cache::clean($cache_id);
        }
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        $form = array();

        $tvcms_obj = new TvcmsFooterCategoryStatus();
        $show_fields = $tvcms_obj->fieldStatusInformation();
        if ($show_fields['form']) {
            $form[] = $this->tvcmsFooterCategoryMainTitleForm();
        }

        return $helper->generateForm($form);
    }

    protected function tvcmsFooterCategoryMainTitleForm()
    {
        $tvcms_obj = new TvcmsFooterCategoryStatus();
        $show_fields = $tvcms_obj->fieldStatusInformation();
        $input = array();

        $all_category = Category::getAllCategoriesName();
        $value = array();

        foreach ($all_category as $category) {
            $value['id'] = $category['id_category'];
            $value['use_checkbox'] = true;

            $tmp = Configuration::get('TVCMSFOOTERCATEGORY_CATEGOEY_LIST');
            $selected_categories = explode(',', $tmp);
            $value['selected_categories'] = $selected_categories;
        }

        if ($show_fields['title']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TVCMSFOOTERCATEGORY_TITLE',
                    'label' => $this->l('Title'),
                    'lang' => true,
                );
        }

        if ($show_fields['category_list']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'categories',
                    'name' => 'TVCMSFOOTERCATEGORY_CATEGOEY_LIST',
                    'label' => $this->l('Category list'),
                    'tree' => $value,
                );
        }

        if ($show_fields['status']) {
            $input[] =  array(
                        'type' => 'switch',
                        'label' => $this->l('Status'),
                        'name' => 'TVCMSFOOTERCATEGORY_STATUS',
                        'desc' => $this->l('Hide or show category.'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Show')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('Hide')
                            )
                        )
                    );
        }

        return array(
            'form' => array(
                'legend' => array(
                'title' => $this->l('Footer Category'),
                'icon' => 'icon-support',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submittvcmsFooterCategoryMainTitleForm',
                ),
            ),
        );
    }

    protected function getConfigFormValues()
    {
        $fields = array();
        $languages = Language::getLanguages();
        
        foreach ($languages as $lang) {
            $tmp = Configuration::get('TVCMSFOOTERCATEGORY_TITLE', $lang['id_lang']);
            $fields['TVCMSFOOTERCATEGORY_TITLE'][$lang['id_lang']] = $tmp;
        }
        
        $fields['TVCMSFOOTERCATEGORY_STATUS'] = Configuration::get('TVCMSFOOTERCATEGORY_STATUS');
        return $fields;
    }


    public function hookDisplayTopColumn()
    {
        return $this->hookdisplayFooter();
    }

    public function hookDisplayFooterBefore()
    {
        return $this->hookdisplayFooter();
    }

    public function hookdisplayFooterPart2()
    {
        return $this->hookdisplayFooter();
        // return '<h1>Welcome here</h1>';
    }

    public function getFooterCategoryResult()
    {
        $all_category = Configuration::get('TVCMSFOOTERCATEGORY_CATEGOEY_LIST');
        $result = array();
        if (!empty($all_category) && Configuration::get('TVCMSFOOTERCATEGORY_STATUS')) {
            $all_category = explode(',', $all_category);
            $i = 0;
            foreach ($all_category as $category_id) {
                $category = new Category($category_id);
                $result[$i]['id'] = $category_id;
                $result[$i]['name'] = $category->name;
                $result[$i]['link'] = $this->context->link->getCategoryLink($category_id);
                $i++;
            }
        }
        $this->context->smarty->assign('category_list', $result);
    }

    public function hookdisplayFooterPart1()
    {
        return $this->hookdisplayFooter();
    }

    public function hookdisplayFooter()
    {
        $this->getFooterCategoryResult();

        if (!Cache::isStored('tvcmsfootercategory_display_home.tpl')) {
            $tvcms_obj = new TvcmsFooterCategoryStatus();
            $show_fields = $tvcms_obj->fieldStatusInformation();

            $cookie = Context::getContext()->cookie;
            $id_lang = $cookie->id_lang;

            $this->context->smarty->assign('id_lang', $id_lang);
            $this->context->smarty->assign('show_fields', $show_fields);
            $output = $this->display(__FILE__, 'views/templates/front/display_home.tpl');
            Cache::store('tvcmsfootercategory_display_home.tpl', $output);
        }

        return Cache::retrieve('tvcmsfootercategory_display_home.tpl');
    }
}
