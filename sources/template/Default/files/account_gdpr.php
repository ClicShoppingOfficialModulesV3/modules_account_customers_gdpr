<?php
/*
 * account_customers_delete_account.php
 * @copyright 2008 - https://www.clicshopping.org
 * @Brand : ClicShopping(Tm) at Inpi all right Reserved
 * @license GPL 2 & MIT

*/

  require($CLICSHOPPING_Template->getTemplateFiles('breadcrumb'));

  if ( $CLICSHOPPING_MessageStack->exists('account_customers_gdpr') ) {
    echo $CLICSHOPPING_MessageStack->get('account_customers_gdpr');
  }
?>
<section class="account_gdpr" id="account_gdpr">
  <div class="contentContainer">
    <div class="contentText">
    <?php echo $CLICSHOPPING_Template->getBlocks('modules_account_customers'); ?>
    </div>
  </div>
</section>
