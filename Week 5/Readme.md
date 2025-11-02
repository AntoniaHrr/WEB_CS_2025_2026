## Какво е flexbox в CSS
Flexbox (Flexible Box Layout) е модул в CSS, който осигурява ефективен начин за подравняване, разпределяне и подреждане на елементи в контейнер.  
Това е **едномерна система** – контролира подредбата по **ред (row)** или **колона (column)**.

---

## Основна структура
```html
<div class="container">
  <div class="item">1</div>
  <div class="item">2</div>
  <div class="item">3</div>
</div>
```

```css
.container {
  display: flex;
  background: #f5f5f5;
}
.item {
  flex: 1;
  padding: 20px;
  background: lightblue;
  margin: 5px;
}
```

---

## Свойства на Flex контейнера

### `display`
- `flex` – създава блоков flex контейнер.  

### `flex-direction`
Определя посоката на главната ос.
```css
flex-direction: row | row-reverse | column | column-reverse;
```

### `justify-content`
Подравнява елементите по главната ос.
```css
justify-content: flex-start | center | space-between | space-around | space-evenly;
```

### `align-items`
Подравнява елементите по напречната ос.
```css
align-items: stretch | flex-start | flex-end | center | baseline;
```

### `flex-wrap`
Контролира дали елементите ще се пренасят на нов ред.
```css
flex-wrap: nowrap | wrap | wrap-reverse;
```

### Пример:
```css
.container {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
```

---

## Свойства на Flex елементите

### `flex-grow`
Определя колко да се разшири елементът спрямо останалите.
```css
.item {
  flex-grow: 1;
}
```

### `flex-shrink`
Определя как елементите се свиват при ограничено пространство.
```css
.item {
  flex-shrink: 1;
}
```

### `flex-basis`
Определя началния размер на елемента.
```css
.item {
  flex-basis: 200px;
}
```

### `order`
Контролира визуалния ред на елементите.
```css
.item:first-child {
  order: 3;
}
```

---

## Пример: Центриране на съдържание

```html
<div class="center-box">
  <p>Здравей, Flexbox!</p>
</div>
```

```css
.center-box {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  background: #ddd;
}
```
