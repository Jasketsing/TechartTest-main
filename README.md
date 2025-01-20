## Задание

В базе данных MySQL дана таблица новостей news со следующими колонками:
* id: идентификатор новости
* date: дата новости в формате DATETIME
* title: заголовок новости
* announce: краткое содержание новости
* content: детальное содержание новости
* image: имя файла изображения

Требуется организовать постраничный вывод новостей и показ отдельной новости, используя функции PHP для доступа к MySQL.

Дамп базы данных и иллюстрации к новостям находятся в архиве

Дизайн-макеты страниц размещены на сервисе Figma.

## Требования:
* Страницы верстать нужно как можно более точно в соответствии с макетами.
* Новости размещаются по четыре на странице.
* В постраничном навигаторе кнопка со стрелкой (переход на следующую страницу) не должна присутствовать на последней странице.
* Сортировка новостей - по дате в обратном порядке (новые сверху).
* На каждой странице списка новостей есть блок с последней новостью (последней в базе, а не на конкретной странице). Фоном для блока является иллюстрация последней новости, растянутая по ширине страницы и обрезанная в нужной пропорции.
* Иллюстрация на детальной странице может иметь любые соотношения сторон и должна сохранять их (не подгоняться под указанные в макете).
* Желательно реализовать код на архитектуре MVC с использованием ООП.
* Использование сторонних фреймворков и CMS не допускается.

## Результат
![1](https://github.com/user-attachments/assets/e3ab219a-5a8c-4fec-bfd8-305ae274998c)
![2](https://github.com/user-attachments/assets/01bc1e28-2c18-4015-a01f-f16b1975f675)



