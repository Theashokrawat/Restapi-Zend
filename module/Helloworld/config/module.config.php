<?php
return array (
		'view_manager' => array (
				'display_not_found_reason' => true,
				'display_exceptions' => true,
				'doctype' => 'HTML5',
				'not_found_template' => 'error/404',
				'exception_template' => 'error/index',
				'template_map' => array (
						'error/404' => __DIR__ . '/../view/error/404.phtml',
						'error/index' => __DIR__ . '/../view/error/index.phtml' 
				),
				'template_path_stack' => array (
						__DIR__ . '/../view' 
				) 
		),
		'router' => array (
				'routes' => array (
						'hello' => array (
								'type' => 'Segment',
								'options' => array (
										'route' => '/test',
										'defaults' => array (
												'__NAMESPACE__' => 'Helloworld\Controller',
												'controller' => 'Index',
												'action' => 'index' 
										) 
								) 
						),
						'mymunchado' => array (
								'type' => 'Segment',
								'options' => array (
										'route' => '/add',
										'defaults' => array (											
												'__NAMESPACE__' => 'Helloworld\Controller',
												'controller' => 'Index',
        										'action' => 'add' 
										)
								)
						),
				) 
		),

		
		'controllers' => array (
				'invokables' => array (
						'Helloworld\Controller\Index' => 'Helloworld\Controller\IndexController' 
				) 
		),
		
		
		
);