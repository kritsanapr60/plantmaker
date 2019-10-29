<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav flex-column" role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="{{ url('/admin') }}">
                        Dashboard
                    </a>
                </li>

                <li class="nav-item" role="presentation">
                    <a href="{{ url('/admin/user') }}">
                        User
                    </a>
                </li>


               <li class="nav-item" role="presentation">
                    <a href="{{ url('/admin/role') }}">
                        Role
                    </a>
                </li>
 <!-- 

                <li class="nav-item" role="presentation">
                    <a href="{{ url('/admin/permission') }}">
                        Permission
                    </a>
                </li> -->

            </ul>
        </div>
    </div>
</div>