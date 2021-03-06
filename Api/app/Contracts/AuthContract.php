<?php
namespace App\Contracts;

interface AuthContract
{
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier();
     /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims();

    /**
     * Return success response message is data was saved successfully
     * @param $data
     * @return mixed
     */
    public function createUser($data);

}
