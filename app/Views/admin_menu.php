<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="<?= base_url() ?>admin/index" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="<?= base_url() ?>events/assets/images/logo.png" alt="ITVlounteer Logo" width="55">
      </span>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">ITVolunteer</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
      <a href="<?= base_url() ?>admin/index" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>

    <!-- Manage Users -->
    <?php if (in_groups('admin')) : ?>
      <li class="menu-item">
        <a href="<?= base_url() ?>admin/users" class="menu-link">
          <i class="menu-icon tf-icons bx bx-group"></i>
          <div data-i18n="Manage Users">Manage Users</div>
        </a>
      </li>
    <?php endif ?>

    <!-- Manage Events -->
    <li class="menu-item">
      <a href="<?= base_url() ?>admin/events" class="menu-link">
        <i class="menu-icon tf-icons bx bx-calendar-event"></i>
        <div data-i18n="Manage Events">Manage Events</div>
      </a>
    </li>

    <!-- Manage Reviews -->
    <?php if (in_groups('admin')) : ?>
      <li class="menu-item">
        <a href="<?= base_url() ?>admin/reviews" class="menu-link">
          <i class="menu-icon tf-icons bx bx-comment-detail"></i>
          <div data-i18n="Manage Reviews">Manage Reviews</div>
        </a>
      </li>
    <?php endif ?>

    <!-- Manage added_events -->
    <?php if (in_groups('admin')) : ?>
      <li class="menu-item">
        <a href="<?= base_url() ?>admin/added_events" class="menu-link">
          <i class="menu-icon menu-item bx bx-bell "></i>
          <div data-i18n="Manage added_events">Notifications</div>
        </a>
      </li>
    <?php endif ?>

  </ul>
</aside>
<!-- / Menu -->