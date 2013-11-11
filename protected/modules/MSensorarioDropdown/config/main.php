<?php

return array(
    'defaultConfiguration' => 'default',
    'configurations' => array(
        'default' => array(
            'Country' => array(
                'id' => 'country',
                'name' => 'Regione',
                'model' => 'Country::getCountries(array(), $config[\'Country\'][\'label\']);',
                'label' => 'Seleziona una Regione',
            ),
            'State' => array(
                'id' => 'state',
                'name' => 'Provincia',
                'model' => 'State::getStates($id, array(), $config[\'State\'][\'label\']);',
                'message' => 'This country has no states',
                'label' => 'Seleziona una Provincia',
            ),
            'City' => array(
                'id' => 'city',
                'name' => 'Città',
                'model' => 'City::getCities($id, array(), $config[\'City\'][\'label\']);',
                'message' => 'This state has no cities',
                'label' => 'Seleziona una Città',
            ),
        ),
    ),
);