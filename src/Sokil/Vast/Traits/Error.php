<?php

namespace Sokil\Vast\Traits;

trait Error
{
    /**
     * Add Error tracking url
     *
     * @param string $url
     *
     * @return $this
     */
    public function setError($url)
    {
        return $this->setTagValue('Error', $url);
    }

    /**
     * Get previously set Error tracking url value
     *
     * @return null|string
     */
    public function getError()
    {
        return $this->getTagValue('Error');
    }

    /**
     * Set value for given tag
     *
     * @param string $name
     * @param string $value
     *
     * @return $this
     */
    abstract public function setTagValue($name, $value);

    /**
     * Get given tag value
     *
     * @param string $name
     *
     * @return null|string
     */
    abstract public function getTagValue($name);
}