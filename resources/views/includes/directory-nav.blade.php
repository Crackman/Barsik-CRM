<div class="row mb-2">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" href="{{route('directory.index')}}">Устройства</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                Статусы и Типы
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('directory.statuses') }}">Статусы</a></li>
                <li><a class="dropdown-item" href="{{ route('directory.orderTypes') }}">Типы заказа</a></li>
                <li><hr class="dropdown-divider">-</li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('directory.products') }}">Товыры</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('directory.counterparties') }}">Контрагенты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('directory.works') }}">Работы</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('directory.units') }}">Единицы измерения</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
</div>
