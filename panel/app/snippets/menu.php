<a id="menu-toggle" class="nav-icon nav-icon-left" data-dropdown="true" href="#menu">
  <?php i('bars fa-lg') ?>
</a>

<nav id="menu" class="dropdown dropdown-left">
  <ul class="nav nav-list dropdown-list">
    <li>
      <a href="<?php _u() ?>">
        <?php i('file-o', 'left') . _l('dashboard') ?>
      </a>
    </li>
    <li>
      <a href="<?php _u('options') ?>">
        <?php i('gear', 'left') . _l('metatags') ?>
      </a>
    </li>
    <li>
      <a href="<?php _u('users') ?>">
        <?php i('user', 'left') . _l('users') ?>
      </a>
    </li>
    <li>
      <a href="<?php echo panel()->urls()->logout() ?>" target="_self">
        <?php i('power-off', 'left') . _l('logout') ?>
      </a>
    </li>
    <li>
      <a href="<?php _u() ?>help.html" target="_self">
        <i class="icon icon-left fa" style="font-weight: bold;">!?</i><span>Help</span>
      </a>
    </li>
  </ul>
</nav>