<?php

namespace DansMaCulotte\Monetico\Resources;

use DansMaCulotte\Monetico\Exceptions\Exception;

class BillingAddressResource extends Ressource
{
    /** @var array */
    protected $keys = [
        'civility',
        'name',
        'firstName',
        'lastName',
        'middleName',
        'address',
        'addressLine1',
        'addressLine2',
        'addressLine3',
        'city',
        'postalCode',
        'country',
        'stateOrProvince',
        'countrySubdivision',
        'email',
        'phone',
        'mobilePhone',
        'homePhone',
        'workPhone',
    ];
}
