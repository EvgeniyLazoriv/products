<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

?> 



<main>
		<section class="page-category">
			<div class="container">
				<div class="page-category__top">
					<div class="page-category__content">
						<h2 class="page-category__title">
							Системи Вентиляції
						</h2>
						<p class="page-category__text">
							Вентиляційні установки з рекуперацією тепла
						</p>
					</div>
					<div class="category__picture">
						<img src="img/ventilation-1.png" alt="Теплові насоси">
					</div>
				</div>
				<div class="page-category__bottom">
					<div class="category-mini">
						<div class="category-mini__item">
							<div class="category-mini__content">
								<h3 class="category-mini__title">
									Тепловий насос для дому
									<span>
										500 м
										<sup><small>2</small></sup>
									</span>
								</h3>
								<div class="category-mini__img">
									<img src="img/ventilation-small-1.png" alt="Вентиляція">
								</div>
							</div>
							<a href="#" class="link category-mini__detail">
								<span>Детальніше</span>
							</a>
						</div>
						<div class="category-mini__item">
							<div class="category-mini__content">
								<h3 class="category-mini__title">
									Тепловий насос для об’єкта від
									<span>
										500 м
										<sup><small>2</small></sup>
									</span>
								</h3>
								<div class="category-mini__img">
									<img src="img/ventilation-small-2.png" alt="Вентиляція">
								</div>
							</div>
							<a href="#" class="link category-mini__detail">
								<span>Детальніше</span>
							</a>
						</div>
						<div class="category-mini__item">
							<div class="category-mini__content">
								<h3 class="category-mini__title">
									Тепловий насос для промислового об'єкта від
									<span>
										0.1 МВт
									</span>
								</h3>
								<div class="category-mini__img">
									<img src="img/ventilation-small-3.png" alt="Вентиляція">
								</div>
							</div>
							<a href="#" class="link category-mini__detail">
								<span>Детальніше</span>
							</a>
						</div>
						<div class="category-mini__item">
							<div class="category-mini__content">
								<h3 class="category-mini__title">
									Тепловий насос для дому
									<span>
										500 м
										<sup><small>2</small></sup>
									</span>
								</h3>
								<div class="category-mini__img">
									<img src="img/ventilation-small-1.png" alt="Вентиляція">
								</div>
							</div>
							<a href="#" class="link category-mini__detail">
								<span class="link__text">Детальніше</span>
							</a>
						</div>
						<div class="category-mini__item">
							<div class="category-mini__content">
								<h3 class="category-mini__title">
									Тепловий насос для промислового об'єкта від
									<span>
										0.1 МВт
									</span>
								</h3>
								<div class="category-mini__img">
									<img src="img/ventilation-small-1.png" alt="Вентиляція">
								</div>
							</div>
							<a href="#" class="link category-mini__detail">
								<span class="link__text">Детальніше</span>
							</a>
						</div>
					</div>
					<div class="counter category-mini__counter">
						<span class="counter__left category-mini__counter--left">
							01
						</span>
						/
						<span class="counter__right category-mini__counter--right">
							03
						</span>
					</div>
				</div>
			</div>
		</section>
		<section class="products-page">
			<div class="container products__container">
				<div class="products__left">
					<div class="products-filter">
						<div class="products-filter__top">
							<div class="products-filter__title">
								Бренд
							</div>
							<span class="products-filter__toggle"></span>
						</div>
						<div class="products-filter__bottom">
							<ul class="products-filter__items">
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Systemair
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											WEGER air solutions
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Mitsubishi Electric
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Systemair
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											WEGER air solutions
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Mitsubishi Electric
										</span>
									</label>
								</li>
							</ul>
							<a href="#" class="link products-filter__link">
								Показати всі
							</a>
						</div>
					</div>
					<div class="products-filter">
						<div class="products-filter__top">
							<div class="products-filter__title">
								Вид
							</div>
							<span class="products-filter__toggle"></span>
						</div>
						<div class="products-filter__bottom">
							<ul class="products-filter__items">
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Перший варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Другий варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Третій варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Четвертий варіант
										</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
					<div class="products-price">
						<div class="products-price__top">
							<div class="products-price__title">
								Ціна, $
							</div>
							<span class="products-filter__toggle"></span>
						</div>
						<div class="products-filter__bottom">
							<div class="products-price__input">
								<label class="custom-number">
									<span class="custom-number__text">
										Від
									</span>
									<input type="text" class="custom-number__input">
								</label>
								<label class="custom-number">
									<span class="custom-number__text">
										до
									</span>
									<input type="text" class="custom-number__input">
								</label>
								<button class="custom-number__button">
									Застосувати
								</button>
							</div>
							<div class="products-price__bottom">
								<div class="range-block">
									<input type="range" class="custom-range">
									<div id="progressBar"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="products-filter">
						<div class="products-filter__top">
							<div class="products-filter__title">
								Тип
							</div>
							<span class="products-filter__toggle"></span>
						</div>
						<div class="products-filter__bottom">
							<ul class="products-filter__items">
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Перший варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Другий варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Третій варіант
										</span>
									</label>
								</li>
								<li class="products-filter__item">
									<label class="custom-checkbox">
										<input type="checkbox" class="custom-checkbox__input visually-hidden">
										<span class="custom-checkbox__text">
											Четвертий варіант
										</span>
									</label>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="products-right">
					<!-- <div class="products-right__top">
						<div class="custom-radio">
							<span class="custom-radio__sort">
								Сортування:
							</span>
							<div class="custom-radio__group">
								<input id="radio-1" class="custom-radio__input visually-hidden" type="radio" name="radio"
									value="1" checked>
								<label for="radio-1" class="custom-radio__text">за популярністю</label>
							</div>
							<div class="custom-radio__group">
								<input id="radio-2" class="custom-radio__input visually-hidden" type="radio" name="radio"
									value="2">
								<label for="radio-2" class="custom-radio__text">спершу акційні</label>
							</div>
							<div class="custom-radio__group">
								<input id="radio-3" type="radio" class="custom-radio__input visually-hidden" name="radio"
									value="3">
								<label for="radio-3" class="custom-radio__text">від дешевих до дорогих</label>
							</div>
							<div class="custom-radio__group">
								<input id="radio-4" type="radio" class="custom-radio__input visually-hidden" name="radio"
									value="4">
								<label for="radio-4" class="custom-radio__text">від дорогих до дешевих</label>
							</div>
						</div>
						<div class="icons">
							<button class="icons__btn active">
								<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="0.5" y="0.5" width="5.54545" height="5.54545" fill="#E44747" stroke="#E44747" />
									<rect x="9.22705" y="0.5" width="5.54545" height="5.54545" fill="#E44747" stroke="#E44747" />
									<rect x="17.9546" y="0.5" width="5.54545" height="5.54545" fill="#E44747" stroke="#E44747" />
									<rect x="17.9546" y="9.22729" width="5.54545" height="5.54545" fill="#E44747"
										stroke="#E44747" />
									<rect x="17.9546" y="17.9545" width="5.54545" height="5.54545" fill="#E44747"
										stroke="#E44747" />
									<rect x="9.22705" y="9.22729" width="5.54545" height="5.54545" fill="#E44747"
										stroke="#E44747" />
									<rect x="9.22705" y="17.9545" width="5.54545" height="5.54545" fill="#E44747"
										stroke="#E44747" />
									<rect x="0.5" y="9.22729" width="5.54545" height="5.54545" fill="#E44747" stroke="#E44747" />
									<rect x="0.5" y="17.9545" width="5.54545" height="5.54545" fill="#E44747" stroke="#E44747" />
								</svg>
							</button>
							<button class="icons__btn">
								<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect x="0.5" y="0.5" width="5.54545" height="5.54545" stroke="#434343" />
									<rect x="9.22754" y="0.5" width="14.2727" height="5.54545" stroke="#434343" />
									<rect x="9.22754" y="9.22729" width="14.2727" height="5.54545" stroke="#434343" />
									<rect x="9.22754" y="17.9545" width="14.2727" height="5.54545" stroke="#434343" />
									<rect x="0.5" y="9.22729" width="5.54545" height="5.54545" stroke="#434343" />
									<rect x="0.5" y="17.9545" width="5.54545" height="5.54545" stroke="#434343" />
								</svg>
							</button>
						</div>
					</div>
					<ul class="products-right__list">
						<li class="products-right__item product stock">
							<div class="card__top">
								<span class="card__cod">
									Код: 128238988
								</span>
								<div class="promotion">
									<button class="promotion__item card__favorite">
										<svg width="28" height="26" viewbox="0 0 28 26" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M20.7084 0.166626C17.6025 0.166626 15.0374 3.05139 14 4.41289C12.9626 3.05139 10.3975 0.166626 7.29165 0.166626C3.27102 0.166626 0 3.86317 0 8.40623C0 10.8848 0.983828 13.1948 2.70588 14.7756C2.73093 14.8189 2.76172 14.8588 2.79759 14.8947L13.5881 25.663C13.7021 25.7763 13.8508 25.8333 14 25.8333C14.1492 25.8333 14.2985 25.7763 14.4125 25.6624L25.5619 14.517L25.6769 14.4053C25.7681 14.3193 25.8581 14.2321 25.9589 14.1205C26.0011 14.079 26.0358 14.0322 26.0626 13.9815C27.313 12.4503 28 10.4752 28 8.40623C28 3.86317 24.729 0.166626 20.7084 0.166626ZM25.0919 13.3253C25.0759 13.3441 25.0611 13.364 25.048 13.3845C24.9933 13.4472 24.9335 13.5024 24.8743 13.5588L13.9995 24.4257L3.75523 14.202C3.7222 14.137 3.67604 14.0778 3.61966 14.0282C2.06046 12.6667 1.16665 10.6176 1.16665 8.40623C1.16665 4.5063 3.91415 1.33333 7.29165 1.33333C10.631 1.33333 13.481 5.68897 13.5095 5.73283C13.7249 6.06549 14.2751 6.06549 14.4905 5.73283C14.519 5.68897 17.369 1.33333 20.7084 1.33333C24.0859 1.33333 26.8334 4.50635 26.8334 8.40623C26.8334 10.2439 26.2147 11.9911 25.0919 13.3253Z"
												fill="#B2B2B2" />
										</svg>
									</button>
									<button class="promotion__item card__compare">
										<svg width="28" height="28" viewbox="0 0 28 28" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M27.9524 14.2321L27.9286 14.244L23.9116 4.24617H25.7445C26.0732 4.24617 26.3396 3.97971 26.3396 3.65106C26.3396 3.32241 26.0732 3.05595 25.7445 3.05595H14.5445V1.33608C14.5445 1.00743 14.2781 0.740967 13.9494 0.740967C13.6208 0.740967 13.3543 1.00743 13.3543 1.33608V3.05H2.16026C1.8316 3.05 1.56514 3.31646 1.56514 3.64511C1.56514 3.97376 1.8316 4.24022 2.16026 4.24022H4.07056L0.0476089 14.2321C0.0178533 14.3018 0.00171095 14.3766 0 14.4523C0 17.1852 2.21545 19.4007 4.94835 19.4007C7.68125 19.4007 9.89671 17.1852 9.89671 14.4523C9.89499 14.3766 9.87885 14.3018 9.8491 14.2321L5.83209 4.23427H13.3543V22.6351C10.5156 22.8494 8.29586 24.5752 8.29586 26.664C8.29586 26.9927 8.56232 27.2591 8.89097 27.2591H19.0079C19.3365 27.2591 19.603 26.9927 19.603 26.664C19.603 24.5752 17.3832 22.8494 14.5445 22.6351V4.23427H22.1441L18.1509 14.2321C18.1211 14.3018 18.105 14.3766 18.1033 14.4523C18.1033 17.1852 20.3187 19.4007 23.0516 19.4007C25.7845 19.4007 28 17.1852 28 14.4523C27.9983 14.3766 27.9821 14.3018 27.9524 14.2321ZM4.94538 18.2194C3.10217 18.2169 1.53241 16.8789 1.23783 15.0594H8.62912C8.33603 16.8701 6.77959 18.2053 4.94538 18.2194ZM8.41488 13.8691H1.48778L4.95728 5.23406L8.41488 13.8691ZM18.3056 26.0689H9.58725C10.0276 24.7894 11.8427 23.8015 13.9435 23.8015C16.0442 23.8015 17.8653 24.7894 18.3056 26.0689ZM23.0249 5.24001L26.4825 13.8691H19.5554L23.0249 5.24001ZM23.0249 18.2194V18.2253C21.1887 18.2107 19.6316 16.8724 19.3411 15.0594H26.7324C26.4378 16.8789 24.8681 18.2169 23.0249 18.2194Z"
												fill="#B2B2B2" />
										</svg>
									</button>
								</div>
								<div class="card-stock">
									<span class="card-stock__left">Акція</span>
									<span class="card-stock__right">-10%</span>
								</div>
							</div>
							<div class="card__img">
								<img src="img/card-2.jpg" alt="systemar">
							</div>
							<div class="card__bottom">
								<h3 class="card__title">
									Припливно-витяжні установки Mitsubishi Electric з роторним рекуператором WIZARD DX
								</h3>
								<div class="card__raiting">
									<div class="card__stars">
										<span class="card__star">
											<svg width="14" height="14" viewbox="0 0 14 14" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.9799 5.39388C13.9317 5.24537 13.8033 5.13715 13.6489 5.11473L9.30879 4.48404L7.3678 0.55129C7.29873 0.411291 7.15613 0.32267 7.00002 0.32267C6.84389 0.32267 6.70132 0.411291 6.63222 0.55129L4.69115 4.48404L0.351171 5.11473C0.196707 5.13715 0.0683282 5.24537 0.020094 5.39385C-0.0281676 5.54235 0.0120823 5.70535 0.12389 5.81431L3.26425 8.87554L2.52302 13.1981C2.49661 13.352 2.55988 13.5075 2.68618 13.5993C2.75763 13.6512 2.84226 13.6776 2.9273 13.6776C2.99259 13.6776 3.05811 13.662 3.1181 13.6305L7 11.5896L10.8817 13.6304C11.0199 13.7031 11.1874 13.691 11.3137 13.5992C11.44 13.5075 11.5033 13.3519 11.4769 13.1981L10.7354 8.87554L13.8761 5.81429C13.9879 5.70535 14.0282 5.54235 13.9799 5.39388Z"
													fill="#E44747" />
											</svg>
										</span>
										<span class="card__star">
											<svg width="14" height="14" viewbox="0 0 14 14" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.9799 5.39388C13.9317 5.24537 13.8033 5.13715 13.6489 5.11473L9.30879 4.48404L7.3678 0.55129C7.29873 0.411291 7.15613 0.32267 7.00002 0.32267C6.84389 0.32267 6.70132 0.411291 6.63222 0.55129L4.69115 4.48404L0.351171 5.11473C0.196707 5.13715 0.0683282 5.24537 0.020094 5.39385C-0.0281676 5.54235 0.0120823 5.70535 0.12389 5.81431L3.26425 8.87554L2.52302 13.1981C2.49661 13.352 2.55988 13.5075 2.68618 13.5993C2.75763 13.6512 2.84226 13.6776 2.9273 13.6776C2.99259 13.6776 3.05811 13.662 3.1181 13.6305L7 11.5896L10.8817 13.6304C11.0199 13.7031 11.1874 13.691 11.3137 13.5992C11.44 13.5075 11.5033 13.3519 11.4769 13.1981L10.7354 8.87554L13.8761 5.81429C13.9879 5.70535 14.0282 5.54235 13.9799 5.39388Z"
													fill="#E44747" />
											</svg>
										</span>
										<span class="card__star">
											<svg width="14" height="14" viewbox="0 0 14 14" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.9799 5.39388C13.9317 5.24537 13.8033 5.13715 13.6489 5.11473L9.30879 4.48404L7.3678 0.55129C7.29873 0.411291 7.15613 0.32267 7.00002 0.32267C6.84389 0.32267 6.70132 0.411291 6.63222 0.55129L4.69115 4.48404L0.351171 5.11473C0.196707 5.13715 0.0683282 5.24537 0.020094 5.39385C-0.0281676 5.54235 0.0120823 5.70535 0.12389 5.81431L3.26425 8.87554L2.52302 13.1981C2.49661 13.352 2.55988 13.5075 2.68618 13.5993C2.75763 13.6512 2.84226 13.6776 2.9273 13.6776C2.99259 13.6776 3.05811 13.662 3.1181 13.6305L7 11.5896L10.8817 13.6304C11.0199 13.7031 11.1874 13.691 11.3137 13.5992C11.44 13.5075 11.5033 13.3519 11.4769 13.1981L10.7354 8.87554L13.8761 5.81429C13.9879 5.70535 14.0282 5.54235 13.9799 5.39388Z"
													fill="#E44747" />
											</svg>
										</span>
										<span class="card__star">
											<svg width="14" height="14" viewbox="0 0 14 14" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.9799 5.39388C13.9317 5.24537 13.8033 5.13715 13.6489 5.11473L9.30879 4.48404L7.3678 0.55129C7.29873 0.411291 7.15613 0.32267 7.00002 0.32267C6.84389 0.32267 6.70132 0.411291 6.63222 0.55129L4.69115 4.48404L0.351171 5.11473C0.196707 5.13715 0.0683282 5.24537 0.020094 5.39385C-0.0281676 5.54235 0.0120823 5.70535 0.12389 5.81431L3.26425 8.87554L2.52302 13.1981C2.49661 13.352 2.55988 13.5075 2.68618 13.5993C2.75763 13.6512 2.84226 13.6776 2.9273 13.6776C2.99259 13.6776 3.05811 13.662 3.1181 13.6305L7 11.5896L10.8817 13.6304C11.0199 13.7031 11.1874 13.691 11.3137 13.5992C11.44 13.5075 11.5033 13.3519 11.4769 13.1981L10.7354 8.87554L13.8761 5.81429C13.9879 5.70535 14.0282 5.54235 13.9799 5.39388Z"
													fill="#E44747" />
											</svg>
										</span>
										<span class="card__star">
											<svg width="14" height="14" viewbox="0 0 14 14" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<path
													d="M13.9799 5.39388C13.9317 5.24537 13.8033 5.13715 13.6489 5.11473L9.30879 4.48404L7.3678 0.55129C7.29873 0.411291 7.15613 0.32267 7.00002 0.32267C6.84389 0.32267 6.70132 0.411291 6.63222 0.55129L4.69115 4.48404L0.351171 5.11473C0.196707 5.13715 0.0683282 5.24537 0.020094 5.39385C-0.0281676 5.54235 0.0120823 5.70535 0.12389 5.81431L3.26425 8.87554L2.52302 13.1981C2.49661 13.352 2.55988 13.5075 2.68618 13.5993C2.75763 13.6512 2.84226 13.6776 2.9273 13.6776C2.99259 13.6776 3.05811 13.662 3.1181 13.6305L7 11.5896L10.8817 13.6304C11.0199 13.7031 11.1874 13.691 11.3137 13.5992C11.44 13.5075 11.5033 13.3519 11.4769 13.1981L10.7354 8.87554L13.8761 5.81429C13.9879 5.70535 14.0282 5.54235 13.9799 5.39388Z"
													fill="#E44747" />
											</svg>
										</span>
									</div>
									<div class="card-review">
										<svg width="18" height="13" viewbox="0 0 18 13" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M2 1H16C16.5523 1 17 1.44772 17 2V7.46697C17 8.01926 16.5523 8.46697 16 8.46697H13.4231C11.9558 8.46697 10.7343 9.52012 10.4742 10.9122C10.0751 10.4656 9.66718 9.9802 9.34283 9.58566C8.76899 8.88766 7.91124 8.46697 6.99086 8.46697H2C1.44772 8.46697 1 8.01926 1 7.46697V2C1 1.44772 1.44771 1 2 1Z"
												stroke="#E44747" stroke-width="2" />
										</svg>
										<span class="card-review__count">4</span>
										<a href="#" class="card-review__text">
											відгуки
										</a>
									</div>
								</div>
								<div class="card-price">
									<h4 class="card-price__title">
										275 $
									</h4>
									<a href="#" class="buy card-price__buy">
										<svg width="19" height="18" viewbox="0 0 19 18" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M17.8925 3.10015C17.7995 2.98631 17.6586 2.92004 17.5096 2.92004H4.45817L4.0932 1.37206C4.04184 1.15428 3.84371 1 3.61537 1H1.49038C1.21957 1 1 1.21492 1 1.48003C1 1.74513 1.21957 1.96002 1.49038 1.96002H3.22527L5.70262 12.468C5.75395 12.6858 5.95211 12.84 6.18045 12.84H16.0057C16.2766 12.84 16.4961 12.6251 16.4961 12.36C16.4961 12.0949 16.2765 11.88 16.0057 11.88H6.57058L6.1934 10.28H16.0385C16.2678 10.28 16.4666 10.1244 16.5169 9.90541L17.988 3.5054C18.0207 3.36311 17.9856 3.21403 17.8925 3.10015ZM15.6461 9.32002H5.96705L4.68451 3.88003H16.8966L15.6461 9.32002Z"
												fill="#E44747" />
											<path
												d="M8.1923 13.48C7.20085 13.48 6.39422 14.2695 6.39422 15.24C6.39422 16.2105 7.20082 17 8.1923 17C9.18374 17 9.99038 16.2105 9.99038 15.24C9.99038 14.2695 9.18378 13.48 8.1923 13.48ZM8.1923 16.04C7.74163 16.04 7.375 15.6811 7.375 15.24C7.375 14.7989 7.74163 14.44 8.1923 14.44C8.64296 14.44 9.00959 14.7989 9.00959 15.24C9.00959 15.6811 8.64296 16.04 8.1923 16.04Z"
												fill="#E44747" />
											<path
												d="M14.0769 13.48C13.0854 13.48 12.2788 14.2695 12.2788 15.24C12.2788 16.2105 13.0854 17 14.0769 17C15.0683 17 15.875 16.2105 15.875 15.24C15.875 14.2695 15.0684 13.48 14.0769 13.48ZM14.0769 16.04C13.6262 16.04 13.2596 15.6811 13.2596 15.24C13.2596 14.7989 13.6262 14.44 14.0769 14.44C14.5276 14.44 14.8942 14.7989 14.8942 15.24C14.8942 15.6811 14.5276 16.04 14.0769 16.04Z"
												fill="#E44747" />
											<path
												d="M17.8925 3.10015C17.7995 2.98631 17.6586 2.92004 17.5096 2.92004H4.45817L4.0932 1.37206C4.04184 1.15428 3.84371 1 3.61537 1H1.49038C1.21957 1 1 1.21492 1 1.48003C1 1.74513 1.21957 1.96002 1.49038 1.96002H3.22527L5.70262 12.468C5.75395 12.6858 5.95211 12.84 6.18045 12.84H16.0057C16.2766 12.84 16.4961 12.6251 16.4961 12.36C16.4961 12.0949 16.2765 11.88 16.0057 11.88H6.57058L6.1934 10.28H16.0385C16.2678 10.28 16.4666 10.1244 16.5169 9.90541L17.988 3.5054C18.0207 3.36311 17.9856 3.21403 17.8925 3.10015ZM15.6461 9.32002H5.96705L4.68451 3.88003H16.8966L15.6461 9.32002Z"
												stroke="#E44747" stroke-width="0.5" />
											<path
												d="M8.1923 13.48C7.20085 13.48 6.39422 14.2695 6.39422 15.24C6.39422 16.2105 7.20082 17 8.1923 17C9.18374 17 9.99038 16.2105 9.99038 15.24C9.99038 14.2695 9.18378 13.48 8.1923 13.48ZM8.1923 16.04C7.74163 16.04 7.375 15.6811 7.375 15.24C7.375 14.7989 7.74163 14.44 8.1923 14.44C8.64296 14.44 9.00959 14.7989 9.00959 15.24C9.00959 15.6811 8.64296 16.04 8.1923 16.04Z"
												stroke="#E44747" stroke-width="0.5" />
											<path
												d="M14.0769 13.48C13.0854 13.48 12.2788 14.2695 12.2788 15.24C12.2788 16.2105 13.0854 17 14.0769 17C15.0683 17 15.875 16.2105 15.875 15.24C15.875 14.2695 15.0684 13.48 14.0769 13.48ZM14.0769 16.04C13.6262 16.04 13.2596 15.6811 13.2596 15.24C13.2596 14.7989 13.6262 14.44 14.0769 14.44C14.5276 14.44 14.8942 14.7989 14.8942 15.24C14.8942 15.6811 14.5276 16.04 14.0769 16.04Z"
												stroke="#E44747" stroke-width="0.5" />
										</svg>
										Купити
									</a>
								</div>
								<ul class="card-list">
									<li class="card-list__item">
										<span class="card-list__cat">Для приміщень:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">офісних і торгових</span>
									</li>
									<li class="card-list__item">
										<span class="card-list__cat">Секції:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">3</span>
									</li>
									<li class="card-list__item">
										<span class="card-list__cat">Для приміщень:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">офісних і торгових</span>
									</li>
									<li class="card-list__item">
										<span class="card-list__cat">Секції:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">3</span>
									</li>
									<li class="card-list__item">
										<span class="card-list__cat">Для приміщень:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">офісних і торгових</span>
									</li>
									<li class="card-list__item">
										<span class="card-list__cat">Секції:</span>
										<span class="card-list__dots"></span>
										<span class="card-list__res">3</span>
									</li>
								</ul>
								<button class="card__more"></button>
							</div>
						</li>


						<button class="card__last product">
							<img src="img/svg/more-item.svg" alt="read more">
							<h3 class="card__title">
								Завантажити ще 20 товарів
							</h3>
						</button>
					</ul> -->

					<?php
							if ( woocommerce_product_loop() ) {
								do_action( 'woocommerce_before_shop_loop' );
								woocommerce_product_loop_start();

								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										do_action( 'woocommerce_shop_loop' );

										wc_get_template_part( 'content', 'product' );
									}
								}

								woocommerce_product_loop_end();

								do_action( 'woocommerce_after_shop_loop' );
							} else {

								do_action( 'woocommerce_no_products_found' );
							} ?>
					<div class="products-right__bottom">
						<div class="pagination">
							<a href="#" class="pagination__arrow disabled">
								<svg width="9" height="17" viewbox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.81253 15L15 27.1875V30L-5.65728e-09 15L15 0V2.81248L2.81253 15Z"
										fill="#434343" />
								</svg>
								Назад
							</a>
							<ul class="pagination-list">
								<li class="pagination-list__item active">
									<a href="#">1</a>
								</li>
								<li class="pagination-list__item">
									<a href="#">2</a>
								</li>
								<li class="pagination-list__item">
									<a href="#">3</a>
								</li>
								<li class="pagination-list__item">
									<a href="#">4</a>
								</li>
								<li class="pagination-list__item">
									<a href="#">5</a>
								</li>
							</ul>
							<a href="#" class="pagination__arrow">
								Вперед
								<svg width="9" height="17" viewbox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.6875 15L0.5 27.1875V30L15.5 15L0.5 0V2.81248L12.6875 15Z" fill="#434343" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>

	<?php


						/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>

<header class="woocommerce-products-header">

		<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
	

	<?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
</header>

<?php

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );

?>
