<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT

   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  namespace ClicShopping\OM\Module\Hooks\Shop\Account;

  use ClicShopping\OM\CLICSHOPPING;
  use ClicShopping\OM\HTML;

  class AccountGdprDeleteCustomerBirth
  {
    /**
     * @return string
     */
    public function display(): string
    {
      $output = '<div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="separator"></div>
                           ' . CLICSHOPPING::getDef('module_account_customers_gdpr_customer_bidth') . '
                          <label class="switch">
                            ' . HTML::checkboxField('delete_customers_birth', null, null, 'class="success"') . '
                            <span class="slider"></span>
                          </label>
                      </li>
                    </ul>
                  </div>
                 ';

        return $output;
    }
  }