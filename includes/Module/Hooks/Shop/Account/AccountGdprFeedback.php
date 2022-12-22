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

  use ClicShopping\OM\Registry;
  use ClicShopping\OM\HTML;

  class AccountGdprFeedback
  {

    protected $countMyFeedback;
    protected $deleteMyFeedback;

    /**
     * @return mixed
     */
    public function getCheck()
    {
      $CLICSHOPPING_Db = Registry::get('Db');
      $CLICSHOPPING_Customer = Registry::get('Customer');

      $Qcheck = $CLICSHOPPING_Db->query('show tables like ":table_feedback_order_reviews"');

      if ($Qcheck->fetch() === true) {
        $QcountFeedBack = $CLICSHOPPING_Db->prepare('select count(feedback_order_reviews_id) as count
                                                      from :table_feedback_order_reviews
                                                      where customers_id = :customers_id
                                                     ');
        $QcountFeedBack->bindInt(':customers_id', $CLICSHOPPING_Customer->getID());
        $QcountFeedBack->execute();

        $this->count = $QcountFeedBack->valueInt('count');
      }

      return $Qcheck;
    }

    /**
     * @return string
     */
    public function display(): string
    {
      $output = '';

      if ($this->getCheck() === true) {
        $output .= '<div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <div class="separator"></div>
                           ' . CLICSHOPPING::getDef('module_account_customers_gdpr_delete_my_orders_feedback') . ' (' . CLICSHOPPING::getDef('module_account_customers_gdpr_count_orders_feedback') . ' : ' . $this->count . ')' . '
                          <label class="switch">
                            ' . HTML::checkboxField('delete_my_feedback', null, null, 'class="success"') . '
                            <span class="slider"></span>
                          </label>
                      </li>
                    </ul>
                  </div>
                 ';
      }

      return $output;
    }
  }
