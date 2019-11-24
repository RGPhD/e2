<?php

return [
    '/' => ['AppController', 'index'],
    '/about' => ['AppController', 'about'],
    '/contact' => ['AppController', 'contact'],
    '/products' => ['ProductController', 'index'],
    '/products/save-review' => ['ProductController', 'saveReview'],
    '/product' => ['ProductController', 'show'],
    '/practice' => ['AppController', 'practice'],
    '/practice2' => ['AppController', 'practice2']
];