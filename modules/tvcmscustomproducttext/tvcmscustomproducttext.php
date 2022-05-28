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

include_once('classes/tvcmscustomproducttext_status.class.php');

class TvcmsCustomProductText extends Module
{
    public function __construct()
    {
        $this->name = 'tvcmscustomproducttext';
        $this->tab = 'front_office_features';
        $this->version = '3.0.0';
        $this->author = 'HRX Template';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('HRXTemplate - Product Custom Text Charts/Tables');
        $this->description = $this->l('Display Charts and tables on Product page.');

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
            && $this->registerHook('displayCustomtab')
            && $this->registerHook('displayheader');
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
            $tab->name[$lang['id_lang']] = "Product Custom info [Size/Chart/Table]";
        }
        $tab->id_parent = $parentTab_2->id;
        $tab->module = $this->name;
        $response &= $tab->add();

        return $response;
    }

    public function createVariable()
    {
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_1', '');
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_1_NAME', '');
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1', '0');
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_2', '');
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_2_NAME', '');
        Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2', '0');
    }

    public function uninstall()
    {
        $this->uninstallTab();
        $this->deleteVariable();
        return parent::uninstall();
    }

    public function deleteVariable()
    {
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_1');
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_1_NAME');
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_2_NAME');
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1');
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_2');
        Configuration::deleteByName('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2');
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
        if (Tools::isSubmit('submittvcmsCustomCssJsMainTitleForm')) {
            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_1');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_1', $tmp, true);

            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_1_NAME');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_1_NAME', $tmp);
            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_2_NAME');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_2_NAME', $tmp);
            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1', $tmp);
            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_2');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_2', $tmp, true);
            $tmp = Tools::getValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2');
            Configuration::updateValue('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2', $tmp);

            $this->clearCustomSmartyCache('tvcmscustomproducttext_display_home.tpl');
            $message .= $this->displayConfirmation($this->l("Product Custom Text is Updated."));
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

        $tvcms_obj = new TvcmsCustomProductTextStatus();
        $show_fields = $tvcms_obj->fieldStatusInformation();
        if ($show_fields['main_status']) {
            $form[] = $this->tvcmsCustomCssJsMainTitleForm();
        }

        return $helper->generateForm($form);
    }

    protected function tvcmsCustomCssJsMainTitleForm()
    {
        $tvcms_obj = new TvcmsCustomProductTextStatus();
        $show_fields = $tvcms_obj->fieldStatusInformation();
        $input = array();

        if ($show_fields['product_tab_name']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TVCMSCUSTOMPRODUCT_TEXT_1_NAME',
                    'label' => $this->l('Custom product tab name 1'),
                    'cols' => 40,
                    'rows' => 20,
                );
        }
        if ($show_fields['product_tab']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'textarea',
                    'name' => 'TVCMSCUSTOMPRODUCT_TEXT_1',
                    'label' => $this->l('Custom product tab 1 content'),
                    'cols' => 40,
                    'rows' => 20,
                    'class' => 'rte',
                    'autoload_rte' => true,
                );
        }

      


        if ($show_fields['product_tab_status']) {
            $input[] =  array(
                        'type' => 'switch',
                        'label' => $this->l('Custom product tab  status 1 '),
                        'name' => 'TVCMSCUSTOMPRODUCT_TEXT_STATUS_1',
                        'desc' => $this->l('Hide or show Icons.'),
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
        if ($show_fields['product_tab_name_2']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'text',
                    'name' => 'TVCMSCUSTOMPRODUCT_TEXT_2_NAME',
                    'label' => $this->l('Custom product tab name 2'),
                    'cols' => 40,
                    'rows' => 20,
                );
        }

        if ($show_fields['product_tab_2']) {
            $input[] = array(
                    'col' => 7,
                    'type' => 'textarea',
                    'name' => 'TVCMSCUSTOMPRODUCT_TEXT_2',
                    'label' => $this->l('Custom product tab content 2'),
                    'rows' => 20,
                    'class' => 'rte',
                    'autoload_rte' => true,
                    
                );
        }

        if ($show_fields['product_tab_2_status']) {
            $input[] =  array(
                        'type' => 'switch',
                        'label' => $this->l('Custom product tab  status 2'),
                        'name' => 'TVCMSCUSTOMPRODUCT_TEXT_STATUS_2',
                        'desc' => $this->l('Hide or show icons.'),
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
                'title' => $this->l('Product Custom Text Charts/Tables'),
                'icon' => 'icon-support',
                ),
                'input' => $input,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submittvcmsCustomCssJsMainTitleForm',
                ),
            ),
        );
    }

    protected function getConfigFormValues()
    {
        $fields = array();
        //$languages = Language::getLanguages();
        $fields['TVCMSCUSTOMPRODUCT_TEXT_1'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_1', true);
        $fields['TVCMSCUSTOMPRODUCT_TEXT_1_NAME'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_1_NAME');
        $fields['TVCMSCUSTOMPRODUCT_TEXT_STATUS_1'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1');
        $fields['TVCMSCUSTOMPRODUCT_TEXT_2'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_2', true);
        $fields['TVCMSCUSTOMPRODUCT_TEXT_2_NAME'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_2_NAME');
        $fields['TVCMSCUSTOMPRODUCT_TEXT_STATUS_2'] = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2');

        $path = _MODULE_DIR_.$this->name."/views/img/";
        $this->context->smarty->assign("path", $path);
        
        return $fields;
    }

    public function hookdisplayCustomtab()
    {

        if (!Cache::isStored('tvcmscustomproducttext_display_home.tpl')) {
            $TVCMSCUSTOMPRODUCT_TEXT_1 = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_1', true);
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_1", $TVCMSCUSTOMPRODUCT_TEXT_1);
            $TVCMSCUSTOMPRODUCT_TEXT_1_NAME = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_1_NAME');
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_1_NAME", $TVCMSCUSTOMPRODUCT_TEXT_1_NAME);
            $TVCMSCUSTOMPRODUCT_TEXT_STATUS_1 = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_STATUS_1');
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_STATUS_1", $TVCMSCUSTOMPRODUCT_TEXT_STATUS_1);
            $TVCMSCUSTOMPRODUCT_TEXT_2 = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_2', true);
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_2", $TVCMSCUSTOMPRODUCT_TEXT_2);
            $TVCMSCUSTOMPRODUCT_TEXT_2_NAME = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_2_NAME');
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_2_NAME", $TVCMSCUSTOMPRODUCT_TEXT_2_NAME);
            $TVCMSCUSTOMPRODUCT_TEXT_STATUS_2 = Configuration::get('TVCMSCUSTOMPRODUCT_TEXT_STATUS_2');
            $this->context->smarty->assign("TVCMSCUSTOMPRODUCT_TEXT_STATUS_2", $TVCMSCUSTOMPRODUCT_TEXT_STATUS_2);
            $output = $this->display(__FILE__, 'views/templates/front/display_home.tpl');
            Cache::store('tvcmscustomproducttext_display_home.tpl', $output);
        }

        return Cache::retrieve('tvcmscustomproducttext_display_home.tpl');
    }
}
