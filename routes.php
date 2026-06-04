<?php
return [
    ''            => ['HomeController' , 'show'      ],
    'about'       => ['PagesController', 'about'     ],
    'services'    => ['PagesController', 'services'  ], 
    'contact'     => ['PagesController', 'contact'   ],
    'task/create' => ['TasksController', 'create'    ],
    'task/toggle' => ['TasksController', 'toggle'    ],
    'task/delete' => ['TasksController', 'delete'    ],
    'login-form'  => ['LoginController', 'show'],
    'login'       => ['LoginController', 'login'     ],
    'logout'      => ['LoginController', 'logout'    ],
];