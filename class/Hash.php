<?php
class Hash{
    function __construct()
    {
        
    }
    static function create($algo,$data,$key){

        $context = hash_init($algo,HASH_HMAC,$key);
        hash_update($context,$data);
        return hash_final($context);
    }
}