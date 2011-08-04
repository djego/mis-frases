<?php

/**
 * PluginsfGuardUser form.
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: PluginsfGuardUserForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
abstract class PluginsfGuardUserForm extends BasesfGuardUserForm {

  public function setup() {
    parent::setup();

    unset(
            $this['updated_at'], $this['created_at'], $this['last_login'], $this['algorithm'], $this['salt'], $this['groups_list'], $this['permissions_list']
    );
  }

}
