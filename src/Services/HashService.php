<?php

namespace Xpdeal\GamblingServices\Services;

class HashService
{
    protected string $ciphering = 'AES-128-CTR';

    protected int $options = 0;

    protected string $encryption_key = 'jordan';

    protected string $encryption_iv = '1234567891011121';

    public function encrypty(string $data): string|false
    {

        $iv_length = openssl_cipher_iv_length($this->ciphering);
        // Using openssl_encrypt() function to encrypt the data
        return openssl_encrypt($this->prepareDataToEncrypt($data), $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv);
    }

    public function decrypt(string $data): string|false
    {
        return openssl_decrypt($data, $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv);
    }

    /**
     * @param array<mixed> $data
     */
    public function prepareDataToEncrypt(array|string|int|float $data): string
    {
        if (is_array($data)) {
            $data = json_encode($data);
        }

        return strval($data);
    }
}
