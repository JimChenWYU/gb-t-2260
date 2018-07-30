<?php

declare(ticks=1);

namespace JimChen\GBT2260\ResourceBuilder;

class ResourceDefinition
{
	/**
	 * `origin.yml` file path.
	 */
	const ORIGIN_FILENAME = '/../resources/origin.yml';

	/**
	 * 	`origin-lock.template.yml` file path.
	 */
	const ORIGIN_LOCK_TEMPLATE_FILINAME = '/../resources/origin-lock.template.yml';

	/**
	 * `origin-lock.yml` file path.
	 */
	const ORIGIN_LOCK_FILENAME = '/../resources/origin-lock.yml';

    /**
     * get file path.
     *
     * @static
     * @param $constant
     * @return null|string
     */
    public static function getFilePath($constant)
    {
        if (in_array($constant, [self::ORIGIN_FILENAME, self::ORIGIN_LOCK_TEMPLATE_FILINAME, self::ORIGIN_LOCK_FILENAME])) {
            return __DIR__ . $constant;
        }

        return null;
	}
}
