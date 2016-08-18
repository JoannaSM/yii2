$items = [
  ['label' => 'Item 1', 
    'url' => ['/controller/action'],
    'template' => '<a href="{url}"><img src="/../img/item1.png"></a>',
  ],
  ['label' => 'Item 1', 
    'url' => ['/controller/action'],
    'template' => '<a href="{url}"><img src="/../img/item1.png"></a>',
  ],
];
echo Menu::widget([
  'options' => ['id' => 'img-menu'],
  'items' => $items,
]);
