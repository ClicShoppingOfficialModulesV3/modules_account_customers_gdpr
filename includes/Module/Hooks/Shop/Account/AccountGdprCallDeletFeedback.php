<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *
 *
 */

  namespace ClicShopping\OM\Module\Hooks\Shop\Account;

  use ClicShopping\OM\CLICSHOPPING;

  use ClicShopping\OM\Registry;
  use ClicShopping\OM\HTML;

  class AccountGdprCallDeletFeedback {

    public function execute() {
      $CLICSHOPPING_Db = Registry::get('Db');
      $CLICSHOPPING_Customer = Registry::get('Customer');

      if (isset($_POST['delete_my_feedback'])) {
        $QcheckFeedback = $CLICSHOPPING_Db->prepare('delete 
                                                      from :table_feedback_order_reviews
                                                      where customers_id = :customers_id
                                                    ');
        $QcheckFeedback->bindInt(':customers_id', $CLICSHOPPING_Customer->getId() );

        $QcheckFeedback->execute();
      }
    }
  }
