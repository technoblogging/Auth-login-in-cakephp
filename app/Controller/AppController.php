<?php
App::uses('Controller', 'Controller');

class AppController extends Controller {


	public $components = array(
								'Session','Auth' => array(
									'authenticate' => array(
										'Form' => array( 
											'userModel' => 'User',
	                                    	'fields' => array(
	                                            'username' => 'email',
	                                            'password' => 'password'
	                                        ),
											#'scope' => array('is_active' => '1')
	                                    )
	                            	),
	                            	# change your redirect path here
                    				#'loginAction' => '/users/login',
                  					#'loginRedirect' => array('controller' => 'pages', 'action' => 'home'),
                 					#'logoutRedirect' => array('controller' => 'admin', 'action' => 'login'),
            					),
        					);

}
