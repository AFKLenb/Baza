<div class="container">
    <ul class="list1">
        <li class="item1">
            <a class="link1" href="{{ route('home') }}">{{__('Главная') }}</a>
        </li>
        <li class="item1">
            <a class="link1" href="{{ route('post.index') }}">{{__('Новости') }}</a>
        </li>
{{--        <li class="item1">--}}
{{--            <a class="link1" href="{{ route('category') }}">{{__('Категории (клиент)') }}</a>--}}
{{--        </li>--}}
{{--        <li class="item1">--}}
{{--            <a class="link1" href="{{ route('category.index') }}">{{__('Категории') }}</a>--}}
{{--        </li>--}}
{{--        <li class="item1">--}}
{{--            <a class="link1" href="{{ route('product.index') }}">{{__('Товары Мориарти') }}</a>--}}
{{--        </li>--}}
        <li class="item1">
            <a class="link1" href="{{ route('collection') }}">{{__('Категории (клиент)') }}</a>
        </li>
        <li class="item1">
            <a class="link1" href="{{ route('collection.index') }}">{{__('Категории (Админ)') }}</a>
        </li>
        <li class="item1">
            <a class="link1" href="{{ route('cum.index') }}">{{__('Товары (Админ)') }}</a>
        </li>
    </ul>
</div>

