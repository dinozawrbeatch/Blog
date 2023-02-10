
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{route('admin.main.index')}}" class="nav-link">
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <p>
                        Пользователи
                    </p>
                </a>
            </li>

            <li class="nav-item menu-is-opening menu-open">
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <p>
                        Посты
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: block;">
                    <li class="nav-item">
                        <a href="{{ route('admin.post.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Все посты</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.post.draft') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Черновик</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.post.published') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Опубликованные</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.post.archived') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Архив</p>
                        </a>
                    </li>
                </ul>
            </li>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.tag.index')}}" class="nav-link">
                    <p>
                        Теги
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.comment.index')}}" class="nav-link">
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>
        </ul>
    </div>
</aside>
