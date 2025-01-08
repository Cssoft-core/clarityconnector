<?php
namespace CSSoft\Clarityconnector\Api;

interface ConfigurationRepositoryInterface
{
    /**
     * Get configuration value.
     *
     * @api
     * @return string
     */
    public function getClarityId();
}
