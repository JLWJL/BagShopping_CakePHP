<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';
$this->assign('title','Contact Us');
?>


<hr />

<address>
    <h3>Quality Bags Ltd.</h3><br /><br />
    <b>Address: </b>139, Carrington Rd, Auckland, NZ<br /><br />
    <b>Phone: </b>09-12345670 <br /><br />
    <b>Email: </b><a href="mailto:admin@qbags.com">admin@qbags.com</a>
</address>