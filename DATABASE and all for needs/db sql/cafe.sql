-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Час створення: Квт 19 2017 р., 07:05
-- Версія сервера: 5.7.9
-- Версія PHP: 5.6.15-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `cafe`
--

-- --------------------------------------------------------

--
-- Структура таблиці `additionallies`
--

CREATE TABLE `additionallies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price_uah` varchar(255) NOT NULL,
  `price_usd` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `path300х200` varchar(255) NOT NULL,
  `path700х400` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `additionallies`
--

INSERT INTO `additionallies` (`id`, `name`, `weight`, `product`, `price_uah`, `price_usd`, `info`, `photo`, `path300х200`, `path700х400`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Мускат', '1 Літр', '3', '342', '12.83', 'Кто не бухает тот не загорает! Пиво, вино, водочка, колбаса, селедочка! Винище, кирасище, пивасик и рагазик, Водочки для легкой походочки! Выпиваем бухаем и тут же загораем! Кому винца кому винюлика кому винище что б не сорвало днище! Ребята бухаем, и тут', 'phpiOaFgE.jpg', '', '', NULL, '2017-04-13 12:11:09', '2017-04-14 14:24:16'),
(6, 'Верона', '450 Грам', '2', '140', '5.25', 'Сир\r\nКовбаса\r\nЦибуля\r\nМясо з рускоговорящого младєнца\r\nСоус з крові младєнца\r\nПерець гострий чілі або младєнца', 'phpleLhs3.jpg', '', '', NULL, '2017-04-13 14:55:17', '2017-04-13 14:55:17'),
(8, 'Martini', '0,75 Літр', '3', '460', '17.26', 'Ноты бергамота, мирры, шафрана, перца кубеба, имбиря и других трав создают утонченный и нежный вкус этого вермута. Присутствуют также цитрусовые фрукты (сладкий апельсин и сицилийский лимон). Послевкусие короткое.', 'phpRfOvbF.jpg', '', '', NULL, '2017-04-14 14:22:20', '2017-04-14 14:22:20'),
(9, 'АГАДА', '0,75 Літр', '2', '188.13', '7.06', 'АГАДА ВИНО КРАСНОЕ ПОЛУСУХОЕ СТОЛОВОЕ', 'phpxm0xQe.jpg', '', '', NULL, '2017-04-14 14:23:44', '2017-04-14 14:23:44');

-- --------------------------------------------------------

--
-- Структура таблиці `baskets`
--

CREATE TABLE `baskets` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `name_addit` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `price_uah` varchar(255) NOT NULL,
  `price_usd` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `baskets`
--

INSERT INTO `baskets` (`id`, `id_user`, `name_product`, `name_addit`, `count`, `street`, `name_user`, `phone`, `photo`, `price_uah`, `price_usd`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 'Не зазначено', 'Вино', 'Мускат', '5', 'макаренка 4', 'Макс', '380931137675', '/img/300x200/additionall/phpJwQXXr.jpg', '1710', '64.15', '2017-04-18 08:11:32', '2017-04-14 11:51:34', '2017-04-18 08:11:32'),
(4, '1', 'Вино', 'Мускат', '1', 'Не зазначено', '1234', '123321', '/img/300x200/additionall/phpJwQXXr.jpg', '342', '12.83', '2017-04-18 08:11:29', '2017-04-14 11:53:19', '2017-04-18 08:11:29'),
(7, 'Не зазначено', 'Вино', 'Martini', '50', 'СТРАНА ГАНДУРАС', 'ГАНДУРАС', '666-666-666-666', '/img/300x200/additionall/phpRfOvbF.jpg', '23000', '863.00', '2017-04-18 08:11:28', '2017-04-14 14:27:21', '2017-04-18 08:11:28'),
(12, '1', 'Вино', 'Martini', '1', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpRfOvbF.jpg', '460', '17.26', '2017-04-18 08:11:27', '2017-04-18 07:54:32', '2017-04-18 08:11:27'),
(13, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 12:42:46', '2017-04-18 09:01:49', '2017-04-18 12:42:46'),
(14, '1', 'Піцца', 'Верона', '2', 'макаренка 4', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 12:42:29', '2017-04-18 09:05:40', '2017-04-18 12:42:29'),
(15, '1', 'Піцца', 'Верона', '2', 'Не зазначено', '34', '11', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 11:15:50', '2017-04-18 09:18:53', '2017-04-18 11:15:50'),
(16, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 16:58:32', '2017-04-18 09:19:32', '2017-04-18 16:58:32'),
(17, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 09:45:32', '2017-04-18 09:21:07', '2017-04-18 09:45:32'),
(18, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 09:42:44', '2017-04-18 09:22:03', '2017-04-18 09:42:44'),
(19, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 09:37:57', '2017-04-18 09:23:18', '2017-04-18 09:37:57'),
(20, '1', 'Піцца', 'Верона', '2', 'Не зазначено', 'Макс', '380931137675', '/img/300x200/additionall/phpleLhs3.jpg', '280', '10.5', '2017-04-18 09:28:01', '2017-04-18 09:24:08', '2017-04-18 09:28:01');

-- --------------------------------------------------------

--
-- Структура таблиці `englishes`
--

CREATE TABLE `englishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `blade` varchar(255) NOT NULL,
  `element` varchar(255) NOT NULL,
  `word_en` varchar(255) NOT NULL,
  `word_ua` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `englishes`
--

INSERT INTO `englishes` (`id`, `blade`, `element`, `word_en`, `word_ua`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'welcome', 'button_1', 'Admin', 'Адмін', NULL, NULL, NULL),
(2, 'welcome', 'button_2', 'Basket', 'Кошик', NULL, NULL, NULL),
(3, 'welcome', 'button_3', 'Shop', 'Магазин', NULL, NULL, NULL),
(4, 'welcome', 'button_4', 'Logout', 'Вихід', NULL, NULL, NULL),
(5, 'welcome', 'button_5', 'Login', 'Авторизація', NULL, NULL, NULL),
(6, 'welcome', 'button_6', 'Register', 'Реєстрація', NULL, NULL, NULL),
(7, 'welcome', 'login_info', 'You logged in', 'Ви ввійшли як', NULL, NULL, NULL),
(8, 'welcome', 'use', 'Chosen language:', 'Вибрана мова:', NULL, NULL, NULL),
(10, 'config', 'table_1', 'Photo', 'Фото', NULL, NULL, NULL),
(11, 'config', 'table_2', 'Category', 'Категорія', NULL, NULL, NULL),
(12, 'config', 'table_3', 'Food', 'Їжа', NULL, NULL, NULL),
(13, 'config', 'table_4', 'Name', 'Імя', NULL, NULL, NULL),
(14, 'config', 'table_5', 'Phone', 'Телефон', NULL, NULL, NULL),
(15, 'config', 'table_6', 'Place', 'Місце', NULL, NULL, NULL),
(16, 'config', 'table_7', 'Number', 'Кількість', NULL, NULL, NULL),
(17, 'config', 'table_8', 'Price uah.', 'Ціна грн.', NULL, NULL, NULL),
(18, 'config', 'table_9', 'Price usd.', 'Ціна usd.', NULL, NULL, NULL),
(19, 'config', 'table_10', 'Add', 'Прийняти', NULL, NULL, NULL),
(20, 'config', 'table_11', 'Undo', 'Вернути', NULL, NULL, NULL),
(21, 'config', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(22, 'config', 'button_2', 'Manage categories', 'Керування категоріями', NULL, NULL, NULL),
(23, 'config', 'button_3', 'Manage food', 'Керування їжою', NULL, NULL, NULL),
(24, 'config', 'status_1', 'Ordered now', 'Замовлено зараз', NULL, NULL, NULL),
(25, 'config', 'status_2', 'Order history', 'Історія замовлень', NULL, NULL, NULL),
(26, 'config', 'status_3', 'Currently there are no orders!', 'На даний момент немає замовлень!', NULL, NULL, NULL),
(27, 'basket', 'table_1', 'Photo', 'Фото', NULL, NULL, NULL),
(28, 'basket', 'table_2', 'Category', 'Категорія', NULL, NULL, NULL),
(29, 'basket', 'table_3', 'Food', 'Їжа', NULL, NULL, NULL),
(30, 'basket', 'table_4', 'Number', 'Кількість', NULL, NULL, NULL),
(31, 'basket', 'table_5', 'Price uah.', 'Ціна грн.', NULL, NULL, NULL),
(32, 'basket', 'table_6', 'Price usd.', 'Ціна usd.', NULL, NULL, NULL),
(33, 'basket', 'table_7', 'Delete', 'Видалити', NULL, NULL, NULL),
(34, 'basket', 'table_8', 'Status', 'Статус', NULL, NULL, NULL),
(35, 'basket', 'status_1', 'Orders accepted', 'Замовлення прийнято', NULL, NULL, NULL),
(36, 'basket', 'status_2', 'Currently you have no orders!', 'На даний момент у вас немає замовлень!', NULL, NULL, NULL),
(37, 'basket', 'status_3', 'To order something, press', 'Щоб щось замовити, натисніть', NULL, NULL, NULL),
(38, 'basket', 'button_1', 'HERE', 'СЮДИ', NULL, NULL, NULL),
(39, 'basket', 'status_4', 'Your order', 'Ваше замовлення', NULL, NULL, NULL),
(40, 'basket', 'status_5', 'Wait, we will soon take orders!', 'Зачекайте, ми скоро приймемо замовлення!', NULL, NULL, NULL),
(41, 'basket', 'status_6', 'Order history', 'Історія замовлень', NULL, NULL, NULL),
(42, 'home', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(43, 'home', 'param_1', 'Average price of weight', 'Середня ціна на вагу', NULL, NULL, NULL),
(44, 'home', 'param_2', 'Weight', 'Вага', NULL, NULL, NULL),
(45, 'home', 'button_2', 'More', 'Детальніше', NULL, NULL, NULL),
(46, 'home', 'button_3', 'Edit', 'Редагувати', NULL, NULL, NULL),
(47, 'layout', 'button_1', 'Admin', 'Адмін', NULL, NULL, NULL),
(48, 'layout', 'button_2', 'Basket', 'Кошик', NULL, NULL, NULL),
(49, 'layout', 'button_3', 'Shop', 'Магазин', NULL, NULL, NULL),
(50, 'layout', 'button_4', 'Logout', 'Вихід', NULL, NULL, NULL),
(51, 'layout', 'button_5', 'Login', 'Авторизація', NULL, NULL, NULL),
(52, 'layout', 'button_6', 'Register', 'Реєстрація', NULL, NULL, NULL),
(53, 'layout', 'button_7', 'Home', 'Головна', NULL, NULL, NULL),
(54, 'layout', 'auth', 'You logged in', 'Ви авторизовані як', NULL, NULL, NULL),
(55, 'cat', 'status_1', 'Ingredients', 'Складники', NULL, NULL, NULL),
(56, 'cat', 'status_2', 'PRICE AND WEIGHT', 'ЦІНА І ВАГА', NULL, NULL, NULL),
(57, 'cat', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(58, 'cat', 'button_2', 'Edit', 'Редагувати', NULL, NULL, NULL),
(59, 'cat', 'button_3', 'Order', 'Замовити', NULL, NULL, NULL),
(60, 'edit_food', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(61, 'edit_food', 'button_2', ' Back to product selection', 'Перейти до вибору продукту', NULL, NULL, NULL),
(62, 'edit_food', 'button_3', 'Change', 'Змінити', NULL, NULL, NULL),
(63, 'edit_food', 'status_1', 'Name', 'Назва', NULL, NULL, NULL),
(64, 'edit_food', 'status_2', 'Weight', 'Вага', NULL, NULL, NULL),
(65, 'edit_food', 'status_3', 'Category', 'Категорія', NULL, NULL, NULL),
(66, 'edit_food', 'status_4', 'Price UAH', 'Ціна UAH', NULL, NULL, NULL),
(67, 'edit_food', 'status_5', 'Price USD', 'Ціна USD', NULL, NULL, NULL),
(68, 'edit_food', 'status_6', 'Ingredients', 'Складники', NULL, NULL, NULL),
(69, 'edit', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(70, 'edit', 'button_2', 'Back to category selection', 'Перейти до вибору категорії', NULL, NULL, NULL),
(71, 'edit', 'button_3', 'Change', 'Змінити', NULL, NULL, NULL),
(72, 'edit', 'status_1', 'Name', 'Назва', NULL, NULL, NULL),
(73, 'edit', 'status_2', 'Weight', 'Вага', NULL, NULL, NULL),
(74, 'edit', 'status_3', 'Average price UAH', 'Сер. ціна UAH', NULL, NULL, NULL),
(75, 'edit', 'status_4', 'Average price USD', 'Сер. ціна USD', NULL, NULL, NULL),
(76, 'food', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(77, 'food', 'status_1', 'Category', 'Категорії', NULL, NULL, NULL),
(78, 'food', 'status_2', 'Photo', 'Фото', NULL, NULL, NULL),
(79, 'food', 'status_3', 'Name', 'Назва', NULL, NULL, NULL),
(80, 'food', 'status_4', 'Weight', 'Вага', NULL, NULL, NULL),
(81, 'food', 'status_5', 'Price uah.', 'Ціна грн.', NULL, NULL, NULL),
(82, 'food', 'status_6', 'Price usd.', 'Ціна usd.', NULL, NULL, NULL),
(83, 'food', 'status_7', 'Edit', 'Редагувати', NULL, NULL, NULL),
(84, 'food', 'status_8', 'Delete', 'Видалити', NULL, NULL, NULL),
(85, 'additionallies', 'button_1', 'Add category or food', 'Добавити категорію або їжу', NULL, NULL, NULL),
(86, 'additionallies', 'status_1', 'Food', 'Їжа', NULL, NULL, NULL),
(87, 'additionallies', 'status_2', 'Photo', 'Фото', NULL, NULL, NULL),
(88, 'additionallies', 'status_3', 'Name', 'Назва', NULL, NULL, NULL),
(89, 'additionallies', 'status_4', 'Weight', 'Вага', NULL, NULL, NULL),
(90, 'additionallies', 'status_5', 'Ingredients', 'Cкладники', NULL, NULL, NULL),
(91, 'additionallies', 'status_6', 'Price uah.', 'Ціна грн.', NULL, NULL, NULL),
(92, 'additionallies', 'status_7', 'Price usd.', 'Ціна usd.', NULL, NULL, NULL),
(93, 'additionallies', 'status_8', 'Edit', 'Редагувати', NULL, NULL, NULL),
(94, 'additionallies', 'status_9', 'Delete', 'Видалити', NULL, NULL, NULL),
(95, 'add', 'button_1', 'Manage category', 'Керувати категоріями', NULL, NULL, NULL),
(96, 'add', 'button_2', 'Manage food', 'Керувати їжою', NULL, NULL, NULL),
(97, 'add', 'button_3', 'Add', 'Добавити', NULL, NULL, NULL),
(99, 'add', 'section_1', 'Add category', 'Додати категорію', NULL, NULL, NULL),
(100, 'add', 'section_2', 'Add food', 'Додати Їжу', NULL, NULL, NULL),
(101, 'add', 'status_1', 'Name', 'Назва', NULL, NULL, NULL),
(102, 'add', 'status_2', 'Average Weight / Volume', 'Середня Вага/Об\'єм', NULL, NULL, NULL),
(103, 'add', 'status_3', 'Medium price', 'Cередня ціна', NULL, NULL, NULL),
(104, 'add', 'status_4', 'Price uah.', 'Ціна грн.', NULL, NULL, NULL),
(105, 'add', 'status_5', 'Price usd.', 'Ціна usd.', NULL, NULL, NULL),
(106, 'add', 'status_6', 'Photo', 'Фотографія', NULL, NULL, NULL),
(107, 'add', 'status_7', 'Weight / Volume', 'Вага / Об\'єм', NULL, NULL, NULL),
(108, 'add', 'status_8', 'Select category', 'Виберіть категорію', NULL, NULL, NULL),
(109, 'add', 'status_9', 'Ingredients', 'Cкладники', NULL, NULL, NULL),
(110, 'add', 'status_10', 'Access denied!', 'Доступ закритий!', NULL, NULL, NULL),
(111, 'add', 'status_11', 'Error', 'Помилка', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `foods`
--

CREATE TABLE `foods` (
  `id` int(10) UNSIGNED NOT NULL,
  `product` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `price_uah` varchar(255) NOT NULL,
  `price_usd` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `foods`
--

INSERT INTO `foods` (`id`, `product`, `weight`, `price_uah`, `price_usd`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Піцца', '400 Грам', '90', '0.00', '/img/300x200/phpNYcGXO.jpg', NULL, '2017-04-13 12:04:42', '2017-04-13 12:54:36'),
(3, 'Вино', '1 Літр', '300', '11.24', '/img/300x200/php7lZw9b.jpg', NULL, '2017-04-13 12:09:00', '2017-04-13 12:09:00');

-- --------------------------------------------------------

--
-- Структура таблиці `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `languages`
--

INSERT INTO `languages` (`id`, `lang`, `category`, `photo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'English', '1', '/img/english.jpg', NULL, NULL, NULL),
(2, 'Українська', '2', '/img/ukraine.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_09_132444_create_languages_table', 1),
(4, '2017_04_09_132544_create_ukraines_table', 1),
(6, '2017_04_09_132725_create_additionallies_table', 1),
(7, '2017_04_09_132830_create_foods_table', 1),
(8, '2017_04_12_113118_create_parse_smths_table', 2),
(13, '2017_04_14_085557_create_baskets_table', 3),
(14, '2017_04_09_132633_create_englishes_table', 4);

-- --------------------------------------------------------

--
-- Структура таблиці `parse_smths`
--

CREATE TABLE `parse_smths` (
  `id` int(10) UNSIGNED NOT NULL,
  `nbu_usd` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `parse_smths`
--

INSERT INTO `parse_smths` (`id`, `nbu_usd`, `created_at`, `updated_at`) VALUES
(1, '26.7000', '2017-04-12 12:57:02', '2017-04-12 12:57:02'),
(2, '26.71', '2017-04-12 13:19:34', '2017-04-12 13:19:34'),
(3, '26.7000', '2017-04-12 13:22:41', '2017-04-12 13:22:41'),
(4, '26.7000', '2017-04-12 13:23:23', '2017-04-12 13:23:23'),
(5, '26.7000', '2017-04-12 13:23:47', '2017-04-12 13:23:47'),
(6, '26.7000', '2017-04-12 13:30:16', '2017-04-12 13:30:16'),
(7, '26.7000', '2017-04-12 13:32:18', '2017-04-12 13:32:18'),
(8, '26.7000', '2017-04-12 13:43:03', '2017-04-12 13:43:03'),
(9, '26.6979', '2017-04-12 14:05:33', '2017-04-12 14:05:33'),
(10, '26.6979', '2017-04-12 14:06:40', '2017-04-12 14:06:40'),
(11, '26.6979', '2017-04-12 16:16:55', '2017-04-12 16:16:55'),
(12, '26.6711', '2017-04-13 12:49:19', '2017-04-13 12:49:19'),
(13, '26.6634', '2017-04-13 14:26:44', '2017-04-13 14:26:44'),
(14, '26.6634', '2017-04-13 14:58:46', '2017-04-13 14:58:46'),
(15, '26.6634', '2017-04-13 17:21:45', '2017-04-13 17:21:45'),
(16, '1', '2017-04-13 17:24:15', '2017-04-13 17:24:15'),
(17, '26.6634', '2017-04-13 17:24:57', '2017-04-13 17:24:57'),
(18, '26.6400', '2017-04-14 05:16:42', '2017-04-14 05:16:42'),
(19, '26.6421', '2017-04-14 07:01:24', '2017-04-14 07:01:24'),
(20, '26.6441', '2017-04-14 09:29:50', '2017-04-14 09:29:50'),
(21, '26.6414', '2017-04-14 17:28:21', '2017-04-14 17:28:21'),
(22, '26.6100', '2017-04-18 06:15:09', '2017-04-18 06:15:09');

-- --------------------------------------------------------

--
-- Структура таблиці `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'wickbull', 'wicked.redbull@gmail.com', '$2y$10$.oSx3r.e4H6Z5rMN1VqcmOZkhGh2hmHLI9S2vKxs5alTOE/IBVquS', 'QFymxGJ7f7pQ9fwxXPO9uj1thdFWqAbM5sa8MDV34Ln5hpg6SdnWtgMxAOPd', '2017-04-12 08:51:31', '2017-04-12 08:51:31');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `additionallies`
--
ALTER TABLE `additionallies`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `englishes`
--
ALTER TABLE `englishes`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `parse_smths`
--
ALTER TABLE `parse_smths`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `additionallies`
--
ALTER TABLE `additionallies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблиці `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблиці `englishes`
--
ALTER TABLE `englishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT для таблиці `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблиці `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблиці `parse_smths`
--
ALTER TABLE `parse_smths`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
