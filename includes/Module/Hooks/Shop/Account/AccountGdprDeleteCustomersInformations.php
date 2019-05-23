<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT
   * @licence MIT - Portion of osCommerce 2.4
   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\OM\Module\Hooks\Shop\Account;

  use ClicShopping\OM\CLICSHOPPING;

  use ClicShopping\OM\Registry;
  use ClicShopping\OM\HTML;

  class AccountGdprDeleteCustomersInformations
  {

    public function display()
    {
      $output = '';
      $output .= '<div>';
      $output .= '<label class="checkbox-inline">';
      $output .= HTML::checkboxField('delete_customers_info');
      $output .= '</label>';
      $output .= CLICSHOPPING::getDef('module_account_customers_gdpr_delete_customers_info');
      $output .= '</div>';

      return $output;
    }
  }
