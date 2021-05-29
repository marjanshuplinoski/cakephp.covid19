<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package        app.Controller
 * @link        https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class SummariesController extends Controller
{
    public function summaryByCountry()
    {

        App::uses('HttpSocket', 'Network/Http');
        App::uses('Xml', 'Utility');
        $HttpSocket = new HttpSocket();
        $this->autorender = false;
        $this->layout = null;
        // string data
        $results_decoded = $HttpSocket->get(
            'https://api.covid19api.com/summary'
        );
        $results = json_decode($results_decoded['body']);

        $this->Summary->create();


        foreach ($results->Countries as $country) {

            $this->Summary->set(array(
                    "country"=> $country->Country,
                    "countrycode"=> $country->CountryCode,
                    "slug"=> $country->Slug,
                    "newconfirmed"=> $country->NewConfirmed,
                    "totalconfirmed"=> $country->TotalConfirmed,
                    "newdeaths"=> $country->NewDeaths,
                    "totaldeaths"=> $country->TotalDeaths,
                    "newrecovered"=> $country->NewRecovered,
                    "totalrecovered"=> $country->TotalRecovered,
                    "date"=> $country->Date)
            );
            $this->Summary->save();
            $this->set('countries',$this->Summary->find('all'));

        }




    }

    public function index()
    {
    }
}
