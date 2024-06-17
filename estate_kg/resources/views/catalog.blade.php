@extends('layouts.app')

@section('content')
    <div class="filter-container">
        <div class="filters">
            <div class="filter">
                <label for="property-type">Тип недвижимости</label>
                <select id="property-type">
                    <option value="flat">Квартира</option>
                    <option value="house">Дом</option>
                    <option value="land">Участок</option>
                </select>
            </div>
            <div class="filter">
                <label for="buy-rent">Купить/Снять</label>
                <select id="buy-rent">
                    <option value="buy">Купить</option>
                    <option value="rent">Снять</option>
                </select>
            </div>
            <div class="filter">
                <label for="city">Город</label>
                <input type="text" id="city" placeholder="Город">
            </div>
            <div class="filter">
                <label for="rooms">Комнатность</label>
                <select id="rooms">
                    <option value="studio">Студия</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                </select>
            </div>
            <div class="filter">
                <label for="price">Цена</label>
                <div class="price-range">
                    <input type="number" id="price-from" placeholder="От">
                    <span class="divider">-</span>
                    <input type="number" id="price-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="address">Введите адрес</label>
                <input type="text" id="address" placeholder="Поиск...">
            </div>
        </div>
        <button class="search-button">Найти</button>
        <button class="search-button advanced-search">
            Расширенный поиск
            <span class="filter-count">(0)</span>
        </button>
    </div>
    <div class="advanced-search-form">
        <div class="filters">
            <div class="filter">
                <label for="adv-rooms">Комнат</label>
                <select id="adv-rooms">
                    <option value="any">Неважно</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-price">Цена</label>
                <div class="price-range">
                    <input type="number" id="adv-price-from" placeholder="От">
                    <input type="number" id="adv-price-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="adv-floor">Этаж</label>
                <div class="floor-range">
                    <input type="number" id="adv-floor-from" placeholder="От">
                    <input type="number" id="adv-floor-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="adv-house-floors">Этажей в доме</label>
                <div class="house-floors-range">
                    <input type="number" id="adv-house-floors-from" placeholder="От">
                    <input type="number" id="adv-house-floors-to" placeholder="До">
                </div>
            </div>
            <div class="filter">
                <label for="adv-area">Общая площадь</label>
                <div class="area-range">
                    <input type="number" id="adv-area-from" placeholder="От м²">
                    <input type="number" id="adv-area-to" placeholder="До м²">
                </div>
            </div>
            <div class="filter">
                <label for="adv-living-area">Жилая площадь</label>
                <input type="number" id="adv-living-area" placeholder="До м²">
            </div>
            <div class="filter">
                <label for="adv-kitchen-area">Площадь кухни</label>
                <input type="number" id="adv-kitchen-area" placeholder="До м²">
            </div>
            <div class="filter">
                <label for="adv-balcony">Балкон</label>
                <select id="adv-balcony">
                    <option value="any">Неважно</option>
                    <option value="yes">Да</option>
                    <option value="no">Нет</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-bathroom">Санузел</label>
                <select id="adv-bathroom">
                    <option value="any">Неважно</option>
                    <option value="combined">Совмещенный</option>
                    <option value="separate">Раздельный</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-view">Вид из окон</label>
                <select id="adv-view">
                    <option value="any">Неважно</option>
                    <option value="street">На улицу</option>
                    <option value="courtyard">Во двор</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-renovation">Ремонт</label>
                <select id="adv-renovation">
                    <option value="any">Неважно</option>
                    <option value="euro">Евроремонт</option>
                    <option value="cosmetic">Косметический</option>
                    <option value="none">Без ремонта</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-deal-type">Тип сделки</label>
                <select id="adv-deal-type">
                    <option value="any">Неважно</option>
                    <option value="sale">Продажа</option>
                    <option value="rent">Аренда</option>
                </select>
            </div>
            <div class="filter">
                <label for="adv-house-type">Тип дома</label>
                <select id="adv-house-type">
                    <option value="any">Неважно</option>
                    <option value="brick">Кирпичный</option>
                    <option value="panel">Панельный</option>
                    <option value="monolithic">Монолитный</option>
                    <option value="wood">Деревянный</option>
                </select>
            </div>
        </div>
        <div class="buttons">
            <button class="search-button" id="apply-filters">Поиск</button>
            <button class="search-button" id="reset-filters">Очистить</button>
        </div>
    </div>
    <div class="advertisement">
        <div class="advertisement-image">
            <div class="slider">
                <div class="slide">
                    <img src="{{ asset('images/example-house.jpg') }}" alt="Недвижимость 1">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/example-house2.jpg') }}" alt="Недвижимость 2">
                </div>
                <div class="slide">
                    <img src="{{ asset('images/example-house3.jpg') }}" alt="Недвижимость 3">
                </div>
                <button class="slider-button prev">&#10094;</button>
                <button class="slider-button next">&#10095;</button>
                <div class="slider-indicators">
                    <span class="slider-indicator active"></span>
                    <span class="slider-indicator"></span>
                    <span class="slider-indicator"></span>
                </div>
            </div>
        </div>
        <div class="advertisement-details">
            <h2>25м², студия, 19/21 этаж</h2>
            <div class="price-details">
                <div class="agent-price">
                    7 950 000 ⃀
                </div>
                <div class="agent-price-per-meter">
                    318 000 ⃀/м²
                </div>
            </div>
            <div class="descrip">
                <p>Москва, Южное Бутово, Южное Бутово, Бартеневская ул., 18, к 2</p>
                <p>Бунинская аллея</p>
                <p>Арт. 67512087 Продается студия 25 м2 в новом ЖК "Южные сады" (А101)...</p>
            </div>
            <div class="advertisement-agent">
                <div class="agent-image">
                    <img src="{{ asset('storage/' . $agent->photo) }}" alt="Агент">
                </div>
                <div class="agent-info">
                    <div class="agent-name">{{ $agent->name }}</div>
                    <div class="agent-description">{{ $agent->description }}</div>
                </div>
            </div>
            <div class="agent-price-options">
                <div class="agent-contact">
                    <button id="show-phone" class="contact-button">
                        Показать телефон
                    </button>
                    <button id="phone-number" class="contact-button" style="display: none;">
                        +996 (123) 456-78-90
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/catalog.js') }}"></script>
@endsection
