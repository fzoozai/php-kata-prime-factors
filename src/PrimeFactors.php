<?php

class PrimeFactors
{
    public function generate ($argument1) {


        $primes = [];

        for($candidate = 2; $argument1 > 1; $candidate++) {

            while( $argument1 % $candidate == 0){

                $primes[] = $candidate;
                $argument1 /= $candidate;
            }
        }

        return $primes;
    }
}
