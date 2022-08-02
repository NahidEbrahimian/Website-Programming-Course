<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              پنل ادمین 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/cities') }}">
              <span data-feather="file" class="align-text-bottom"></span>
              شهرها
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/products') }}">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              محصولات
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/users') }}">
              <span data-feather="users" class="align-text-bottom"></span>
              کاربران
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/carts') }}">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              سفارش ها
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/admin/comments') }}">
              <span data-feather="layers" class="align-text-bottom"></span>
              کامنت ها
            </a>
          </li>
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>التقارير المحفوظة</span>
          <a class="link-secondary" href="#" aria-label="إضافة تقرير جديد">
            <span data-feather="plus-circle" class="align-text-bottom"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              الشهر الحالي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              الربع الأخير
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              التفاعل الإجتماعي
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text" class="align-text-bottom"></span>
              مبيعات نهاية العام
            </a>
          </li>
        </ul> -->
      </div>
    </nav>